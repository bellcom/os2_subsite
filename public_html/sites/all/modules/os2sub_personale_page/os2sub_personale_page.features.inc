<?php
/**
 * @file
 * os2sub_personale_page.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function os2sub_personale_page_ctools_plugin_api($module = NULL, $api = NULL) {
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
function os2sub_personale_page_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function os2sub_personale_page_image_default_styles() {
  $styles = array();

  // Exported image style: photo_220x250.
  $styles['photo_220x250'] = array(
    'label' => 'Photo 220x250',
    'effects' => array(
      3 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 220,
          'height' => 250,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function os2sub_personale_page_node_info() {
  $items = array(
    'personale' => array(
      'name' => t('Personale'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
