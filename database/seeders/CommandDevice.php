<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CommandDevice extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commands_devices')->insert([
            'command_id' => rand(1,15),
            'device_id' => rand(1,10),
            'status' => rand(0,1),
            'isActif' => rand(0,1),
            'isDeleted' => rand(0,1),
            'createdUserId' => rand(1,10),
            'updatedUserId' => rand(1,10),
        ]);
    }
    
}
