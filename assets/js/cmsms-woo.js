$(document).ready(function(){
  /* in order to update info on your checkout page you need to trigger update_checkout function
     so add this in your javascript file for your theme or plugin
  */
  $('.state_select').on('change',function(){
  //console.log("cambio el select");

  $('body').trigger('update_checkout');

  });
  
});