<?php
/**
 * @file
 * Cellular menu functions.
 */

/**
 * Returns full Main Menu instead of top-level links.
 *
 * @param array $vars
 *   Associative array of variables to merge with defaults from theme registry.
 */
function cellular_main_menu(array &$vars) {
  if (theme_get_setting('full_menu') == 1) {
    // Render the full main menu tree, use css / js to show/hide sub-menus.
    $menu_data = menu_tree_output(menu_tree_all_data('main-menu'));
  }
  else {
    $menu_data = menu_tree('main-menu');
  }

  $vars['main_menu'] = $menu_data;
}