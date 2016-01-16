<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(ClientTableSeeder::class);
        //$this->call(UserTableSeeder::class);

        \CodeProject\Entities\Client::truncate();
        factory(\CodeProject\Entities\Client::class, 10)->create();

        Model::reguard();
    }
}
