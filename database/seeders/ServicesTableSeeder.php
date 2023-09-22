<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Lorem Ipsum',
                'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
                'icon' => 'bi-briefcase',
                'image' => NULL,
                'status' => 1,
                'created_at' => '2023-03-11 21:30:00',
                'updated_at' => '2023-03-11 21:30:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Dolor Sitema',
                'description' => 'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata',
                'icon' => 'bi-card-checklist',
                'image' => NULL,
                'status' => 1,
                'created_at' => '2023-03-11 21:30:22',
                'updated_at' => '2023-03-11 21:30:22',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Sed ut perspiciatis',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
                'icon' => 'bi-bar-chart',
                'image' => NULL,
                'status' => 1,
                'created_at' => '2023-03-11 21:30:50',
                'updated_at' => '2023-03-11 21:30:50',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Nemo Enim',
                'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
                'icon' => 'bi-binoculars',
                'image' => NULL,
                'status' => 1,
                'created_at' => '2023-03-11 21:31:13',
                'updated_at' => '2023-03-11 21:31:13',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Magni Dolore',
                'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque',
                'icon' => 'bi-brightness-high',
                'image' => NULL,
                'status' => 1,
                'created_at' => '2023-03-11 21:31:43',
                'updated_at' => '2023-03-11 21:31:43',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Eiusmod Tempor',
                'description' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi',
                'icon' => 'bi-calendar4-week',
                'image' => NULL,
                'status' => 1,
                'created_at' => '2023-03-11 21:32:04',
                'updated_at' => '2023-03-11 21:32:04',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}