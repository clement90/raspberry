<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class Command extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commands')->insert([
            'reference' => Str::random(10),
            'description' => Str::random(10),
            'name' => Str::random(10),
            'order' => Str::random(10),
        ]);
    }
}
