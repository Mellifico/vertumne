<?php 

// The Header-image 
 $defaults = array(

    'default-image'   => 'http://lorempixel.com/1280/600/nature',
    'width'           => 1280,
    'height'          => 600,
    'flex-width'      => false,
    'flex-height'     => false,
    'uploads'         => true,
    'random-default'  => true,
    'header-text'     => false,
    'default-text-color'  => '',
    'wp-head'             => '',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
);

 add_theme_support('custom-header', $defaults);
 
 ?>