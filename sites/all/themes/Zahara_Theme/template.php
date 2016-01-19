<?php
function zahara_theme_preprocess_page(&$vars) {
drupal_add_js(drupal_get_path('theme', 'zahara_theme') . '/js/jquery.mousewheel-3.0.6.pack.js');
drupal_add_js(drupal_get_path('theme', 'zahara_theme') . '/js/fancybox/jquery.fancybox.pack.js');
drupal_add_css(drupal_get_path('theme', 'zahara_theme') . '/js/fancybox/jquery.fancybox.css');
$fancybox = "jQuery(document).ready(function() {
    jQuery('.fancybox').fancybox();
});";
drupal_add_js($fancybox, 'inline');
  if (isset($vars['node']->type)) {
    $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
  }
}
?>

<?php
function zahara_theme_theme() {
  $items = array();
  // create custom user-login.tpl.php
  $items['user_login'] = array(
  'render element' => 'form',
  'path' => drupal_get_path('theme', 'zahara_theme') . '/templates',
  'template' => 'user-login',
  'preprocess functions' => array(
  'zahara_theme_preprocess_user_login'
  ),
 );
return $items;
}
?>
