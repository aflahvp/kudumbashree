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
        'Dashboard' => [
            'title' => 'dashboard',
            'icon' => 'fa-tachometer',
            'link' => ''
        ],
        'Units' => [
            'title' => 'units',
            'icon' => 'fa-folder',
            'link' => 'units'
        ],
        'Members' => [
            'title' => 'members',
            'icon' => 'fa-folder',
            'link' => 'members'
        ],
        'Events' => [
            'title' => 'events',
            'icon' => 'fa-folder',
            'link' => 'events'
        ],
        'Products' => [
            'title' => 'products',
            'icon' => 'fa-folder',
            'link' => 'products'
        ],
        'Loan' => [
            'title' => 'loan',
            'icon' => 'fa-folder',
            'link' => 'loan'
        ],
        'Gallery' => [
            'title' => 'gallery',
            'icon' => 'fa-picture-o',
            'link' => 'gallery'
        ]
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
    $html .='<nav class="sidebar-left">
        <div class="">
          <ul class="menu-left">
            <li>
              <div class="user-img">
                <img class="img-responsive img-circle center-block" src="'.base_url().'" alt="User">
              </div>
              <div class="user-id text-center">
                <span class="">Kudumbsree</span>
              </div>
            </li>';
    foreach ($menu as $key => $value) {
        if ($current == $key) {
            $html .='<li><a href="'.base_url('dashboard/'.$value['link']).'" class="active">'.ucfirst($key).' &nbsp;<i class="menu-icon fa '.$value['icon'].' pull-right"></i></a></li>';
        } else {
            $html .='<li><a href="'.base_url('dashboard/'.$value['link']).'" class="">'.ucfirst($key).' &nbsp;<i class="menu-icon fa '.$value['icon'].' pull-right"></i></a></li>';
        }
    }
    $html .= '</ul>
        </div>
      </nav>';
    return $html;

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
        'Profile' => [
            'title' => 'profile',
            'icon' => 'fa-picture-o',
            'link' => 'profile'
        ],
        'Deposit' => [
            'title' => 'deposit',
            'icon' => 'fa-trophy',
            'link' => 'deposit'
        ],
        'Feedback' => [
            'title' => 'Feedback',
            'icon' => 'fa-trophy',
            'link' => 'Feedback'
        ]
    ];

    $html = '';
    $html .='<nav class="sidebar-left">
        <div class="">
          <ul class="menu-left">
            <li>
              <div class="user-img">
                <img class="img-responsive img-circle center-block" src="'.base_url().'" alt="User">
              </div>
              <div class="user-id text-center">
                <span class="">Kudumbsree</span>
              </div>
            </li>';
    foreach ($menu as $key => $value) {
        if ($current == $key) {
            $html .='<li><a href="'.base_url('member/'.$value['link']).'" class="active">'.ucfirst($key).' &nbsp;<i class="menu-icon fa '.$value['icon'].' pull-right"></i></a></li>';
        } else {
            $html .='<li><a href="'.base_url('member/'.$value['link']).'" class="">'.ucfirst($key).' &nbsp;<i class="menu-icon fa '.$value['icon'].' pull-right"></i></a></li>';
        }
    }
    $html .= '</ul>
        </div>
      </nav>';
    return $html;

}

