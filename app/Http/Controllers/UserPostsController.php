<?php

namespace App\Http\Controllers;

use App\Http\Controllers\JoshController;
use App\Post;
use App\PostCategory;
use App\PostComment;
use App\Http\Requests\PostCommentRequest;
use App\Http\Requests\PostRequest;
use Response;
use Sentinel;
use Intervention\Image\Facades\Image;
use DOMDocument;

class UserPostsController extends JoshController
{


    private $tags;

    public function __construct()
    {
        parent::__construct();
        $this->tags = Post::allTags();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Grab all the posts
        $posts = Post::all();
        // Show the page
        return view('my-account', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $postcategory = PostCategory::pluck('title', 'id');
        return view('my-account', compact('postcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostRequest $request)
    {

        $post = new Post($request->except('files', 'image', 'tags'));
        $message=$request->get('content');
        $dom = new DomDocument();
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        // foreach <img> in the submited message
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            // if the img source is 'data-url'
            if (preg_match('/data:image/', $src)) {
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                // Generating a random filename
                $filename = uniqid();
                $filepath = "uploads/post/$filename.$mimetype";
                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                    // resize if required
                    /* ->resize(300, 200) */
                    ->encode($mimetype, 100)  // encode file to the specified mimetype
                    ->save(public_path($filepath));
                $new_src = asset($filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            } // <!--endif
        } // <!-
        $post->content = $dom->saveHTML();

        $picture = "";

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->extension()?: 'png';
            $picture = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . '/uploads/post/';
            $file->move($destinationPath, $picture);
            $post->image = $picture;
        }
        $post->user_id = Sentinel::getUser()->id;
        $post->save();

        $post->tag($request->tags?$request->tags:'');

        if ($post->id) {
            return redirect('my-account')->with('success', 'post created');
        } else {
            return Redirect::route('my-account')->withInput()->with('error', 'failed to create post');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  Post $post
     * @return view
     */
    public function show(Post $post)
    {
        $comments = Post::find($post->id)->comments;

        return view('my-account', compact('post', 'comments', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post $post
     * @return view
     */
    public function edit(Post $post)
    {
        $postcategory = PostCategory::pluck('title', 'id');
        return view('my-account', compact('post', 'postcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Post $post
     * @return Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $message=$request->get('content');
        libxml_use_internal_errors(true);
        $dom = new DomDocument();
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        // foreach <img> in the submited message
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            // if the img source is 'data-url'
            if (preg_match('/data:image/', $src)) {
                // get the mimetype
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                // Generating a random filename
                $filename = uniqid();
                info($filename);
                $filepath = "uploads/post/$filename.$mimetype";
                // @see http://image.intervention.io/api/
                $image = Image::make($src)
                    ->encode($mimetype, 100)  // encode file to the specified mimetype
                    ->save(public_path($filepath));
                $new_src = asset($filepath);
            } else {
                $new_src=$src;
            }
            $img->removeAttribute('src');
            $img->setAttribute('src', $new_src);
        } // <!-
        $post->content = $dom->saveHTML();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->extension()?: 'png';
            $picture = str_random(10) . '.' . $extension;
            $destinationPath = public_path() . '/uploads/post';
            $file->move($destinationPath, $picture);
            $post->image = $picture;
        }


        $post->retag($request->tags?$request->tags:'');

        if ($post->update($request->except('content', 'image', 'files', '_method', 'tags'))) {
            return redirect('admin/post')->with('success', trans('post/message.success.update'));
        } else {
            return Redirect::route('admin/post')->withInput()->with('error', trans('post/message.error.update'));
        }
    }

    /**
     * Remove post.
     *
     * @param  Post $post
     * @return Response
     */
    public function getModalDelete(Post $post)
    {
        $model = 'post';
        $confirm_route = $error = null;
        try {
            $confirm_route = route('admin.post.delete', ['id' => $post->id]);
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (RoleNotFoundException $e) {
            $error = trans('post/message.error.destroy', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post $post
     * @return Response
     */
    public function destroy(Post $post)
    {
        if ($post->delete()) {
            return redirect('admin/post')->with('success', trans('post/message.success.delete'));
        } else {
            return Redirect::route('admin/post')->withInput()->with('error', trans('post/message.error.delete'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostCommentRequest $request
     * @param Post               $post
     *
     * @return Response
     */
    public function storeComment(PostCommentRequest $request, Post $post)
    {
        $postcooment = new PostComment($request->all());
        $postcooment->post_id = $post->id;
        $postcooment->save();
        return redirect('admin/post/' . $post->id);
    }
}
