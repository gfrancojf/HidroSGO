<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => '.::HIDROCAPITAL | SIGO::.',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => 'v-1.0',
    'logo_img' => 'logo/logosigoS.png',
    /// se debe solucionar el error de la imagen
    'logo_img_class' => 'brand-image',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-sm',
    'logo_img_alt' => 'HIDROCAPITAL - SIGO',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => false,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => false,
    'sidebar_nav_animation_speed' => 100,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type' => 'navbar-search',
            'text' => 'search',
            'topnav_right' => false,
        ],
        [
            'type' => 'fullscreen-widget',
            'topnav_right' => false,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ],

        [
            'text' => 'PANEL ADMINISTRATIVO',
            'url' => 'home',
            'icon' => ' fa-fw fas fa-table',

        ],
        ['header' => 'Seguridad'],
        [
            'text' => 'Control de Usuarios',
            'url' => 'usuarios',
            'can' => 'ver-users',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'Roles & Permisos',
            'url' => 'roles',
            'can' => 'crear-roles',
            'icon' => 'fas fa-fw fa-lock',
        ],

        [
            'text' => 'Auditoria de Eventos',
            'url'  => 'auditar',            
            'icon' => 'fa-fw fas fa-file',                    ],
            ['header' => 'SISTEMA PRINCIPAL'],
            [
                'text'    => 'REGISTRO',
                'icon'    => 'fas fa-fw fa-share',
                'submenu' => [

                    [
                        'text'    => 'Procesos Hidricos',
                        'submenu' => [
                            [
                                'text' => 'Captación',

                                'submenu' => [
                                    [
                                        'text' => 'Embalses',
                                        'can'  => 'ver-embalses',
                                        'url'  => 'embalses',
                                    ],
                                    [
                                        'text' => 'Dique Toma',
                                        'can'   =>  'ver-diquetoma',
                                        'url'  => 'diquetoma',
                                    ],
                                    [
                                        'text' => 'Toma Rio',
                                        'can'   => 'ver-tomaRios',
                                        'url'  => 'tomarios',
                                    ],
                                    [
                                        'text' => 'Pozo Profundo',
                                        'can'   =>  'ver-pozoprofundo',
                                        'url'  => 'pozoprofundos',
                                    ],
                                ],
                            ],
                            [
                                'text'    => 'Aducción',
                                'submenu' => [
                                    [
                                        'text' => 'Estacion de Bombeo',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                            [
                                'text'    => 'potabilización',
                                'submenu' => [
                                    [
                                        'text' => 'Plantas',
                                        'url'  => 'plantas',
                                    ],
                                    [
                                        'text' => 'Plantas de Filtración',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'Plantas Deszalinizadoras',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'Plantas Potabilizadoras',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'Plantas Portátiles',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                            [
                                'text'    => 'Distribución',
                                'submenu' => [
                                    [
                                        'text' => 'Estacion de Bombeo',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'Ciclo Distribución',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'Plan Abastecimiento',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => '',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                            [
                                'text'    => 'Saneamiento',
                                'submenu' => [
                                    [
                                        'text' => 'Estacion de Bombeo',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'text'    => 'Servicios Complementarios',
                        'submenu' => [
                            [
                                'text' => 'Procesos de Distribución',

                                'submenu' => [
                                    [
                                        'text' => 'Ciclo Distribución',
                                        'url'  => 'ciclos',
                                    ],
                                    [
                                        'text' => 'Plan de Abastecimiento',
                                        'url'  => 'abastecimiento',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'text'    => 'Servicios Auxiliares',
                        'submenu' => [
                            [
                                'text'    => 'Servicios Complementarios',
                                'submenu' => [
                                    [
                                        'text' => 'Organizaciones Populares',
                                        'url'  => 'organizaciones',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'text'    => 'Otros',
                        'submenu' => [
                            [
                                'text' => 'Almacén',
                                'submenu' => [
                                    [
                                        'text' => 'Registrar Categorías',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'Registrar un Material',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'Órdenes de Entrega',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'Solicitud de Material',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                            [
                                'text' => 'Averías',
                                'url'  => 'averias',
                            ],
                            [
                                'text' => 'Comerciales',
                                'submenu' => [
                                    [
                                        'text' => 'Registrar Tipo de Suscripción',
                                        'url'  => 'averias',
                                    ],
                                    [
                                        'text' => 'Registrar Suscriptores',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                            [
                                'text' => 'Flota Vehicular',
                                'submenu' => [
                                    [
                                        'text' => 'Registrar Maquinaria',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'text'    => 'DIAGRAMA ESCADA',
                'icon'    => 'fa fa-sitemap fa-lg',
                'submenu' => [
                    [
                        'text' => 'Procesos de Aducción',
                        'url'  => '#',
                    ],
                    [
                        'text' => 'Procesos de Distribución',
                        'url'  => '#',
                    ],
                ],
            ],
            [
                'text'    => 'SOLUCIONES HÍDRICAS',
                'icon'    => 'fa fa-cogs fa-lg',
                'submenu' => [
                    [
                        'text' => 'Crear Planes',
                        'url'  => '#',
                    ],
                    [
                        'text' => 'Listar Planes',
                        'url'  => '#',
                    ],
                    [
                        'text' => 'Añadir Obras a Planes',
                        'url'  => '#',
                    ],
                    [
                        'text' => 'Registrar Obras',
                        'url'  => '#',
                    ],
                    [
                        'text' => 'Listar Obras',
                        'url'  => '#',
                    ],
                ],
            ],
            [
                'text'    => 'MEDICÓN',
                'icon'    => 'fa fa-life-ring fa-lg',
                'submenu' => [
                    [
                        'text'    => 'PARÁMETROS',
                        'icon'    => 'fa fa-calculator fa-lg',
                        'submenu' => [
                            [
                                'text' => 'Embalses',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Dique Toma',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Pozos Profundos',
                                'url'  => '#',
                            ],
                            [
                                'text'    => 'Estaciones de Bombeo',
                                'icon'    => 'fa fa-random',
                                'submenu' => [
                                    [
                                        'text' => 'E.B Conducción',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'E.B Distribución',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'E.B Saneamiento',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                            [
                                'text' => 'Plantas Potabilizadoras',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Listar Clientes Comerciales',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Generar Facturación',
                                'url'  => '#',
                            ],
                        ],
                    ],
                    [
                        'text'    => 'Incidencias',
                        'icon'    => 'fa fa-tasks fa-lg',
                        'submenu' => [
                            [
                                'text' => 'Embalses',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Dique Toma',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Pozos Profundos',
                                'url'  => '#',
                            ],
                            [
                                'text'    => 'Estaciones de Bombeo',
                                'icon'    => 'fa fa-random',
                                'submenu' => [
                                    [
                                        'text' => 'E.B Conducción',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'E.B Distribución',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'E.B Saneamiento',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                            [
                                'text' => 'Plantas Potabilizadoras',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Afectaciones Eléctricas',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Flota Vehicular',
                                'url'  => '#',
                            ],
                        ],
                    ],
                    [
                        'text'    => 'Actualizaciones',
                        'icon'    => 'fa fa-spinner fa-lg',
                        'submenu' => [
                            [
                                'text' => 'Plan Cisterna',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Cierre de Averías',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Plan de Abastecimiento',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Seguimiento Plan Abas.',
                                'url'  => '#',
                            ],
                            [
                                'text'    => 'Fortalecimiento P.P',
                                'icon'    => 'fa fa-table',
                                'submenu' => [
                                    [
                                        'text' => 'Organizaciones Populares',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'BRIPPAS',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                            [
                                'text'    => 'Comerciales',
                                'icon'    => 'fa fa-table',
                                'submenu' => [
                                    [
                                        'text' => 'Listado Suscriptores',
                                        'url'  => '#',
                                    ],
                                    [
                                        'text' => 'Actualizar Cobranza',
                                        'url'  => '#',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'text'    => 'SEGUIMIENTO Y CONTROL',
                'icon'    => 'fa fa-space-shuttle',
                'submenu' => [
                    [
                        'text' => 'Plan Operativo (P.O.A)',
                        'url'  => '#',
                    ],
                    [
                        'text' => 'Alcances',
                        'url'  => '#',
                    ],
                ],
            ],
            [
                'text'    => 'REPORTES',
                'icon'    => 'fa fa-th-large',
                'submenu' => [
                    [
                        'text' => 'Histórico Indicadores',
                        'url'  => '#',
                    ],
                    [
                        'text' => 'Histórico Incidencias',
                        'url'  => '#',
                    ],
                    [
                        'text' => 'Ubicaciones Geográficas',
                        'url'  => '#',
                    ],
                    [
                        'text' => 'Sala Situacional',
                        'url'  => '#',
                    ],
                    [
                        'text' => 'Reporte Carga PPT',
                        'url'  => '#',
                    ],
                    [
                        'text' => 'Comerciales',
                        'url'  => '#',
                    ],
                    [
                        'text'    => 'Plan Abastecimiento',
                        'icon'    => 'fa fa-th-large',
                        'submenu' => [
                            [
                                'text' => 'Sectores',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Estatus de Entrega',
                                'url'  => '#',
                            ],
                        ],
                    ],
                    [
                        'text'    => 'Almacen',
                        'icon'    => 'fa fa-th-large',
                        'submenu' => [
                            [
                                'text' => 'Materiales',
                                'url'  => '#',
                            ],
                            [
                                'text' => 'Ordenes de Entrega',
                                'url'  => '#',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'text' => 'OPCIONES DEL SISTEMA',
                'icon'    => 'fa fa-cog',
                'url'  => '#',
            ],

        ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
