<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        // generate 3 users/author
        $faker = Factory::create();
        // generate 3 users/author
        DB::table('users')->insert([
            [
                'name' => "AtLaravel",
                'slug' => "atLaravel",
                'email' => "m.nakharin@gmail.com",
                'password' => bcrypt('9091'),
                'bio' => $faker->text(rand(250, 300))
            ],
            [
                'name' => "leksoft",
                'slug' => "leksoft-fei",
                'email' => "m.leksoft@gmail.com",
                'password' => bcrypt('secret'),
                'bio' => $faker->text(rand(250, 300))
            ],
            [
                'name' => "nakharin",
                'slug' => "nakharin",
                'email' => "nakharin@gmail.com",
                'password' => bcrypt('secret'),
                'bio' => $faker->text(rand(250, 300))
            ]
        ]);
    }
}
