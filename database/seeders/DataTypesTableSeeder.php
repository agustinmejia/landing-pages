<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-06-02 17:55:30',
                'updated_at' => '2021-06-02 17:55:30',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-06-02 17:55:30',
                'updated_at' => '2021-06-02 17:55:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-06-02 17:55:31',
                'updated_at' => '2021-06-02 17:55:31',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'portfolios',
                'slug' => 'portfolios',
                'display_name_singular' => 'Proyecto',
                'display_name_plural' => 'Proyectos',
                'icon' => 'voyager-list',
                'model_name' => 'App\\Models\\Portfolio',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2022-06-17 12:08:22',
                'updated_at' => '2023-03-11 22:16:31',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'features',
                'slug' => 'features',
                'display_name_singular' => 'Característica',
                'display_name_plural' => 'Características',
                'icon' => 'voyager-list',
                'model_name' => 'App\\Models\\Feature',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"id","order_direction":"desc","default_search_key":"title","scope":null}',
                'created_at' => '2022-12-24 00:51:06',
                'updated_at' => '2022-12-24 00:54:21',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'customers',
                'slug' => 'customers',
                'display_name_singular' => 'Cliente',
                'display_name_plural' => 'Clientes',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\Customer',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"id","order_display_column":"id","order_direction":"desc","default_search_key":"name","scope":null}',
                'created_at' => '2022-12-24 01:00:47',
                'updated_at' => '2022-12-24 01:01:28',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'services',
                'slug' => 'services',
                'display_name_singular' => 'Servicio',
                'display_name_plural' => 'Servicios',
                'icon' => 'voyager-news',
                'model_name' => 'App\\Models\\Service',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-03-11 21:22:02',
                'updated_at' => '2023-03-11 21:24:29',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'metrics',
                'slug' => 'metrics',
                'display_name_singular' => 'Métrica',
                'display_name_plural' => 'Métricas',
                'icon' => 'voyager-params',
                'model_name' => 'App\\Models\\Metric',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2023-03-11 21:46:50',
                'updated_at' => '2023-03-11 21:46:50',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'testimonies',
                'slug' => 'testimonies',
                'display_name_singular' => 'Testimonio',
                'display_name_plural' => 'Testimonios',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\Testimony',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2023-03-11 23:10:35',
                'updated_at' => '2023-03-11 23:10:35',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'workers',
                'slug' => 'workers',
                'display_name_singular' => 'Miembro',
                'display_name_plural' => 'Equipo',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\Worker',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-03-11 23:40:51',
                'updated_at' => '2023-03-11 23:43:18',
            ),
        ));
        
        
    }
}