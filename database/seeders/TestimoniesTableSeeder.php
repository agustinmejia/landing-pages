<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimoniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonies')->delete();
        
        \DB::table('testimonies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'full_name' => 'Saul Goodman',
                'type' => 'Ceo & Founder',
                'image' => NULL,
                'comment' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
                'status' => 1,
                'created_at' => '2023-03-11 23:15:50',
                'updated_at' => '2023-03-11 23:15:50',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'full_name' => 'Jena Karlis',
                'type' => 'Store Owner',
                'image' => NULL,
                'comment' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.',
                'status' => 1,
                'created_at' => '2023-03-11 23:16:19',
                'updated_at' => '2023-03-11 23:16:19',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'full_name' => 'Matt Brandon',
                'type' => 'Freelancer',
                'image' => NULL,
                'comment' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.',
                'status' => 1,
                'created_at' => '2023-03-11 23:16:39',
                'updated_at' => '2023-03-11 23:16:39',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'full_name' => 'John Larson',
                'type' => 'Entrepreneur',
                'image' => NULL,
                'comment' => 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.',
                'status' => 1,
                'created_at' => '2023-03-11 23:17:00',
                'updated_at' => '2023-03-11 23:17:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'full_name' => 'Sara Wilsson',
                'type' => 'Designer',
                'image' => NULL,
                'comment' => 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
                'status' => 1,
                'created_at' => '2023-03-11 23:18:32',
                'updated_at' => '2023-03-11 23:18:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}