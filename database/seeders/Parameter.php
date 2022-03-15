<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Parameter extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parameters')->insert([
            'usage' => Str::random(10),
            'resolution' => Str::random(10),
            'orientation' => Str::random(10),
            'status' => '1',
            'isActif' => rand(0,1),
            'isDeleted' => rand(0,1),
            'createdUserId' => rand(1,10),
            'updatedUserId' => rand(1,10),
        ]);
    }
}
