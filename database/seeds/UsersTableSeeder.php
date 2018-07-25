<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'UserAdmin',
            'email' => 'admin@kali.kz',
            'password' => bcrypt('G7nJ59AffF2'),
        ]);
    }
}
