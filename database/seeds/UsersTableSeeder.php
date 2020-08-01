<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'McRonald Clint',
                'email' => 'admin@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-07-15 12:05:56',
                'password' => Hash::make('admin@webmall'),
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-07-17 04:11:51',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'name' => 'Seller1 Seller',
                'email' => 'seller1@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-07-15 12:05:56',
                'password' => Hash::make('seller@webmall'),
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-07-19 07:15:05',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Seller2 Seller',
                'email' => 'seller2@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-07-15 12:05:56',
                'password' => Hash::make('seller@webmall'),
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-07-19 11:28:09',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'Customer1 Customer',
                'email' => 'customer1@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-07-15 12:05:56',
                'password' => Hash::make('user@webmall'),
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-07-19 07:15:05',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'name' => 'Customer2 Customer',
                'email' => 'customer2@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-07-15 12:05:56',
                'password' => Hash::make('user@webmall'),
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-07-19 11:28:09',
            ),
        ));
        
        
    }
}