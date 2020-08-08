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
                'email' => 'admin@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-07-15 12:05:56',
                'password' => '$2y$10$e8QLKQ6V10sR/ifsQIciRuqhOuftfD6PDjx1rN3vWua1HLwry/Rfi',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:16',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'name' => 'Seller1 Seller',
                'email' => 'seller1@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-07-15 12:05:56',
                'password' => '$2y$10$4Stj4RJnvjudt7CQMydMB.bRWjn.gwerENfa4eopSMNOyg3LQsFhe',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:45:06',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Seller2 Seller',
                'email' => 'seller2@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-07-15 12:05:56',
                'password' => '$2y$10$Jd7ILMlaIeSPm.zRK/dIh.AZzs.B3/eVRL.p6SiTt06JKMmou9tf.',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:44:52',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'Customer1 Customer',
                'email' => 'customer1@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-07-15 12:05:56',
                'password' => '$2y$10$JqiD48fyxYbC3k8EFrcFqOXEW97o1Gspk1pes1Jo4P9eQhGrDP6Ze',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:44:43',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'name' => 'Customer2 Customer',
                'email' => 'customer2@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-07-15 12:05:56',
                'password' => '$2y$10$L3P1LjUMIKB26Gb/oYtITuTPM6isL0zs0l2FMDsEOEsp7X5Xk.2t.',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-15 12:05:58',
                'updated_at' => '2020-08-05 11:44:28',
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 2,
                'name' => 'Customer3 Customer',
                'email' => 'customer3@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6.c4K/MGAwD.E2h0r6zYr.QaGGDsKfvnlgJAjPurcat6IQIsmf2fa',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-26 05:42:45',
                'updated_at' => '2020-08-05 11:45:26',
            ),
            6 => 
            array (
                'id' => 7,
                'role_id' => 3,
                'name' => 'Seller3 Seller',
                'email' => 'seller3@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-07-28 03:38:05',
                'password' => '$2y$10$hoBstlkldH.5bVn7cu2Ydue4rhH4cNeozin2JRzYTowmL0zDB2IdG',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-26 08:22:18',
                'updated_at' => '2020-08-05 11:45:35',
            ),
            7 => 
            array (
                'id' => 8,
                'role_id' => 2,
                'name' => 'Customer5 Customer',
                'email' => 'customer5@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2020-07-28 03:25:40',
                'password' => '$2y$10$ahGenT4egsVSHRx3AR.7DekwFpT5dPsExuUbd8dblSjnhYSj5a3yC',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-26 08:36:31',
                'updated_at' => '2020-08-05 11:45:57',
            ),
            8 => 
            array (
                'id' => 9,
                'role_id' => 3,
                'name' => 'Jean',
                'email' => 'jean@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aXTouEPl0RLrI10qW7muQ.FD.eGE/NndFBpy0HzpREu1iXz.Q0.c6',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-07-26 09:49:00',
                'updated_at' => '2020-08-05 11:46:05',
            ),
        ));
        
        
    }
}