<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Post::factory()->create([
            "title"=>"Seeder San Kyi Tar Par Shin ",
            "description"=>"Seeder San Kyi Tar Par Shin description par database seeder ka nay par pyan san tar par",
        ]);
        Post::factory()->count(50)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
//    $this->call([
//        PostSeeder::class
//    ]);
    }
}
