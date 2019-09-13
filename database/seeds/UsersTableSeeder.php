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
        for($i = 1; $i <= 100; $i++) {
            DB::table('users')->insert([
                'name' => 'test' . $i,
                'email' => 'test' . $i . '@test.com',
                'password' => bcrypt('test'),
                'remember_token' => bcrypt('test'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}