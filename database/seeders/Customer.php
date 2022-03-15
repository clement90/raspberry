<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => Str::random(10),
            'adress_zip_code' => Str::random(10),
            'adress_country' => Str::random(10),
            'adress_street' => Str::random(10),
            'adress_number' => Str::random(10),
            'reference' => Str::random(10),
            'status' => '1',
            'isActif' => rand(0,1),
            'isDeleted' => rand(0,1),
            'createdUserId' => rand(1,10),
            'updatedUserId' => rand(1,10),
        ]);
    }
}
