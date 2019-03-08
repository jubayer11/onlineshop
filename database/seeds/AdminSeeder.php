<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Admin::create([
            'name'=>'jubayer',
            'user_name'=>'jubayer',
            'email'=>'ahmedjubayer54@gmail.com',
            'role_id'=>1,
            'status'=>1,
            'password'=>bcrypt(115487)

        ]);

    }
}
