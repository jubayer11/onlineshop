<?php

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
         $this->call(AdminSeeder::class);
        $this->call(SuperAdminRoleseeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductColorSeeder::class);
        $this->call(ProductTagSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductSizeSeeder::class);

        factory(\App\User::class,10)->create();
        factory(\App\Tag::class,5)->create();
        factory(\App\Post::class,10)->create()->each(function ($post){
            return $post->like()->save(factory(\App\Like::class)->make());
        });
        factory(\App\Comment::class,50)->create();

    }
}
