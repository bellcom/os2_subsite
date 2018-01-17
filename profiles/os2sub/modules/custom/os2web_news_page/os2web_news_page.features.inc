<?php
/**
 * @file
 * os2web_news_page.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function os2web_news_page_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function os2web_news_page_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function os2web_news_page_image_default_styles() {
  $styles = array();

  // Exported image style: os2web_base_style_news_big.
  $styles['os2web_base_style_news_big'] = array(
    'effects' => array(
      2 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 214,
          'height' => 116,
        ),
        'weight' => 1,
      ),
    ),
    'label' => 'os2web_base_style_news_big',
  );

  // Exported image style: os2web_base_style_news_medium.
  $styles['os2web_base_style_news_medium'] = array(
    'effects' => array(
      4 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 180,
          'height' => 140,
        ),
        'weight' => 1,
      ),
    ),
    'label' => 'os2web_base_style_news_medium',
  );

  // Exported image style: os2web_base_style_news_small.
  $styles['os2web_base_style_news_small'] = array(
    'effects' => array(
      3 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 60,
          'height' => 69,
        ),
        'weight' => 1,
      ),
    ),
    'label' => 'os2web_base_style_news_small',
  );

  return $styles;
}

/**
 * Implements hook_menu_position_default_menu_positions().
 */
function os2web_news_page_menu_position_default_menu_positions() {
  $items = array(
    'nyheder' => FALSE,
  );
  return $items;
}
