<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Device extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices')->insert([
            'customer_id' => rand(1,11),
            'reference' => Str::random(10),
            'name' => Str::random(10),
            'ip_local' => Str::random(10),
            'ip_public' => Str::random(10),
            'mac_adress' => Str::random(10),
            'status' => '1',
            'isActif' => rand(0,1),
            'isDeleted' => rand(0,1),
            'createdUserId' => rand(1,10),
            'updatedUserId' => rand(1,10),
        ]);
    }
}
