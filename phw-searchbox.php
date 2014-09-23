<?php
/*
Plugin Name: P.H. Welshimer Tabbed Searchbox
Description: Plugin displays tabbed searchbox for P.H. Welshimer website
Version: 1.0
Plugin URI: https://github.com/dbaker3/
Author: David Baker
Author URI: https://github.com/dbaker3/
*/

/* Thanks to inspirationalpixels.com for tab code */

function phwSearchbox($atts) {
   include_once 'searchbox.php';

   wp_enqueue_script('searchboxjs', plugins_url('searchbox.js', __FILE__));
   wp_enqueue_style('searchboxcss', plugins_url('searchbox.css', __FILE__, array(), '20140908', 'all'));

   $output = '<div class="tabs">';
   $output .= '   <ul class="tab-links">';
   $output .= '      <li class="active"><a href="#tab1">MCSearch</a></li>';
   $output .= '      <li><a href="#tab2">WorldCat</a></li>';
   $output .= '      <li><a href="#tab3">Journals</a></li>';
   $output .= '      <li><a href="#tab4">Databases</a></li>';
   $output .= '      <li><a href="#tab5">e-Reference</a></li>';
   $output .= '   </ul>';
   
   $output .= '   <div class="tab-content">';
   $output .= '      <div id="tab1" class="tab active">';
   $output .= getMCSearchBox();
   $output .= '      </div>';
         
   $output .= '      <div id="tab2" class="tab">';
   $output .= getWorldCatSearchBox(); 
   $output .= '      </div>';
         
   $output .= '      <div id="tab3" class="tab">';
   $output .= getJournalSearchBox();
   $output .= '      </div>';
         
   $output .= '      <div id="tab4" class="tab">';
   $output .= getDatabasesList(); 
   $output .= '      </div>';
         
   $output .= '      <div id="tab5" class="tab">';
   $output .= getReferenceList(); 
   $output .= '      </div>';
   $output .= '   </div>';
   $output .= '</div>';

	return $output;
}

add_shortcode( 'phw-searchbox-here', 'phwSearchbox');