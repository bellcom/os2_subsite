<?php
include( dirname(__FILE__) . '/include/settings.inc');

/**
 * Implements hook_form_FORM_ID_alter().
 */
function bellcom_alternative_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {
  if (isset($form_id)) {
    return;
  }

  // Settings form.
  _theme_bellcom_alternative_settings_form($form, $form_state);
//
  // Get all themes.
 $theme_settings_path = drupal_get_path('theme', 'bellcom_alternative') . '/theme-settings.php';
  if (file_exists($theme_settings_path) && !in_array($theme_settings_path, $form_state['build_info']['files'])) {
    $form_state['build_info']['files'][] = $theme_settings_path;
  }
  $form['#submit'][] = 'bellcom_alternative_form_system_theme_settings_submit';
}

function bellcom_alternative_form_system_theme_settings_submit(&$form, $form_state, $form_id = NULL) {
  $logo_fid = $form_state['values']['footer_branding_logo'];
  $logo = file_load($logo_fid);
  if (is_object($logo)) {
    // Check to make sure that the file is set to be permanent.
    if ($logo->status == 0) {
      // Update the status.
      $logo->status = FILE_STATUS_PERMANENT;
      file_save($logo);
      file_usage_add($logo, 'bellcom_alternative', 'theme', 1);
     }
  }
}
