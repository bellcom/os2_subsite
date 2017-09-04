<?php
include( dirname(__FILE__) . '/include/settings.inc');

/**
 * Implements hook_form_FORM_ID_alter().
 */
function bellcom_alternative_form_system_theme_settings_alter(&$form, $form_state, $form_id = NULL) {
  if (isset($form_id)) {
    return;
  }

  // Settings form.
  _theme_bellcom_alternative_settings_form($form, $form_state);
}
