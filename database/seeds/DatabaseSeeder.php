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
    }
}
