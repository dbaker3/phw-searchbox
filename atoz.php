<?php 
function getJournalSearchBox() {
$journalSearchBox = <<<EOD
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
EOD;
return $journalSearchBox;
}