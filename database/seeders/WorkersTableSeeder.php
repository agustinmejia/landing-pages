<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorkersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('workers')->delete();
        
        \DB::table('workers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'full_name' => 'Sarah Jhinson',
                'job' => 'Product Manager',
                'image' => NULL,
                'description' => 'Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'linkedin' => NULL,
                'status' => 1,
                'created_at' => '2023-03-11 23:43:48',
                'updated_at' => '2023-03-11 23:43:48',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'full_name' => 'Walter White',
                'job' => 'Chief Executive Officer',
                'image' => NULL,
                'description' => 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'linkedin' => NULL,
                'status' => 1,
                'created_at' => '2023-03-11 23:44:15',
                'updated_at' => '2023-03-11 23:44:15',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'full_name' => 'William Anderson',
                'job' => 'CTO',
                'image' => NULL,
                'description' => 'Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara',
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'linkedin' => NULL,
                'status' => 1,
                'created_at' => '2023-03-11 23:44:36',
                'updated_at' => '2023-03-11 23:44:36',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}