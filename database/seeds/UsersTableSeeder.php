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
        //
        DB::table('users')->insert([
            [
            'name' => 'あああ',
            'email' => 'test5@test.com',
            'password' => Hash::make('password123'),
        ],[
            'name' => 'いいい',
            'email' => 'test6@test.com',
            'password' => Hash::make('password123'),
        ],[
            'name' => 'ううう',
            'email' => 'test7@test.com',
            'password' => Hash::make('password123'),
        ]
        ]);
    }
}
