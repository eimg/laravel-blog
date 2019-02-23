<?php

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();

        # php artisan migrate:refresh --seed
        for($i=0; $i<20; $i++) {
            $comment = new App\Comment();
            $comment->comment = $faker->paragraph;
            $comment->post_id = rand(1, 10);
            $comment->save();
        }

        for($i=0; $i<10; $i++) {
            $post = new App\Post();
            $post->title = $faker->sentence;
            $post->body = $faker->paragraph;
            $post->category_id = rand(1, 5);
            $post->save();
        }

        for($i=0; $i<5; $i++) {
            $category = new App\Category();
            $category->name = ucwords( $faker->word );
            $category->save();
        }

        // $this->call(UsersTableSeeder::class);
    }
}
