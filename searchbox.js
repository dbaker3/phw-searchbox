/* P.H. Welshimer Tabbed Searchbox */

jQuery(document).ready(function() {
   // Display searchbox after tab in accordion mode
   if (jQuery('.tab-links li').css("float") == "none") { // checks if media query rule active
      jQuery('.tab-content').insertAfter('li.active a');
   }
 
   jQuery('.tabs .tab-links a').on('click', function(e)  {
      var currentAttrValue = jQuery(this).attr('href');
 
      // Show/Hide Tabs
      jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
        
      // Accordion stuff 9/23/14 - Move searchbox below appropriate tab when clicked
      if (jQuery('.tab-links li').css("float") == "none") { // checks if media query rule active
         jQuery('.tab-content').insertAfter(this);
      }
 
      // Change/remove current tab to active
      jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
      e.preventDefault();
   });
});

// If window resized below threshold display searchbox below accordion tab
jQuery(window).resize(function(){	
   if (jQuery(".tab-links li").css("float") == "none" ){ // checks if media query rule active
      jQuery('.tab-content').insertAfter('li.active a');
   }
   else {
      jQuery('.tab-content').insertAfter('.tab-links');
   }
});
