<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('features')->delete();
        
        \DB::table('features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Software a medida',
                'description' => 'Desarrollo de sistemas web personalizados hecho a la medida de tus necesidades.',
                'icon' => 'bi-code-slash',
                'status' => 1,
                'created_at' => '2022-12-24 01:06:40',
                'updated_at' => '2022-12-24 01:06:40',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Páginas web',
                'description' => 'Creación y mantenimiento de páginas web para todo tipo de negocios y empresas.',
                'icon' => 'bi-layout-text-window-reverse',
                'status' => 1,
                'created_at' => '2022-12-24 01:08:56',
                'updated_at' => '2022-12-24 01:08:56',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Consultoría',
                'description' => 'Brindamos asesoramiento profesional en desarrollo y despliegue de aplicaciones web y móviles.',
                'icon' => 'bi-list-check',
                'status' => 1,
                'created_at' => '2022-12-24 01:09:38',
                'updated_at' => '2022-12-24 01:09:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Hosting y dominio',
                'description' => 'Si tienes tu página web o sistema te brindamos alojamiento en la nube seguro y confiable.',
                'icon' => 'bi-hdd-stack',
                'status' => 1,
                'created_at' => '2022-12-24 01:10:15',
                'updated_at' => '2022-12-24 01:10:15',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}