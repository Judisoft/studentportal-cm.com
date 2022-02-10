<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostComment;
use App\Http\Requests\PostCommentRequest;

class PostController extends JoshController
{


    private $tags;

    public function __construct()
    {
        parent::__construct();
        $this->tags = Post::allTags();
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Grab all the posts
        $posts = Post::latest()->paginate(5);
        $tags = $this->tags;
        // Show the page
        return view('post', compact('posts', 'tags'));
    }

    /**
     * @param  string $slug
     * @return \Illuminate\View\View
     */
    public function getPost($slug = '')
    {

        $post = Post::where('slug', $slug)->first();
        if ($post) {
            $post->increment('views');
        } else {
            abort('404');
        }
        // Show the page
        return view('postitem', compact('post'));
    }

    /**
     * @param  $tag
     * @return \Illuminate\View\View
     */
    public function getPostTag($tag)
    {
        $posts = Post::withAnyTags($tag)->paginate(5);
        $tags = $this->tags;
        return view('post', compact('posts', 'tags'));
    }

    /**
     * @param  PostCommentRequest $request
     * @param  Post               $post
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeComment(PostCommentRequest $request, Post $post)
    {
        $postcooment = new PostComment($request->all());
        $postcooment->post_id = $post->id;
        $postcooment->save();
        return redirect('postitem/' . $post->slug);
    }
}
