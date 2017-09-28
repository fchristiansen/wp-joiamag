$(document).ready(function(){
  /* in order to update info on your checkout page you need to trigger update_checkout function
     so add this in your javascript file for your theme or plugin
  */
  $('.state_select').on('change',function(){
  console.log("cambio el select");

  	$('body').trigger('update_checkout');

  });

  $( ".button_wishlist a" ).click(function() {
  	//console.log($(this).attr('href'));
  	$(".mssg-wishlist").html('<span class="loading"></span>');
  	$(".mssg-wishlist").fadeIn();
  	
  	var url = $(this).attr('href');
  	$.post( url, { prod: $(this).data("product-id"), f: 'add' }, function( data ) {
  	  $(".mssg-wishlist").hide();
	  $( ".mssg-wishlist" ).html( data );
	  $(".mssg-wishlist").fadeIn();
	  $('.mssg-wishlist').delay(1500).fadeOut('slow');
    update_heart();
	});

  	return false;
  });

  $( ".wish-item" ).click(function() {
    var url = $(this).attr('href');
    var pid = $(this).data("product_id");
    $(".container-processing").fadeIn();
    $.post( url, { prod: pid }, function( data ) {
      var item = '.item-'+pid;
      //console.log(item);
      $(item).toggle();
      $('.container-processing').fadeOut('slow');
      update_heart();
    });
    return false;
  });
  
});

function update_heart(){
  var url = $(".navbar-brand").attr('href') + "/add-to-wishlist";
  //console.log(url);

  $.post( url, {op: 'count'}, function( data ) {
    $(".love-count").html( data );
  });
}