<?php

use App\Size;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
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
                'name'=>'L'


            ];
        $p2=
            [
                'name'=>'XL'

            ];
        $p3=
            [
                'name'=>'M'

            ];

        Size::create($p1);
        Size::create($p2);
        Size::create($p3);
    }
}
