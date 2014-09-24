<?php 
/*
P.H. Welshimer Tabbed Searchbox
*/

function getMCSearchBox() {
wp_enqueue_script('ebsco', 'http://support.ebscohost.com/eit/scripts/ebscohostsearch.js', false, '20140909', true);
$MCSearchBox = <<<EOT
<div id="eds_search">
	<form id="ebscohostCustomSearchBox" action="" onsubmit="return ebscoHostSearchGo(this);" method="post">
      <h2>Search everything</h2>
		<input id="ebscohostwindow" name="ebscohostwindow" type="hidden" value="1">
		<input id="ebscohosturl" name="ebscohosturl" type="hidden" value="http://search.ebscohost.com/login.aspx?direct=true&site=eds-live&scope=site&type=0&custid=s8886565&groupid=main&profid=edsmain&mode=bool&lang=en&authtype=ip,guest">
		<input id="ebscohostsearchsrc" name="ebscohostsearchsrc" type="hidden" value="db">
		<input id="ebscohostsearchmode" name="ebscohostsearchmode" type="hidden" value="+">
		<input id="ebscohostkeywords" name="ebscohostkeywords" type="hidden" value="">
		<input id="ebscohostsearchtext" class="searchbox" name="ebscohostsearchtext" type="text">
		<input id="search" type="submit" value="Search" class="searchbutton">
	</form>
</div>
EOT;
return $MCSearchBox;
}

function getWorldCatSearchBox() {
$worldCatSearchBox = <<<EOT
<div id="worldcat_search">
   <form id="worldcat" method="get" action="http://milligan.worldcat.org/search" target="_blank">
      <h2>Milligan Catalog and libraries worldwide</h2>
      <input type="text" name="q" id="q" class="searchbox">
      <input type="submit" value="Search" name="search" id="search" class="searchbutton">
   </form>
</div>
EOT;
return $worldCatSearchBox;
}

function getJournalSearchBox() {
$journalSearchBox = <<<EOT
<div id="atoz_search">
   <form name="frmAdvSearch" action="https://atoz.ebsco.com/titles/searchresults/12279" method="get" accept-charset="ISO-8859-1" target="_blank">
      <h2>Journal Titles</h2>
      <input id="Find" type="text" name="Find" class="searchbox" value="">
      <input id="search" value="Search" type="submit" class="searchbutton">
      <input type="hidden" name="GetResourcesBy" value="TitleNameSearch">
      <input type="hidden" name="resourceTypeName" value="journalsOnly">
      <input type="hidden" name="SearchType" value="BeginsWith">
   </form>
</div>
EOT;
return $journalSearchBox;
}

function getDatabasesList() {
$databasesList = <<<EOT
<form id="databases" method="get" action="http://library.milligan.edu/databases/" target="_blank">
   <h2>Databases</h2>
   <select class="searchbox" name="dbmenuoption">
      <option>Choose a topic...</option>
      <option value="general">General &amp; Multidisciplinary</option>
      <option value="arts">Arts &amp; Theater</option>
      <option value="business">Business &amp; Economics</option>
      <option value="communication">Communication, Information, Media &amp; Journalism</option>
      <option value="computer">Computer Science</option>
      <option value="education">Education</option>
      <option value="english">English, Literature &amp; Language</option>
      <option value="history">History &amp; Humanities</option>
      <option value="music">Music</option>
      <option value="nursing">Nursing &amp; Occupational Therapy</option>
      <option value="political">Political Science, Government &amp; Law</option>
      <option value="psychology">Psychology &amp; Sociology</option>
      <option value="religion">Religion &amp; Philosophy</option>
      <option value="sciences">Sciences</option>
      <option value="sports">Sports &amp; Sports Science</option>
   </select>
   <input type="submit" class="searchbutton" value="Browse">
</form>
EOT;
return $databasesList; 
}

function getReferenceList() {
$referenceList = <<<EOT
<form id="reference" method="get" action="http://library.milligan.edu/ereference/" target="_blank">
   <h2>e-Reference</h2>
   <select class="searchbox" name="refmenuoption">
      <option>Choose a topic...</option>
      <option value="anthropology">Anthropology &amp; Cultural Studies</option>
      <option value="art">Art</option>
      <option value="business-general">Business &raquo; General</option>     
      <option value="business-economic">Business &raquo; Economic History</option>
      <option value="communication">Communication &amp; Media Studies</option>     
      <option value="education">Education</option>
      <option value="geography">Geography</option>     
      <option value="history-ancient">History &raquo; Ancient &amp; Midieval</option>
      <option value="history-renaissance">History &raquo; Renaissance &amp; Reformation</option>     
      <option value="history-modern">History &raquo; Modern</option>
      <option value="history-united">History &raquo; United States</option>     
      <option value="history-world">History &raquo; World</option>
      <option value="journalism">Journalism</option>
      <option value="languages">Languages</option>
      <option value="literature-cricicism">Literature &raquo; Criticism, the Book &amp; Other</option>     
      <option value="literature-american">Literature &raquo; American</option>
      <option value="literature-english">Literature &raquo; English</option>     
      <option value="literature-world">Literature &raquo; World</option>
      <option value="mathematics">Mathematics</option>
      <option value="music">Music</option>
      <option value="nursing">Nursing, Occupational Therapy &amp; Medicine</option>
      <option value="philosophy">Philosophy</option>
      <option value="political">Political Science, Government &amp; Law</option>
      <option value="psychology">Psychology</option>
      <option value="religion-general">Religion &raquo; General</option>
      <option value="religion-christianity">Religion &raquo; Christianity</option>
      <option value="religion-judaism">Religion &raquo; Judaism &amp; Islam</option>
      <option value="religion-bible">Religion &raquo; Bible</option>
      <option value="religion-buddhism">Religion &raquo; Buddhism, Hinduism &amp; Other</option>
      <option value="science-general">Science &raquo; General</option>
      <option value="science-biology">Science &raquo; Biology, Life Science &amp; the Environment</option>
      <option value="science-computer">Science &raquo; Computer</option>
      <option value="science-physical">Science &raquo; Physical &amp; Earth Science (including Chemistry and Physics)</option>
      <option value="sociology-general">Sociology &raquo; General</option>
      <option value="sociology-human">Sociology &raquo; Human Development, Gender &amp; Family</option>
      <option value="sociology-social">Sociology &raquo; Social Problems &amp; Issues</option>
      <option value="sports">Sports &amp; Sports Science (including Nutrition and Exercise)</option>
      <option value="theatre">Theatre, Film &amp; Dance</option>     
   </select>        
   <input type="submit" class="searchbutton" value="Browse">
</form>
EOT;
return $referenceList;
}

// Create shortcode for script that checks GET variables.
// This will go on the Databases and e-Reference pages to see what
// option was chosen from the tabbed searchbox interface.
function checkGetVar($atts) { 
$code = <<<EOT
<script>
function getQueryVariable(variable) // thanks to CSS-tricks.com for getQueryVariable
{
   var query = window.location.search.substring(1);
   var vars = query.split("&");
   for (var i=0;i<vars.length;i++) {
      var pair = vars[i].split("=");
      if(pair[0] == variable){return pair[1];}
   }
   return(false);
}

var dbvar = getQueryVariable("dbmenuoption");
var refvar = getQueryVariable("refmenuoption");

if (dbvar) { // sent from database tab. We're on the databases page. dbvar contains id to jump to.
   $(document).ready(function()) {
      // hide list (since js-min.js script will toggle it and unhide it) and jump to it
      
   }
}
elsif (refvar) { // sent from eReference tab. We're on the ereferences page. refvar contains id to jump to.
      // hide list (since js-min.js script will toggle it and unhide it) and jump to it
}

</script>
EOT;
return $output;
}

add_shortcode( 'checkGetVarScript', 'checkGetVar' );














