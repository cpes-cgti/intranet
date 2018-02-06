<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => '',

    'title_prefix' => '',

    'title_postfix' => 'Intranet - IFPE campus Pesqueira',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>CPES</b> Intranet',

    'logo_mini' => '<b>CPES</b>',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'green',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'painel',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => null,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        [
            'header' => 'Autenticação e Autorização',
            'can' => 'auth_gate',
        ],
        [
            'text' => 'Usuários',
            'icon' => 'user',
            'can' => 'user_gate',
        ],
        [
            'text' => 'Perfis',
            'icon' => 'check-square',
            'can' => 'role_gate',
        ],
        [
            'header' => 'Gestão de Pessoas',
            'can' => 'people_management_gate',
        ],
        [
            'text' => 'Servidores',
            'icon' => 'users',
            'can' => 'government_employee_gate',
        ],
        [
            'text' => 'Setores',
            'icon' => 'sitemap',
            'can' => 'department_gate',
        ],
        [
            'header' => 'Compensação de aulas',
            'can' => 'class_compensation_gate',
        ],
        [
            'text' => 'Registrar ausência docente',
            'icon' => 'window-close',
            'can' => 'absence_gate',
        ],
        [
            'header' => 'Acesso ao campus',
            'can' => 'restricted_access_gate',
        ],
        [
            'text' => 'Pessoas',
            'icon' => 'male',
            'can' => 'person_gate',
        ],
        [
            'text' => 'Veículos particulares',
            'icon' => 'car',
            'can' => 'private_vehicle_gate',
        ],
        [
            'header' => 'Transportes',
            'can' => 'transports_gate',
        ],
        [
            'text' => 'Motoristas',
            'icon' => 'id-card',
            'can' => 'driver_gate',
        ],
        [
            'text' => 'Veículos',
            'icon' => 'bus',
            'can' => 'vehicle_gate',
        ],
        [
            'text' => 'Solicitar transporte',
            'icon' => 'calendar-plus-o',
            'can' => 'request_vehicle_gate',
        ],
        [
            'text' => 'Aprovar Viagem',
            'icon' => 'calendar-check-o',
            'can' => 'travel_approve_gate',
        ],
        [
            'text' => 'Agendar Viagem',
            'icon' => 'calendar',
            'can' => 'travel_schedule_gate',
        ],
        [
            'text' => 'Registrar Viagem',
            'icon' => 'sticky-note-o',
            'can' => 'travel_register_gate',
        ],
        [
            'header' => 'Notícias',
            'can' => 'news_gate',
        ],
        [
            'text' => 'Notícias',
            'icon' => 'newspaper-o',
            'route'  => 'post.index',
            'can' => 'post_gate',
        ],
    ],

    /*
    'menu' => [
        'MAIN NAVIGATION',
        [
            'text' => 'Blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Pages',
            'url'         => 'admin/pages',
            'icon'        => 'file',
            'label'       => 4,
            'label_color' => 'success',
        ],
        'ACCOUNT SETTINGS',
        [
            'text' => 'Profile',
            'url'  => 'admin/settings',
            'icon' => 'user',
        ],
        [
            'text' => 'Change Password',
            'url'  => 'admin/settings',
            'icon' => 'lock',
        ],
        [
            'text'    => 'Multilevel',
            'icon'    => 'share',
            'submenu' => [
                [
                    'text' => 'Level One',
                    'url'  => '#',
                ],
                [
                    'text'    => 'Level One',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'Level Two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'Level Two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'Level Three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'Level Three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'Level One',
                    'url'  => '#',
                ],
            ],
        ],
        'LABELS',
        [
            'text'       => 'Important',
            'icon_color' => 'red',
        ],
        [
            'text'       => 'Warning',
            'icon_color' => 'yellow',
        ],
        [
            'text'       => 'Information',
            'icon_color' => 'aqua',
        ],
    ],
    */

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
    ],
];
