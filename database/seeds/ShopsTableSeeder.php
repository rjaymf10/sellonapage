<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shops')->delete();
        
        \DB::table('shops')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin Store',
                'user_id' => 1,
                'is_active' => 1,
                'description' => 'Admin store with branded products',
                'rating' => NULL,
                'created_at' => '2020-07-19 07:13:00',
                'updated_at' => '2020-07-19 07:15:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'My Store',
                'user_id' => 2,
                'is_active' => 1,
                'description' => 'My store with branded products',
                'rating' => NULL,
                'created_at' => '2020-07-19 07:13:00',
                'updated_at' => '2020-07-19 07:15:02',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'My Shop',
                'user_id' => 3,
                'is_active' => 1,
                'description' => 'My shop with branded products',
                'rating' => NULL,
                'created_at' => '2020-07-19 11:27:00',
                'updated_at' => '2020-07-19 11:28:07',
            ),
        ));
        
        
    }
}