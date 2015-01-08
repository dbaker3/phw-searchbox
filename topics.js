/*
   topics.js - Check query string for selected topic and jump there
   Is only enqueued by phw-searchbox.php if on databases or e-reference pages
*/

jQuery(document).ready(function() {
var databasesVar = getQueryVariable("dbmenuoption");
var ereferenceVar = getQueryVariable("refmenuoption");
var tutorialVar = getQueryVariable("tutorialoption");

if (databasesVar) {
   jQuery("#" + databasesVar + " > li").addClass("open-item");
   jQuery("#" + databasesVar + " .acc-sublist").toggleClass("hidden");
   window.location.href = "#" + databasesVar;
}
else if (ereferenceVar) {
   jQuery("#" + ereferenceVar + " > li").addClass("open-item");
   jQuery("#" + ereferenceVar + " .acc-sublist").toggleClass("hidden");
   window.location.href = "#" + ereferenceVar;
}
else if (tutorialVar) {
   window.location.href = unescape(tutorialVar);
}

});

/* Get variables from URL query string. From: 
   http://css-tricks.com/snippets/javascript/get-url-variables/  */
function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}