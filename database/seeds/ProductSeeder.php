<?php

use App\Category;
use App\Product;
use App\SubCategory;
use App\Tag;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $p1=
            [
                'name'=>'book',
                'price'=> 200

            ];
        $p2=
            [
                'name'=>'java book',
                'price'=>100
            ];
        $p3=
            [
                'name'=>'php book',
                'price'=> 100
            ];

        Product::create($p1);
        Product::create($p2);
        Product::create($p3);
        //factory(Product::class,50)->create();
        //factory(Category::class,50)->create();
       // factory(SubCategory::class,50)->create();
        //factory(Tag::class,50)->create();
    }

}
