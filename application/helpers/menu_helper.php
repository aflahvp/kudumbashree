<?php
/**
 *
 * Created by PhpStorm.
 * User: noushid
 * Date: 18/11/15
 * Time: 12:47 PM
 * author: Noushid
 *
 */


/**
 * perform render menu
 * @param array $menu
 * @param $current, $class
 * $menu -> class,title
 */

function render_menu($current)
{
    $menu = [
        'home',
        'services',
        'portfolios',
        'gallery',
        'about',
        'contact',
    ];
    $menu = [
        'home' => [
            'title' => 'home',
            'link' => 'home'
        ],
        'services' => [
            'title' => 'services',
            'link' => '#services'
        ],
        'portfolios' => [
            'title' => 'portfolios',
            'link' => 'portfolios'
        ],
        'gallery' => [
            'title' => 'gallery',
            'link' => 'gallery'
        ],
        'achievements' => [
            'title' => 'achievements',
            'link' => '#achievement'
        ],
        'about' => [
            'title' => 'about',
            'link' => 'about'
        ],
        'contact' => [
            'title' => 'contact',
            'link' => 'contact'
        ]
    ];
    $html = '';
    $html .= '<nav>
					<div class="container">
                    <div class="navbar-header logo">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="'.base_url('home').'" class="vm-logo"><img src="'.base_url('images/vm-logo.jpg').'" alt="" class="img-responsive"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-right">';
                    foreach ($menu as $key => $value) {
                        if ($value['title'] == $current and $key == 'home') {
                            $html .= '<li><a href="' . base_url('#'.$value['link']) . '" class="link-kumya active scroll"><span data-letters="'.ucfirst($value['title']).'">'.ucfirst($value['title']).'</span></a></li>';
                        } elseif ($value['title'] == $current) {
                            $html .= '<li><a href="' . base_url($value['link']) . '" class="link-kumya active"><span data-letters="'.ucfirst($value['title']).'">'.ucfirst($value['title']).'</span></a></li>';
                        }
                        else {
                            $html .= '<li><a href="' . base_url($value['link']) . '" class="link-kumya "><span data-letters="'.ucfirst($value['title']).'">'.ucfirst($value['title']).'</span></a></li>';
                        }
                    }
$html .='            </ul>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </nav>';

    return $html;
}


function dashboard_menu($current)
{
    $menu = [
        'dashboard' => [
            'title' => 'dashboard',
            'icon' => 'fa-tachometer',
            'link' => ''
        ],
        'Units' => [
            'title' => 'units',
            'icon' => 'fa-folder',
            'link' => 'units'
        ],
        'Events' => [
            'title' => 'events',
            'icon' => 'fa-folder',
            'link' => 'events'
        ],
        'Gallery' => [
            'title' => 'gallery',
            'icon' => 'fa-picture-o',
            'link' => 'gallery'
        ]
        // 'Members' => [
        //     'title' => 'members',
        //     'icon' => 'fa-folder',
        //     'link' => 'members'
        // ],
        
        // 'Products' => [
        //     'title' => 'products',
        //     'icon' => 'fa-folder',
        //     'link' => 'products'
        // ],
        // 'Loan' => [
        //     'title' => 'loan',
        //     'icon' => 'fa-folder',
        //     'link' => 'loan'
        // ],
        
        // 'About Us' => [
        //     'title' => 'About Us',
        //     'icon' => 'fa-folder',
        //     'link' => 'About Us'
        // ],
        // 'Contacts' => [
        //     'title' => 'Contacts',
        //     'icon' => 'fa-folder',
        //     'link' => 'Contacts'
        // ]
    ];

    $html = '';
    $html .='<ul class="nav nav-sidebar">';
    foreach ($menu as $key => $value) {
        if ($current == $value['link']) {
            $html .='<li class="active"><a href="'.base_url('dashboard/'.$value['link']).'">'.ucfirst($key).'</a></li>';
        } else {
            $html .='<li class=""><a href="'.base_url('dashboard/'.$value['link']).'">'.ucfirst($key).'</a></li>';
        }
    }
    $html .= '</ul>';
    return $html;

}


function unit_menu($current)
{
    $menu = [
        'home' => [
            'title' => 'home',
            'icon' => 'fa-tachometer',
            'link' => 'unit-home'
        ],
        // 'Loan' => [
        //     'title' => 'loan',
        //     'icon' => 'fa-folder',
        //     'link' => 'loan'
        // ],
        
        'members' => [
            'title' => 'members',
            'icon' => 'fa-trophy',
            'link' => 'unit-members'
        ],
        'products' => [
            'title' => 'products',
            'icon' => 'fa-trophy',
            'link' => 'unit-products'
        ],
        'events' => [
            'title' => 'events',
            'icon' => 'fa-trophy',
            'link' => 'unit-events'
        ],
        'loans' => [
            'title' => 'loans',
            'icon' => 'fa-trophy',
            'link' => 'unit-loans'
        ],
        'deposit' => [
            'title' => 'deposit',
            'icon' => 'fa-trophy',
            'link' => 'unit-deposit'
        ]
    ];

    $html = '';
    $html .='<ul class="nav nav-sidebar">';
    foreach ($menu as $key => $value) {
        if ($current == $value['link']) {
            $html .='<li class="active"><a href="'.base_url($_SESSION['username'].'/'.$value['link']).'">'.ucfirst($key).'</a></li>';
        } else {
            $html .='<li class=""><a href="'.base_url($_SESSION['username'].'/'.$value['link']).'">'.ucfirst($key).'</a></li>';
        }
    }
    $html .= '</ul>';
    return $html;
//
//    foreach ($menu as $key => $value) {
//        if ($current == $value['title']) {
//            $html .='<li><a href="'.base_url($_SESSION['username'].'/'.$value['link']).'" class="active">'.ucfirst($key).' &nbsp;<i class="menu-icon fa '.$value['icon'].' pull-right"></i></a></li>';
//        } else {
//            $html .='<li><a href="'.base_url($_SESSION['username'].'/'.$value['link']).'" class="">'.ucfirst($key).' &nbsp;<i class="menu-icon fa '.$value['icon'].' pull-right"></i></a></li>';
//        }
//    }
//    $html .= '</ul>
//        </div>
//      </nav>';
//    return $html;

}



function member_menu($current)
{
    $menu = [
        'Home' => [
            'title' => 'home',
            'icon' => 'fa-tachometer',
            'link' => 'home'
        ],
        'Loan' => [
            'title' => 'loan',
            'icon' => 'fa-folder',
            'link' => 'loan'
        ],
        'Deposit' => [
            'title' => 'deposit',
            'icon' => 'fa-trophy',
            'link' => 'deposit'
        ],
//        'Profile' => [
//            'title' => 'profile',
//            'icon' => 'fa-picture-o',
//            'link' => 'profile'
//        ],
//
//        'Feedback' => [
//            'title' => 'Feedback',
//            'icon' => 'fa-trophy',
//            'link' => 'Feedback'
//        ]
    ];

    $html = '';
    $html .='<ul class="nav nav-sidebar">';
    foreach ($menu as $key => $value) {
        if ($current == $value['link']) {
            $html .='<li class="active"><a href="'.base_url($_SESSION['username'].'/'.$value['link']).'">'.ucfirst($key).'</a></li>';
        } else {
            $html .='<li class=""><a href="'.base_url($_SESSION['username'].'/'.$value['link']).'">'.ucfirst($key).'</a></li>';
        }
    }
    $html .= '</ul>';
    return $html;
//    foreach ($menu as $key => $value) {
//        if ($current == $value['link']) {
//            $html .='<li><a href="'.base_url($_SESSION['username'].'/'.$value['link']).'" class="active">'.ucfirst($key).' &nbsp;<i class="menu-icon fa '.$value['icon'].' pull-right"></i></a></li>';
//        } else {
//            $html .='<li><a href="'.base_url($_SESSION['username'].'/'.$value['link']).'" class="">'.ucfirst($key).' &nbsp;<i class="menu-icon fa '.$value['icon'].' pull-right"></i></a></li>';
//        }
//    }
//    $html .= '</ul>
//        </div>
//      </nav>';
//    return $html;

}




