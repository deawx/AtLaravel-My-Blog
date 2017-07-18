<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            [
                'title' => 'Laravel 5.2',
                'slug' => 'laravel-5-2'
            ],
            [
                'title' => 'Laravel 5.3',
                'slug' => 'larave-5-3'
            ],
            [
                'title' => 'Laravel 5.4',
                'slug' => 'laravel-5-4'
            ],
            [
                'title' => 'Vue',
                'slug' => 'vus-js'
            ],
            [
                'title' => 'AngularJS',
                'slug' => 'angular-js'
            ],
            [
                'title' => 'Freebies',
                'slug' => 'freebies'
            ],
            [
                'title' => 'Uncategorized',
                'slug' => 'uncategorized'
            ],
        ]);

        // update the posts data
       foreach (Post::pluck('id') as $postId)
       {
           $categories = Category::pluck('id');
           $categoryId = $categories[rand(0, $categories->count()-1)];

           DB::table('posts')
               ->where('id', $postId)
               ->update(['category_id' => $categoryId]);
       }
    }
}
