/* P.H. Welshimer Tabbed Searchbox */


jQuery(document).ready(function() {
   // Display searchbox after tab in accordion mode
   if (isItMobile() == true) {
      drawMobile();
   }
 
   jQuery('.tabs .tab-links a').on('click', function(e)  {
      var currentAttrValue = jQuery(this).attr('href');
 
      // Show/Hide Tab content areas
      jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
      // Change/remove current tab to active
      jQuery(this).parent('li').addClass('active').siblings().removeClass('active');       
      
      // Accordion stuff 9/23/14 - Move searchbox below appropriate tab when clicked
      if (isItMobile() == true) {drawMobile();}
 
      e.preventDefault();
   });
});

// If window resized below threshold display searchbox below accordion tab
var windowWidth = jQuery(window).width();
jQuery(window).resize(function(){	
   if (windowWidth != jQuery(window).width()) { // make sure window actually resized instead of Android keyboard redrawing DOM
      if (isItMobile() == true) { 
         drawMobile();
      }
      else {
         drawDesktop();
      }
      windowWidth = jQuery(window).width();
   }
});

// Check if media query has changed attribute so we know if on mobile device
function isItMobile() {
   if (jQuery('.tab-links li').css("float") == "none") {
      return true;
   }
   else {
      return false;
   }
}

// Draw accordion searchbox for mobile devices
function drawMobile() {
   jQuery('.tab-content').insertAfter('li.active a');
   // Force mobile sites for searchboxes where available
   document.getElementById('worldcat').action = "http://milligan.worldcat.org/m/search";
   // Adjust bottom border radius of last accordion tab if it's active or not
   if (jQuery('.tab-links li:last-child').hasClass('active')) {
      jQuery('.tab-links li:last-child a').css('-webkit-border-bottom-right-radius','0');
      jQuery('.tab-links li:last-child a').css('-webkit-border-bottom-left-radius','0');
      jQuery('.tab-links li:last-child a').css('-moz-border-radius-bottomright','0');
      jQuery('.tab-links li:last-child a').css('-moz-border-radius-bottomleft','0');
      jQuery('.tab-links li:last-child a').css('border-bottom-right-radius','0');
      jQuery('.tab-links li:last-child a').css('border-bottom-left-radius','0');
   }
   else {
      jQuery('.tab-links li:last-child a').css('-webkit-border-bottom-right-radius','2px');
      jQuery('.tab-links li:last-child a').css('-webkit-border-bottom-left-radius','2px');
      jQuery('.tab-links li:last-child a').css('-moz-border-radius-bottomright','2px');
      jQuery('.tab-links li:last-child a').css('-moz-border-radius-bottomleft','2px');
      jQuery('.tab-links li:last-child a').css('border-bottom-right-radius','2px');
      jQuery('.tab-links li:last-child a').css('border-bottom-left-radius','2px');
   }
}

function drawDesktop() {
   jQuery('.tab-content').insertAfter('.tab-links');
   // Switch back to desktop sites
   document.getElementById('worldcat').action = "http://milligan.worldcat.org/search";
}