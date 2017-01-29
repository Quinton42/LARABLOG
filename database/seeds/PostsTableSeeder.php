<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // App\Models\Post::truncate();  // Décommenter et relancer les seeds pour vider la base de donner
        factory(\App\Models\Post::class, 30)->create();
    }
}
