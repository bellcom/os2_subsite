<?php
/**
 * @file
 * balerup_subsite_standarder.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function balerup_subsite_standarder_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'gtranslate_flag_size';
  $strongarm->value = '16';
  $export['gtranslate_flag_size'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'gtranslate_look';
  $strongarm->value = 'dropdown';
  $export['gtranslate_look'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'gtranslate_main_lang';
  $strongarm->value = 'da';
  $export['gtranslate_main_lang'] = $strongarm;

  return $export;
}
