<?php
/**
 * @file
 * Cellular theme-settings.
 */

/**
 * Cellular hook_form_system_theme_settings_alter().
 */
function cellular_form_system_theme_settings_alter(&$form, $form_state) {
  // Define form to hold pages as tabs.
  $form['c'] = array(
    '#type' => 'vertical_tabs',
    '#description' => t('Layout'),
    '#weight' => -10,
    '#attached' => array(),
  );