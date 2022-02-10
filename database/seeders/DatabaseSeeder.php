<?php
namespace Database\Seeders;
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([AdminSeeder::class,
        CountrySeeder::class,
        DummyUsers::class,
        InstitutionSeeder::class,
        BlogSeeder::class

    ]);
    }
}
