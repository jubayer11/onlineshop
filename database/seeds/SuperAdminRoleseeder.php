<?php

use App\Role;
use Illuminate\Database\Seeder;

class SuperAdminRoleseeder extends Seeder
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
                'name'=>'SuperAdmin'

            ];
        $p2=
            [
                'name'=>'Admin'
            ];
        $p3=
            [
                'name'=>'Editor'
            ];

        Role::create($p1);
        Role::create($p2);
        Role::create($p3);
    }
}
