/* P.H. Welshimer Tabbed Searchbox */


jQuery(document).ready(function() {

   /* progressive javascript - hide inactive tabs and reveal as clicked on */
   jQuery('.tab-links li:first').addClass('active');
   jQuery('.tab').removeClass('active');
   jQuery('.tab:first').addClass('active');

   if (isItMobile() == true) {
      drawMobile();
   }
   
   jQuery('.tabs .tab-links a').on('click', function(e)  {
      var currentAttrValue = jQuery(this).attr('href');
      jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
      jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
      
      /* Automatically select textbox when user switches tabs */
      jQuery(this).blur(); // blur if tab contains no textbox
      if (currentAttrValue == "#tab1") {
         jQuery('input[name=ebscohostsearchtext]').focus();
      }
      else if (currentAttrValue == "#tab2") {
         jQuery('input[name=q]').focus();
      }
      else if (currentAttrValue == "#tab3") {
         jQuery('input[name=Find]').focus();
      }
      
      /* Accordion stuff 9/23/14 - Move searchbox below appropriate tab when clicked */
      if (isItMobile() == true) {drawMobile();}
 
      e.preventDefault();
   });
   jQuery('input[name=ebscohostsearchtext]').focus(); 
});


/* If window resized below threshold display searchbox below accordion tab */
var windowWidth = jQuery(window).width();
jQuery(window).resize(function(){	
   if (windowWidth != jQuery(window).width()) { /* make sure window actually resized instead of Android keyboard redrawing DOM */
      if (isItMobile() == true) { 
         drawMobile();
      }
      else {
         drawDesktop();
      }
      windowWidth = jQuery(window).width();
   }
});

/* Check if media query has changed attribute so we know if on mobile device */
function isItMobile() {
   if (jQuery('.tab-links li').css("float") == "none") {
      return true;
   }
   else {
      return false;
   }
}

/* Draw accordion searchbox for mobile devices */
function drawMobile() {
   jQuery('.tab-content').insertAfter('li.active a');
   /* Force mobile sites for searchboxes where available 
   document.getElementById('worldcat').action = "http://milligan.worldcat.org/m/search"; */
   /* Adjust bottom border radius of last accordion tab if it's active or not */
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
   /* Switch back to desktop sites */
   /*if ( $theElement = document.getElementById('worldcat') ) {
      $theElement.action = "https://milligan.worldcat.org/search";
   }*/
}
