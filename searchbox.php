<?php 
/*
P.H. Welshimer Tabbed Searchbox
Code for each tab of searchbox
*/

function getMCSearchBox() {
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
   <form id="worldcat" method="get" action="https://milligan.on.worldcat.org/search" target="_blank">
      <h2>Milligan &amp; Libraries Worldwide</h2>
      <input title="Search Milligan Catalog" required type="text" name="queryString" id="queryString" class="searchbox">
      <input type="submit" value="Search" name="search" id="worldcatsearch" class="searchbutton">
   </form>
   <div class="searchbox-links">
      <a href="https://milligan.on.worldcat.org/advancedsearch" target="_blank">Advanced Search</a> | <a href="https://milligan.on.worldcat.org/myaccount" target="_blank">My Patron Account</a>
   </div>
</div>
EOT;
return $worldCatSearchBox;
}

function getJournalSearchBox() {
$journalSearchBox = <<<EOT
<div id="atoz_search">
   <form id="EBSCOPubFinderSearch" action="" onsubmit="return ebscoHostSearchGo(this);" method="post">
      <h2>Journal Titles</h2>
		<input id="ebscohostftfwindow" name="ebscohostwindow" type="hidden" value="1">
		<input id="ebscohostftfurl" name="ebscohosturl" type="hidden" value="https://milligan.idm.oclc.org/login?url=http://search.ebscohost.com/login.aspx?direct=true&site=eds-live&scope=site&type=44&db=edspub&custid=s8886565&groupid=main&profid=edsmain&mode=bool&authtype=ip,guest">
		<input id="ebscohostftfsearchsrc" name="ebscohostsearchsrc" type="hidden" value="db">
		<input id="ebscohostftfsearchmode" name="ebscohostsearchmode" type="hidden" value="+">
		<input id="ebscohostftfkeywords" name="ebscohostkeywords" type="hidden" value="">
		<input id="ebscohostftfsearchtext" class="searchbox" name="ebscohostsearchtext" type="text"  placeholder="Enter title, publisher, subject or ISSN/ISBN">
		<input type="submit" value="Search" class="searchbutton">
	</form>
</div>
EOT;
return $journalSearchBox;
}

function getDatabasesList() {
$databasesList = <<<EOT
<form id="databases" method="get" action="https://library.milligan.edu/databases/" target="_blank">
   <h2>Databases</h2>
   <select title="Database Topics" class="searchbox" id="dbmenuoption" name="dbmenuoption">
      <option selected disabled class="selectbox-text">Choose a category...</option>
      <option value="general">General &amp; Multidisciplinary</option>
      <option value="arts">Arts &amp; Theater</option>
      <option value="business">Business &amp; Economics</option>
      <option value="communication">Communication, Information, Media &amp; Journalism</option>
      <option value="education">Education</option>
      <option value="engineering">Engineering, Computer Science &amp; Technology</option>
      <option value="history">History &amp; Humanities</option>
      <option value="literature">Literature &amp; Language</option>
      <option value="music">Music</option>
      <option value="nursing">Nursing, Occupational Therapy, Exercise Science &amp; Physician Assistant Studies</option>
      <option value="political">Political Science, Government &amp; Law</option>
      <option value="psychology">Psychology, Sociology &amp; Counseling</option>
      <option value="religion">Religion &amp; Philosophy</option>
      <option value="sciences">Sciences</option>
   </select>
   <input type="submit" class="searchbutton" value="Browse">
</form>
EOT;
return $databasesList; 
}

function getReferenceList() {
$referenceList = <<<EOT
<form id="reference" method="get" action="https://library.milligan.edu/ereference/" target="_blank">
   <h2>e-Encyclopedias &amp; Dictionaries</h2>
   <select title="Reference Topics" class="searchbox" id="refmenuoption" name="refmenuoption">
      <option selected disabled class="selectbox-text">Choose a category...</option>
      <option value="anthropology">Anthropology &amp; Cultural Studies</option>
      <option value="art">Art</option>
      <option value="history-ancient">History &raquo; Ancient &amp; Medieval</option>
      <option value="history-renaissance">History &raquo; Renaissance &amp; Reformation</option>     
      <option value="history-modern">History &raquo; Modern</option>
      <option value="history-united">History &raquo; United States</option>     
      <option value="history-world">History &raquo; World</option>
      <option value="languages">Languages</option>
      <option value="literature-criticism">Literature &raquo; Criticism, the Book &amp; Other</option>     
      <option value="literature-american">Literature &raquo; American</option>
      <option value="literature-english">Literature &raquo; English</option>     
      <option value="literature-world">Literature &raquo; World</option>
      <option value="music">Music</option>
      <option value="philosophy">Philosophy</option>
      <option value="political">Political Science, Government &amp; Law</option>
      <option value="psychology">Psychology</option>
      <option value="religion-general">Religion &raquo; General</option>
      <option value="religion-bible">Religion &raquo; Bible</option>
      <option value="religion-christianity">Religion &raquo; Christianity</option>
      <option value="religion-judaism">Religion &raquo; Judaism &amp; Islam</option>
      <option value="religion-buddhism">Religion &raquo; Buddhism, Hinduism &amp; Other</option>
      <option value="sociology-general">Sociology &raquo; General</option>
      <option value="sociology-human">Sociology &raquo; Human Development, Gender &amp; Family</option>
      <option value="sociology-social">Sociology &raquo; Social Problems &amp; Issues</option>
      <option value="theatre">Theatre, Film &amp; Dance</option>     
   </select>        
   <input type="submit" class="searchbutton" value="Browse">
</form>
EOT;
return $referenceList;
}

function getTutorialsList() {
$tutorialsList = <<<EOT
<form id="tutorials" method="get" action="">
   <h2>Learn to use Services &amp; Research Tools</h2>
   <select title="Tutorial Topics" class="searchbox" id="tutorialoption" name="tutorialoption">
      <option selected disabled class="selectbox-text">Choose a tutorial...</option>
      <optgroup label="Research Tools">
         <option value="http://gots.library.milligan.edu/tutorial/welcome-to-the-milligan-libraries-webpage">Welcome to the Milligan Libraries Website!</option>
         <option value="http://gots.library.milligan.edu/tutorial/introduction-to-mcsearch">MCSearch: Introduction to MCSearch!</option>
         <option value="http://gots.library.milligan.edu/tutorial/mcsearch-advanced-strategies">MCSearch: Advanced Strategies</option>
         <option value="http://gots.library.milligan.edu/tutorial/citationcreator">MCSearch: Citation Creator</option>
         <option value="http://gots.library.milligan.edu/tutorial/atla-scripture-search">ATLA: Scripture Search</option>
         <option value="http://gots.library.milligan.edu/tutorial/films-on-demand">Films on Demand</option>
         <option value="http://gots.library.milligan.edu/tutorial/jstor">JSTOR</option>
         <option value="http://gots.library.milligan.edu/tutorial/catalog-introduction">Finding Books &amp; Media</option>
         <option value="http://gots.library.milligan.edu/tutorial/mental-measurements-yearbook-with-tests-in-print">Mental Measurements Yearbook with Tests in Print</option>
         <option value="http://gots.library.milligan.edu/tutorial/testing-and-education-reference-center">Testing and Education Reference Center</option>
      </optgroup>
      <optgroup label="Library Services">
         <option value="http://gots.library.milligan.edu/tutorial/interlibraryloan">Interlibrary Loan</option>
         <option value="http://gots.library.milligan.edu/tutorial/renewing-library-materials">Renewing Library Materials</option>
      </optgroup>
      <optgroup label="eBooks">
         <option value="https://library.milligan.edu/checkout-ebsco-ebooks-on-your-computer-for-offline-reading/">Checkout EBSCO eBooks to your computer</option>
         <option value="https://library.milligan.edu/checkout-ebsco-ebooks-to-your-mobile-device-android-or-ios-for-offline-reading/">Checkout EBSCO eBooks to your mobile device (Android or iOS)</option>
      </optgroup>
   </select>
   <input type="submit" class="searchbutton" value="View">
   <noscript>
      <ul>
         <li><a href="http://gots.library.milligan.edu/tutorial/welcome-to-the-milligan-libraries-webpage">Welcome to the Milligan Libraries Website!</a></li>
         <li><a href="http://gots.library.milligan.edu/tutorial/introduction-to-mcsearch/single-page">Introduction to MCSearch!</a></li>
         <li><a href="http://gots.library.milligan.edu/tutorial/mcsearch-advanced-strategies/single-page">MCSearch: Advanced Strategies</a></li>
         <li><a href="http://gots.library.milligan.edu/tutorial/citationcreator/single-page">MCSearch: Citation Creator</a></li>
         <li><a href="http://gots.library.milligan.edu/tutorial/atla-scripture-search/single-page">ATLA Scripture Search</a></li>
         <li><a href="http://gots.library.milligan.edu/tutorial/films-on-demand/single-page">Films on Demand</a></li>
         <li><a href="http://gots.library.milligan.edu/tutorial/jstor/single-page">JSTOR</a></li>
         <li><a href="http://gots.library.milligan.edu/tutorial/catalog-introduction/single-page">Finding Books &amp; Media</a></li>
         <li><a href="http://gots.library.milligan.edu/tutorial/mental-measurements-yearbook-with-tests-in-print/single-page">Mental Measurements Yearbook with Tests in Print</a></li>
         <li><a href="http://gots.library.milligan.edu/tutorial/testing-and-education-reference-center/single-page">Testing and Education Reference Center</a></li>        
         <li><a href="http://gots.library.milligan.edu/tutorial/interlibraryloan/single-page">Interlibrary Loan</a></li>
         <li><a href="http://gots.library.milligan.edu/tutorial/renewing-library-materials/single-page">Renewing Library Materials</a></li>
         <li><a href="https://library.milligan.edu/checkout-ebsco-ebooks-on-your-computer-for-offline-reading/"></a>Checkout EBSCO eBooks to your computer</li>
         <li><a href="https://library.milligan.edu/checkout-ebsco-ebooks-to-your-mobile-device-android-or-ios-for-offline-reading/"></a>Checkout EBSCO eBooks to your mobile device (Android or iOS)</li>        
      </ul>
   </noscript>
</form>
EOT;
return $tutorialsList; 
}
