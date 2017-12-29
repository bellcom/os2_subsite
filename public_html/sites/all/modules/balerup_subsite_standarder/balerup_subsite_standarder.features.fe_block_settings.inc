<?php
/**
 * @file
 * balerup_subsite_standarder.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function balerup_subsite_standarder_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['gtranslate-gtranslate'] = array(
    'cache' => -1,
    'custom' => 0,
    'delta' => 'gtranslate',
    'module' => 'gtranslate',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'adminimal' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'adminimal',
        'weight' => 0,
      ),
      'bellcom' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bellcom',
        'weight' => 0,
      ),
      'bootstrap' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bootstrap',
        'weight' => 0,
      ),
      'subsite_1_color' => array(
        'region' => 'header',
        'status' => 1,
        'theme' => 'subsite_1_color',
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  return $export;
}
