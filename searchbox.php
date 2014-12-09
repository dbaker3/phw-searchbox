<?php 
/*
P.H. Welshimer Tabbed Searchbox
Code for each tab of searchbox
*/

function getMCSearchBox() {
wp_enqueue_script('ebsco', 'http://support.ebscohost.com/eit/scripts/ebscohostsearch.js', false, '20140909', true);
$MCSearchBox = <<<EOT
<div id="eds_search">
	<form id="ebscohostCustomSearchBox" onsubmit="return ebscoHostSearchGo(this);" method="post">
      <h2>Search Almost Everything</h2>
		<input id="ebscohostwindow" name="ebscohostwindow" type="hidden" value="1">
		<input id="ebscohosturl" name="ebscohosturl" type="hidden" value="https://milligan.idm.oclc.org/login?url=http://search.ebscohost.com/login.aspx?direct=true&amp;site=eds-live&amp;scope=site&amp;type=0&amp;custid=s8886565&amp;groupid=main&amp;profid=edsmain&amp;mode=bool&amp;lang=en&amp;authtype=ip,guest">
		<input id="ebscohostsearchsrc" name="ebscohostsearchsrc" type="hidden" value="db">
		<input id="ebscohostsearchmode" name="ebscohostsearchmode" type="hidden" value="+">
		<input id="ebscohostkeywords" name="ebscohostkeywords" type="hidden" value="">
		<input title="Search MCSearch" required id="ebscohostsearchtext" class="searchbox" name="ebscohostsearchtext" type="text">
		<input id="edssearch" type="submit" value="Search" class="searchbutton">
	</form>
</div>
EOT;
return $MCSearchBox;
}

function getWorldCatSearchBox() {
$worldCatSearchBox = <<<EOT
<div id="worldcat_search">
   <form id="worldcat" method="get" action="http://milligan.worldcat.org/search" target="_blank">
      <h2>Milligan &amp; Libraries Worldwide</h2>
      <input title="Search Milligan Catalog" required type="text" name="q" id="q" class="searchbox">
      <input type="submit" value="Search" name="search" id="worldcatsearch" class="searchbutton">
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
      <input title="Search Journal Titles" required id="Find" type="text" name="Find" class="searchbox" value="">
      <input id="atozsearch" value="Search" type="submit" class="searchbutton">
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
   <select title="Database Topics" class="searchbox" name="dbmenuoption">
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
   <select title="Reference Topics" class="searchbox" name="refmenuoption">
      <option>Choose a topic...</option>
      <option value="anthropology">Anthropology &amp; Cultural Studies</option>
      <option value="art">Art</option>
      <option value="business-general">Business &raquo; General</option>     
      <option value="business-economic">Business &raquo; Economic History</option>
      <option value="communication">Communication &amp; Media Studies</option>     
      <option value="education">Education</option>
      <option value="geography">Geography</option>     
      <option value="history-ancient">History &raquo; Ancient &amp; Medieval</option>
      <option value="history-renaissance">History &raquo; Renaissance &amp; Reformation</option>     
      <option value="history-modern">History &raquo; Modern</option>
      <option value="history-united">History &raquo; United States</option>     
      <option value="history-world">History &raquo; World</option>
      <option value="journalism">Journalism</option>
      <option value="languages">Languages</option>
      <option value="literature-criticism">Literature &raquo; Criticism, the Book &amp; Other</option>     
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
