

$(document).ready(function() {
	$(".rounded").click(function(){
		if ($(this) .next() .is(":hidden")) {
			$(this) . next() .slideDown("fast");
		}
		else {
			$(this) .next() .slideUp();
		}
	});
	
});




// sökfuntion

$('document').ready(function(){

var result;

	$('#ajax-search').keyup( function() {

		ajaxSearch();
	     
	  });  
    
});


/* Ajax */

function ajaxSearch(filter){ /* Filter == staff-picks, most-read, most-comments */

$('#ajax-search-result').html('<i class="fa fa-cog fa-2x fa-spin"></i>');

var ajaxurl = '/wordpress/wp-projekt/wp-admin/admin-ajax.php';


jQuery.ajax({ 
	type: 'POST', 
	url: ajaxurl, 
	data: { 
		action: 'get_latest',
		searchword: $('#ajax-search').val(),
		 // the PHP function to run 
	}, success: function(data, textStatus, XMLHttpRequest){ 

	/* Gör saker */
		
		$('#ajax-search-result').html(data);



	}, error: function(XMLHttpRequest, textStatus, errorThrown) { 
		if(typeof console === "undefined"){ 
			console = { log: function() { }, 
		debug: function() { 
		}, 
	}; 
	} if (XMLHttpRequest.status == 404) { 
		console.log('Element not found.'); 
	} else { 
		console.log('Error: ' + errorThrown); 
	} 
	} 
});

}