 jQuery( function( $ ){
 	$( '#filter' ).submit(function(){
    var filter = $(this);
 		$.ajax({
 			url : true_obj.ajaxurl, 
 			data : filter.serialize(),
 			type : 'POST', 
			success : function( data ){
			$( '.wp-block-post-template' ).html(data);
			}
 		});
		return false;
	});
 });

 jQuery(document).ready(function($){
  $(".search-icon").click(function(){
    $(".search").addClass("active");
    $(".search-icon").attr("src","http://localhost/wp_test/wp-content/uploads/2022/06/Vector-3.png");
  });
  
});

jQuery(function($){
	$(document).mouseup( function(e){ 
		var div = $( ".search" ); 
		if ( !div.is(e.target)
		    && div.has(e.target).length === 0 ) { 
          $(".search").removeClass( "active" )
          $(".search-icon").attr("src","http://localhost/wp_test/wp-content/uploads/2022/06/Vector-2.png");
		}
	});
});