<?php

// $Id: color.inc,v 1.7 2010/12/14 19:53:14 dries Exp $
// Put the logo path into JavaScript for the live preview.
drupal_add_js(array('color' => array('logo' => theme_get_setting('logo', 'beta'))), 'setting');

$info = array(
    // Available colors and color labels used in theme.
    'fields' => array(
        'background' => t('Main background (body)'),
        'menu_bg' =>  t('Links and nav background'),
        'menu_links' => t('Text'),
    ),
    // Pre-defined color schemes.
    'schemes' => array(
        'default' => array(
            'title' => t('Default colors'),
            'colors' => array(
                'background' => '#f5f5ef', //main background color
                'menu_links' => '#ffffff', //text color
                'menu_bg' => '#981b6e', //menu background color
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
    // Preview files.
    'preview_css' => 'color/preview.css',
    'preview_js' => 'color/preview.js',
    'preview_html' => 'color/preview.html',
    // Base file for image generation.
    'base_image' => 'images/base.png',
);
