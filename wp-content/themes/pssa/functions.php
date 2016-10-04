<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/wp-bootstrap-navwalker.php', // Bootstrap Navwalker
  'lib/cpt.php', // CPT
  'lib/cpt-roles.php', // CPT Roles
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

//Main menu item
function sr_nav_wrap() {
  // default value of 'items_wrap' is <ul id="%1$s" class="%2$s">%3$s</ul>'
  
  // open the <ul>, set 'menu_class' and 'menu_id' values
  $wrap  = '<ul id="%1$s" class="%2$s">';
  
  // get nav items as configured in /wp-admin/
  $wrap .= '%3$s';
  
  // the static link 
  $wrap .= '<li id="sr" class="sr"><a title="<span>Buscar</span>" href="#"><span>Buscar</span></a></li><li class="sf">'. get_search_form(false) .'</li>';
  
  // close the <ul>
  $wrap .= '</ul>';
  // return the result
  return $wrap;
}

//function to call first uploaded image in functions file
function default_thumb($size = 'full', $image = 'main-slider-thumb') {
    global $post, $posts;
    $image_url = '';
    ob_start();
    ob_end_clean();

    if(preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches))
        $image_url = $matches[1][0];
    else
        $image_url = get_bloginfo('template_url') . "/dist/images/". $image .".jpg";
    return $image_url;

}