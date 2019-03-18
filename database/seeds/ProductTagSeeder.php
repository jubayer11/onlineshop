<?php

use App\Tag;
use Illuminate\Database\Seeder;

class ProductTagSeeder extends Seeder
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
                'name'=>'fashion'


            ];
        $p2=
            [
                'name'=>'style'

            ];
        $p3=
            [
                'name'=>'model'

            ];

        Tag::create($p1);
        Tag::create($p2);
        Tag::create($p3);
    }
}
