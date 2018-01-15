<?php
/**
 * @file
 * balerup_subsite_standarder.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function balerup_subsite_standarder_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
