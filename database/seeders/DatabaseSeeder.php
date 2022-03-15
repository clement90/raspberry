<?php

namespace Database\Seeders;

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
        \App\Models\Role::factory(10)->create();
        \App\Models\Parameter::factory(10)->create();
        \App\Models\Customer::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Device::factory(10)->create();
        \App\Models\Customer_User::factory(10)->create();
        \App\Models\Command::factory(10)->create();
        \App\Models\Log::factory(10)->create();
        \App\Models\Device_Parameter::factory(10)->create();
        \App\Models\Command_Device::factory(10)->create();
    }
}
