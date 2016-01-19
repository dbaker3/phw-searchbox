//ID of form for submission of terms to search
var searchformid = 'ebscohostCustomSearchBox';
//ID of search box input field
var searchboxid = 'ebscohostsearchtext';
//ID of div or span that the autocomplete results will appear below
var appenddiv = 'edsSearchWrapper';
//determines if search happens when autocomplete term is clicked
var searchOnClick = true;


var autodiv = document.createElement("div");
autodiv.id = "auto-results";
document.getElementById(appenddiv).appendChild(autodiv);
jQuery('#auto-results').css("display","none");
jQuery('#auto-results').append('<h3 class="result-title">Popular Terms</h3>');
function autocomp(){
    box = document.getElementById(searchboxid);
    query = box.value;
    query = query.replace(/ /gi,"+");
    jQuery('#auto-results').css("display","none");
    if (query != ''){
        getResults(encodeURIComponent(query));
        }
}
function getResults(term){
    console.log("Trying to get results");
    jQuery.ajax({
        type:"GET",
        //url: "autocomp.php",
        url: "https://widgets.ebscohost.com/prod/simplekey/autocomplete/autocomp.php",
        data: { q: term},
        dataType: 'json'
        }).done(function( data ) {
            console.log(data);
            results = jQuery.parseJSON(data);
            if (results.hasOwnProperty('terms')) {
                newTerm = document.getElementById(searchboxid).value;
                newTerm = newTerm.replace(/ /gi,"+");
                newTerm = encodeURIComponent(newTerm);
                /*
                console.log("Query is: "+term);
                console.log("New Term is: "+newTerm);
                */
                if (term == newTerm){
                    jQuery("#auto-results").css("display","none");
                    jQuery("#auto-results").find("li").each(function(){
                        jQuery(this).remove();
                    });
                    jQuery.each(results.terms, function(){
                        jQuery('#auto-results').append('<li class="result" onclick="updateSearch(&quot;'+this['term']+'&quot;)">'+this['term']+'</li>');
                    });
                    jQuery("#auto-results").css("display","block");
                }   
            }
            else {
                var div = document.getElementById('auto-results');
                if (div != null) {
                    jQuery("#auto-results").css("display","none");
                }
            }
        });
}
function updateSearch(term){
    term = term.trim();
    document.getElementById(searchboxid).value = term;
    if (searchOnClick == true) {
        jQuery('#'+searchformid).submit();
    }
    if (searchOnClick == false) {autocomp();}
}
jQuery('body').click(function(e){
       if( e.target.id == 'auto-results' )
          { return true; }
       else
          { jQuery('#auto-results').hide(); }
 });