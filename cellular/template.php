<?php

/* * ************
  Cellular:: template.php

  Set global vars & load all functions for templates
 * ************** */

/*
  To Do:
 * $main_menu link #ids / .classes
 * Icons for file fields
 * Override main_menu block (instead of page.tpl var)
 * Add magic-line.js & superfish.js to main_menu & theme_settings

 * Shard social_media functions into separate module?
 */

$include = array(
    //'dev-functions.inc',
    'functions.inc',
    'social.inc',
    'preprocess.inc',
    'theme.inc',
    'alter.inc',
    'alter_form.inc',
    'alter_css.inc',
    'alter_js.inc',
    'process.inc',
);
$inc_path = drupal_get_path('theme', 'cellular') . '/inc';

foreach ($include as $i) {
    include_once($inc_path . '/' . $i);
}