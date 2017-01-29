<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // App\User::truncate();  //Décommenter et relancer les seeds pour vider la base de donner
        factory(\App\User::class, 20)->create();
    }
}
