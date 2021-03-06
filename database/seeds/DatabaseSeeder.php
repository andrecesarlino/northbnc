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
       $this->call(ClientsSeeder::class);
      $this->call(ProductSeeder::class);
       $this->call(CategorySeed::class);
       $this->call(LocationSeeder::class);
        $this->call(ContactSeeder::class);
    }
}
