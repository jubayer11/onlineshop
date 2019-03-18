<?php

use App\Category;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
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
                'name'=>'Book'

            ];
        $p2=
            [
                'name'=>'shirt'
            ];
        $p3=
            [
                'name'=>'pant'
            ];

        Category::create($p1);
        Category::create($p2);
        Category::create($p3);
    }
}
