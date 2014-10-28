<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Use for styling the menu
    'class' => 'navbar',
 
    // Here comes the menu strcture
    'items' => [

        // This is a menu item
        'home'  => [
            'text'  => 'Start',
            'url'   => '',
            'title' => 'Start'
        ],
 
        // This is a menu item
        'test'  => [
            'text'  => 'Redovisning',
            'url'   => 'redovisning',
            'title' => 'Some title 2',

            // Here we add the submenu, with some menu items, as part of a existing menu item
            'submenu' => [

                'items' => [

                    // This is a menu item of the submenu
                    'item 1'  => [
                        'text'  => 'Kmom01',
                        'url'   => 'kmom01',
                        'title' => 'kmom01'
                    ],

                    // This is a menu item of the submenu
                    'item 2'  => [
                        'text'  => 'Kmom02',
                        'url'   => 'kmom02',
                        'title' => 'kmom012'
                    ],
                ],
            ],
        ],
 
        // This is a menu item
        'about' => [
            'text'  =>'Source',
            'url'   =>'source',
            'title' => 'Some title 3'
        ],
    ],
 
    // Callback tracing the current selected menu item base on scriptname
    'callback' => function($url) {
        if ($url == $this->di->get('request')->getRoute()) {
            return true;
        }
    },

    // Callback to create the urls
    'create_url' => function($url) {
        return $this->di->get('url')->create($url);
    },
];
