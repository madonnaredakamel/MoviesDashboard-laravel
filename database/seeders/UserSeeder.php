<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
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
                'name' => 'Administrator',
                'email' => 'admin11@app.com',
                'birthday'=>date('Y-m-d H:i:s'),
                'password' => bcrypt('password'),
                'email_verified_at'=>date('Y-m-d H:i:s'),
                'remeber_token'=>'ffffff',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Agency',
                'email' => 'agency11@app.com',
                'birthday'=>date('Y-m-d H:i:s'),
                'password' => bcrypt('password'),
                'email_verified_at'=>date('Y-m-d H:i:s'),
                'remeber_token'=>'fffgggg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'End',
                'email' => 'endcustome11r@app.com',
                'birthday'=>date('Y-m-d H:i:s'),
                'password' => bcrypt('password'),
                'email_verified_at'=>date('Y-m-d H:i:s'),
                'remeber_token'=>'kkkkkkk',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
            ]);

    }
}
