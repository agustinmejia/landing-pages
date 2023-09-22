<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MetricsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('metrics')->delete();
        
        \DB::table('metrics')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Happy Clients',
                'quantity' => '60',
                'icon' => 'bi-emoji-smile',
                'status' => 1,
                'created_at' => '2023-03-11 21:47:33',
                'updated_at' => '2023-03-11 21:47:33',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Projects',
                'quantity' => '40',
                'icon' => 'bi-journal-richtext',
                'status' => 1,
                'created_at' => '2023-03-11 21:47:53',
                'updated_at' => '2023-03-11 21:47:53',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Hours Of Support',
                'quantity' => '23',
                'icon' => 'bi-headset',
                'status' => 1,
                'created_at' => '2023-03-11 21:48:25',
                'updated_at' => '2023-03-11 21:48:25',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Hard Workers',
                'quantity' => '15',
                'icon' => 'bi-people',
                'status' => 1,
                'created_at' => '2023-03-11 21:48:44',
                'updated_at' => '2023-03-11 21:48:44',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}