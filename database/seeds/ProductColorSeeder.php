<?php

use App\Color;
use Illuminate\Database\Seeder;

class ProductColorSeeder extends Seeder
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
                'name'=>'red'

            ];
        $p2=
            [
                'name'=>'yellow'
            ];
        $p3=
            [
                'name'=>'black'
            ];

        Color::create($p1);
        Color::create($p2);
        Color::create($p3);
    }
}
