<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\User([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt("admin")
        ]);
        $user->save();
    }
}
