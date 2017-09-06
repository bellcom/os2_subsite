<?php

// $Id: color.inc,v 1.7 2010/12/14 19:53:14 dries Exp $
// Put the logo path into JavaScript for the live preview.
drupal_add_js(array('color' => array('logo' => theme_get_setting('logo', 'beta'))), 'setting');

$info = array(
    // Available colors and color labels used in theme.
    'fields' => array(
        'main_branding_color' =>  t('Links and nav background'),
        'menu_bar_links_color' => t('Menu nav links color'),
    ),
    // Pre-defined color schemes.
    'schemes' => array(
        'default' => array(
            'title' => t('Default colors'),
            'colors' => array(
                'main_branding_color' => '#981b6e', //menu background color
                'menu_bar_links_color' =>  '#ffffff'
            ),
        ),
        'alterntive' => array(
            'title' => t('Green'),
            'colors' => array(
                'main_branding_color' => '#5E8AB4', //menu background color
                'menu_bar_links_color' =>  '#ffffff'
            ),
        ),
        'alterntive2' => array(
            'title' => t('Blue'),
            'colors' => array(
                'main_branding_color' => '#A8AD00', //menu background color
                'menu_bar_links_color' =>  '#ffffff'
            ),
        ),
        'alterntive3' => array(
            'title' => t('Red'),
            'colors' => array(
                'main_branding_color' => '#BE3A34', //menu background color
                'menu_bar_links_color' =>  '#ffffff'
            ),
        ),
        'alterntive4' => array(
            'title' => t('Orange'),
            'colors' => array(
                'main_branding_color' => '#BE531C', //menu background color
                'menu_bar_links_color' =>  '#ffffff'
            ),
        ),
    ),
    
    // CSS files (excluding @import) to rewrite with new color scheme.
    'css' => array(
        'css/colors.css',
    ),
    // Files to copy.
    'copy' => array(
        'logo.png',
    ),
    // Gradient definitions.
    'gradients' => array(
//     array(
//       'dimension' => array(0,0,39,1704),
//       'direction' => 'vertical',
//       'colors' => array('link', 'link'),
//     ),
    ),
    // Color areas to fill (x, y, width, height).
    'fill' => array(
//    'bgmain' => array(0,0,36,522),
//    'bgsecond' => array (0,4,0,118),
//    'search_button' => array(1,0,35,32),
    ),
    // Coordinates of all the theme slices (x, y, width, height)
    // with their filename as used in the stylesheet.
    'slices' => array(
//    'images/ods-sub-transp-bg.png' => array(0, 0, 1, 522),
//    'images/sog.png' => array(1,0,35,32),
    ),
    // Reference color used for blending. Matches the base.png's colors.
    'blend_target' => '#ffffff',

    // Base file for image generation.
    'base_image' => 'images/base.png',
);
