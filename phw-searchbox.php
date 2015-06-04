<?php
/*
Plugin Name: P.H. Welshimer Tabbed Searchbox
Description: Plugin displays tabbed searchbox for P.H. Welshimer website
Version: 1.0
Plugin URI: https://github.com/dbaker3/phw-searchbox
Author: David Baker
Author URI: https://github.com/dbaker3/
*/

/* Thanks to inspirationalpixels.com for initial tab code */

add_action('wp_enqueue_scripts', 'enqueueExtFiles');

function phwSearchbox($atts) {
   include_once 'searchbox.php';

   $output = '<div class="tabs">';
   $output .= '   <ul class="tab-links">';
   $output .= '      <li><a href="#tab1">MCSearch</a></li>';
   $output .= '      <li><a href="#tab2">WorldCat</a></li>';
   $output .= '      <li><a href="#tab3">Journals</a></li>';
   $output .= '      <li><a href="#tab4">Databases</a></li>';
   $output .= '      <li><a href="#tab5">e-Reference</a></li>';
   $output .= '      <li><a href="#tab6">Tutorials</a></li>';
   $output .= '   </ul>';
   
   $output .= '   <div class="tab-content">';
   $output .= '      <div id="tab1" class="tab active">';
   $output .= getMCSearchBox();
   $output .= '      </div>';
         
   $output .= '      <div id="tab2" class="tab active">';
   $output .= getWorldCatSearchBox(); 
   $output .= '      </div>';
         
   $output .= '      <div id="tab3" class="tab active">';
   $output .= getJournalSearchBox();
   $output .= '      </div>';
         
   $output .= '      <div id="tab4" class="tab active">';
   $output .= getDatabasesList(); 
   $output .= '      </div>';
         
   $output .= '      <div id="tab5" class="tab active">';
   $output .= getReferenceList(); 
   $output .= '      </div>';
   
   $output .= '      <div id="tab6" class="tab active">';
   $output .= getTutorialsList(); 
   $output .= '      </div>';
   
   $output .= '   </div>';
   $output .= '</div>';

	return $output;
}

function enqueueExtFiles() {
   wp_enqueue_script('searchboxjs', plugins_url('searchbox.js', __FILE__), array('jquery'), filemtime(dirname(__FILE__) . '/searchbox.js'), true);
   wp_enqueue_script('ebscohostsearch', plugins_url('ebscohostsearch.js', __FILE__), array('jquery'), filemtime(dirname(__FILE__) . '/ebscohostsearch.js'), true);
   wp_enqueue_style('searchboxcss', plugins_url('searchbox.css', __FILE__), array(), filemtime(dirname(__FILE__) . '/searchbox.css'), 'all');
   wp_enqueue_script('topicsjs', plugins_url('topics.js', __FILE__), array('js-min'), filemtime(dirname(__FILE__) . '/topics.js'), true);
}

add_shortcode( 'phw-searchbox-here', 'phwSearchbox');

/* Check if user selected a topic for Databases or e-References pages, then scrolls to topic on that page | also checks if tutorial is selected 
if ( isset($_GET["dbmenuoption"]) || isset($_GET["refmenuoption"]) || isset($_GET["tutorialoption"]) ) {
   wp_enqueue_script('topicsjs', plugins_url('topics.js', __FILE__), array('js-min'), filemtime(dirname(__FILE__) . '/topics.js'), true);
}
*/