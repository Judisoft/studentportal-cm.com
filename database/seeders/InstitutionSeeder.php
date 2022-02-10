<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\PastQuestion;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institution_types = ['secondary', 'university'];
        $cities = ['Bamenda', 'Yaounde I', 'Yaounde II', 'Bamenda', 'Douala', 'Ngoundere', 'Maroua', 'Buea'];
        for($j=0; $j <= 5; $j++)
        {
            for ($i=0; $i<=1; $i++)
            {
                for($k=0; $k<8; $k++) 
                {
                    DB::table('institutions')->insert([
                        'institution_name' => 'University of '.$cities[$k],
                        'institution_type' => $institution_types[$i]
                     ]);
                }
            }
        }
    }
}
