<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Título del sitio',
                'value' => 'IdeaCreativa',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Descripción del sitio',
                'value' => 'Innovación y Desarrollo',
                'details' => '',
                'type' => 'text',
                'order' => 3,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Logo',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 6,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 34,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Banner',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Título del Admin',
                'value' => 'Template',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Descripción del Admin',
                'value' => 'Template Laravel y Voyager',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 2,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Icono',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
                'display_name' => 'Google Analytics Client ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 5,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'site.show_site_title_navbar',
                'display_name' => 'Mostrar título en navbar',
                'value' => '1',
                'details' => NULL,
                'type' => 'checkbox',
                'order' => 2,
                'group' => 'Site',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'site.logo-alt',
                'display_name' => 'Logo Navbar',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 7,
                'group' => 'Site',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'site.banner',
                'display_name' => 'Banner',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 8,
                'group' => 'Site',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'site.video',
                'display_name' => 'Video presentación',
                'value' => 'https://www.youtube.com/watch?v=KNXeXeTaXkg&ab_channel=IdeaCreativa',
                'details' => NULL,
                'type' => 'text',
                'order' => 9,
                'group' => 'Site',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'acerca-de.title',
                'display_name' => 'Título',
                'value' => 'Acerca de',
                'details' => NULL,
                'type' => 'text',
                'order' => 10,
                'group' => 'Acerca de',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'acerca-de.description',
                'display_name' => 'Descripción',
                'value' => 'Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 11,
                'group' => 'Acerca de',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'acerca-de.banner',
                'display_name' => 'Banner',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 12,
                'group' => 'Acerca de',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'acerca-de.subtitle',
                'display_name' => 'Subtítulo',
                'value' => 'Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero',
                'details' => NULL,
                'type' => 'text',
                'order' => 13,
                'group' => 'Acerca de',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'acerca-de.details',
                'display_name' => 'Detalles',
                'value' => '<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #1a1f24; font-family: \'Open Sans\', system-ui, -apple-system, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', \'Liberation Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
<p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #1a1f24; font-family: \'Open Sans\', system-ui, -apple-system, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', \'Liberation Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px;">quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>',
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 14,
                'group' => 'Acerca de',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'site.template',
                'display_name' => 'Template',
                'value' => 'templates.lumia.',
                'details' => '{
"options": {
"": "Por defecto",
"templates.lumia.": "Lumia"
}
}',
                'type' => 'select_dropdown',
                'order' => 15,
                'group' => 'Site',
            ),
            20 => 
            array (
                'id' => 22,
                'key' => 'servicios.title',
                'display_name' => 'Título',
                'value' => 'Servicios',
                'details' => NULL,
                'type' => 'text',
                'order' => 16,
                'group' => 'Servicios',
            ),
            21 => 
            array (
                'id' => 23,
                'key' => 'servicios.description',
                'display_name' => 'Descripción',
                'value' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 17,
                'group' => 'Servicios',
            ),
            22 => 
            array (
                'id' => 24,
                'key' => 'portafolio.title',
                'display_name' => 'Título',
                'value' => 'Portfolio',
                'details' => NULL,
                'type' => 'text',
                'order' => 18,
                'group' => 'Portafolio',
            ),
            23 => 
            array (
                'id' => 25,
                'key' => 'portafolio.description',
                'display_name' => 'Descripción',
                'value' => 'Sit sint consectetur velit quisquam cupiditate impedit suscipit',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 19,
                'group' => 'Portafolio',
            ),
            24 => 
            array (
                'id' => 26,
                'key' => 'testimonios.title',
                'display_name' => 'Título',
                'value' => 'Testimonials',
                'details' => NULL,
                'type' => 'text',
                'order' => 20,
                'group' => 'Testimonios',
            ),
            25 => 
            array (
                'id' => 27,
                'key' => 'testimonios.description',
                'display_name' => 'Descripción',
                'value' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 21,
                'group' => 'Testimonios',
            ),
            26 => 
            array (
                'id' => 28,
                'key' => 'equipo.title',
                'display_name' => 'Título',
                'value' => 'Equipo',
                'details' => NULL,
                'type' => 'text',
                'order' => 22,
                'group' => 'Equipo',
            ),
            27 => 
            array (
                'id' => 29,
                'key' => 'equipo.description',
                'display_name' => 'Descripción',
                'value' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 23,
                'group' => 'Equipo',
            ),
            28 => 
            array (
                'id' => 30,
                'key' => 'contacto.title',
                'display_name' => 'Título',
                'value' => 'Contacto',
                'details' => NULL,
                'type' => 'text',
                'order' => 24,
                'group' => 'Contacto',
            ),
            29 => 
            array (
                'id' => 31,
                'key' => 'contacto.description',
                'display_name' => 'Descripción',
                'value' => 'Magnam dolores commodi suscipit eius consequatur ex aliquid fuga',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 25,
                'group' => 'Contacto',
            ),
            30 => 
            array (
                'id' => 32,
                'key' => 'contacto.location',
                'display_name' => 'Localidad',
                'value' => 'Santísima Trinidad, Beni - Bolivia',
                'details' => NULL,
                'type' => 'text',
                'order' => 26,
                'group' => 'Contacto',
            ),
            31 => 
            array (
                'id' => 33,
                'key' => 'contacto.address',
                'display_name' => 'Dirección',
                'value' => 'Av. 6 de agosto esq. Santa Cruz',
                'details' => NULL,
                'type' => 'text',
                'order' => 27,
                'group' => 'Contacto',
            ),
            32 => 
            array (
                'id' => 34,
                'key' => 'contacto.email',
                'display_name' => 'Email',
                'value' => 'info@example.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 28,
                'group' => 'Contacto',
            ),
            33 => 
            array (
                'id' => 35,
                'key' => 'contacto.phones',
                'display_name' => 'Telfonos',
                'value' => '+1 5589 55488 51',
                'details' => NULL,
                'type' => 'text',
                'order' => 29,
                'group' => 'Contacto',
            ),
            34 => 
            array (
                'id' => 36,
                'key' => 'redes-sociales.facebook',
                'display_name' => 'Facebook',
                'value' => '#',
                'details' => NULL,
                'type' => 'text',
                'order' => 30,
                'group' => 'Redes Sociales',
            ),
            35 => 
            array (
                'id' => 37,
                'key' => 'redes-sociales.twitter',
                'display_name' => 'Twitter',
                'value' => '#',
                'details' => NULL,
                'type' => 'text',
                'order' => 31,
                'group' => 'Redes Sociales',
            ),
            36 => 
            array (
                'id' => 38,
                'key' => 'redes-sociales.instagram',
                'display_name' => 'Instagram',
                'value' => '#',
                'details' => NULL,
                'type' => 'text',
                'order' => 32,
                'group' => 'Redes Sociales',
            ),
            37 => 
            array (
                'id' => 39,
                'key' => 'redes-sociales.linkedin',
                'display_name' => 'Linkedin',
                'value' => '#',
                'details' => NULL,
                'type' => 'text',
                'order' => 33,
                'group' => 'Redes Sociales',
            ),
            38 => 
            array (
                'id' => 40,
                'key' => 'site.tags',
                'display_name' => 'Palabras claves',
                'value' => 'ideacreativa,web,developer',
                'details' => NULL,
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ),
        ));
        
        
    }
}