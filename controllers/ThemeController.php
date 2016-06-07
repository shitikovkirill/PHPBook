<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 05.06.16
 * Time: 20:23
 */

namespace Theme\Controllers;

use Amostajo\LightweightMVC\Controller;

class ThemeController extends Controller
{
    public function addMyWidget(){
        register_sidebar( array(
            'name' => 'Single left sidebar',
            'id' => 'single_left',
            'before_widget' => '<div class="cont_bdyrigt_boxcon">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ) );
    }
}