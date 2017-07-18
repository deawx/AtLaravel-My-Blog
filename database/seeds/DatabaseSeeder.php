<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  php composer.phar dump-autoload
     * @return void
     */
    public function run()
    {
        Model::unguard();
         $this->call(UsersTableSeeder::class);
         $this->call(PostsTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(RolesTableSeeder::class);
         $this->call(PermissionsTableSeeder::class);
         $this->call(TagsTableSeeder::class);

    }
}
