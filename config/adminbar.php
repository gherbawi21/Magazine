<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use App\Http\Controllers\MainController;
return array(

    /**
     *
     * Change this to false to disable admin bar
     *
     * */
    'enabled'=>true,

    /**
     *
     * Please specify your admin pages' url so that Admin Bar does not show up in
     * your admin pages.
     *
     * The default is 'admin/*'
     * When loading Admin Bar, It checks if current url matches the path set here with Illuminate\Http\Request::is().
     *
     * */
    'excludes' => 'admin/*',

    /**
     *
     * In order to show Admin Bar only for logged in admin users,
     * please specify how to tell if current visitor is logged in and also an admin
     * user.
     *
     * As a default, we just return true.
     *
     * */
    'is_admin' => true,
    /**
     *
     * Specify links to show on Admin Bar.
     *
     * */
    'menus' => array(
        ['title'=>'Dashbord', 'path'=> 'http://magazine.test/admin/article'],
        ['title'=>'Articles', 'path'=>[
            ['title'=>'Articles', 'path'=>'http://magazine.test/admin/article'],
            ['title'=>'Add Article', 'path'=>'http://magazine.test/admin/article/add']
        ]
        ],
        ['title'=>'Categories', 'path'=>[
            ['title'=>'Categories', 'path'=>'http://magazine.test/admin/category'],
            ['title'=>'Add Categories', 'path'=>'http://magazine.test/admin/category/add']
        ]
        ],
        ['title'=>'Contact Form Data', 'path'=> 'http://magazine.test/admin/contact'],
        ['title'=>'Newsletter Emails', 'path'=> 'http://magazine.test/admin/mail'],
    ),
);
