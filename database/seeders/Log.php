<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Log extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logs')->insert([
            'device_id' => rand(1,10),
            'temperature' => Str::random(10),
            'tension' => Str::random(10),
            'storage' => Str::random(10),
            'up_time' => Str::random(10),
            'ip_lan' => Str::random(10),
            'ip_one' => Str::random(10),
            'ping' => Str::random(10),
            'status' => '1',
            'isActif' => rand(0,1),
            'isDeleted' => rand(0,1),
            'createdUserId' => rand(1,10),
            'updatedUserId' => rand(1,10),
        ]);
    }
}
