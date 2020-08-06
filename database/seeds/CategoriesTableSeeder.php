<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Men',
                'slug' => 'men',
                'created_at' => '2020-08-05 12:57:29',
                'updated_at' => '2020-08-05 12:57:29',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Women',
                'slug' => 'women',
                'created_at' => '2020-08-05 12:57:43',
                'updated_at' => '2020-08-05 12:59:23',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 1,
                'order' => 1,
                'name' => 'Watches',
                'slug' => 'watches',
                'created_at' => '2020-08-05 12:59:02',
                'updated_at' => '2020-08-05 12:59:51',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 2,
                'order' => 1,
                'name' => 'Cosmetics',
                'slug' => 'cosmetics',
                'created_at' => '2020-08-05 12:59:18',
                'updated_at' => '2020-08-05 12:59:18',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 4,
                'order' => 1,
                'name' => 'Lipsticks',
                'slug' => 'lipsticks',
                'created_at' => '2020-08-05 13:20:24',
                'updated_at' => '2020-08-05 13:20:24',
            ),
        ));
        
        
    }
}