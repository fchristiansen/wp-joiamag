$(document).ready(function(){

    // cambio de capturas
    $( ".captura" ).click(function() {
        var captura = $(this).attr('src');
        $('#captura').attr('src', captura);
    });
	// Carousel store
	$(".store-carousel").owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        autoplay: true,
        center: true,
        lazyLoad:true,
        responsive:{
        0:{
            items:2
        },
        768:{
            items:4
        },
        1200:{
            items:4
        }
    }
});

  // Carousel con thumbs de producto

  $(".img_detalle_producto").owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        dots:false,
        responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

    $('#muestra1').click(function() {
        $('.owl-carousel').trigger('to.owl.carousel', 0);
      });
    $('#muestra2').click(function() {
        $('.owl-carousel').trigger('to.owl.carousel', 1);
      });

// Expanding Search Bar
var submitIcon = $('.searchbox-icon');
var inputBox = $('.searchbox-input');
var searchBox = $('.searchbox');
var isOpen = false;
submitIcon.click(function(){
    if(isOpen == false){
        searchBox.addClass('searchbox-open');
        inputBox.focus();
        isOpen = true;
    } else {
        searchBox.removeClass('searchbox-open');
        inputBox.focusout();
        isOpen = false;
    }
});
submitIcon.mouseup(function(){
        return false;
    });
searchBox.mouseup(function(){
        return false;
    });
$(document).mouseup(function(){
        if(isOpen == true){
            $('.searchbox-icon').css('display','block');
            submitIcon.click();
        }
    });
});



function buttonUp(){
    var inputVal = $('.searchbox-input').val();
    inputVal = $.trim(inputVal).length;
    if( inputVal !== 0){
        $('.searchbox-icon').css('display','none');
    } else {
        $('.searchbox-input').val('');
        $('.searchbox-icon').css('display','block');
    }
}


$(".box-video").click(function(){
  $('iframe',this)[0].src += "&amp;autoplay=1";
  $(this).addClass('open');
});

var map;
function initialize()
{
	// Create an array of styles.
  var styles = [
    {
      stylers: [
        { hue: "#F03C40" },
        { saturation: -20 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 100 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "off" }
      ]
    }
  ];

  var myLatLng1 = {lat: -33.4452642, lng: -70.6299445};
  var myLatLng2 = {lat: -12.1046709, lng: -77.0401796};
  var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: myLatLng1,//Setting Initial Position
    zoom: 16,
    scrollwheel: false,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  });

  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');


  var marker = new google.maps.Marker({
    position: myLatLng1,
    map: map,
    title: 'Alta Chile',
    icon: "2017/images/location-pointer.png?ver=2"
  });


  var marker2 = new google.maps.Marker({
    position: myLatLng2,
    map: map,
    title: 'Alta Perú',
    icon: "2017/images/location-pointer.png?ver=2"
  });

  	marker.setMap(map);
  	marker2.setMap(map);
	url = "https://www.google.com/maps/place/Modo+Publicidad+Ltda/@-33.4454544,-70.6297842,17z/data=!3m1!4b1!4m5!3m4!1s0x9662cbf1adfc9305:0x377b9704ba1e871e!8m2!3d-33.4454589!4d-70.6275955?hl=es-ES";
	url2 = "https://www.google.cl/maps/place/Calle+Los+Libertadores+680,+San+Isidro+15073,+Per%C3%BA/@-12.1046709,-77.0401796,17z/data=!3m1!4b1!4m5!3m4!1s0x9105c8413cc6e9d9:0xa1c7d2312e09edfb!8m2!3d-12.1046762!4d-77.0379909?hl=es";
	marker.addListener('click', function() {
		window.open(url, '_blank');
	});
	marker2.addListener('click', function() {
		window.open(url2, '_blank');
	});


}

google.maps.event.addDomListener(window, 'load', initialize);
function newLocation(newLat,newLng)
{
	 map.setCenter({
		lat : newLat,
		lng : newLng
	});
}

//Setting Location with jQuery
$(document).ready(function ()
{

    $("#1").on('click', function ()
    {
	  newLocation(-33.4452642,-70.6299445);
	  $('.btn-main').removeClass('activo');
	  $(this).addClass('activo');
	});

	$("#2").on('click', function ()
    {
	  newLocation(-12.1046709,-77.0401796);
	  $('.btn-main').removeClass('activo');
	  $(this).addClass('activo');
	});
});

  // carousel mixtapes

  $('.mix-carousel').owlCarousel({
          center: true,
          items:2,
          loop:false,
          margin:10,
          nav:false,
          responsive:{
              600:{
                  items:4
              }
          }
      });

  //CAMBIO DE COLOR BARRA DE NAVEGACION CLICK EN MENU CATEGORÍAS.

    $("a#menu-categorias, #modal-categorias button.close").on( "click", function(e) {
        e.preventDefault();
        var url = $('body').data('url');
        if($('nav.navbar.navbar-light').hasClass('cambia-color-menu')){
            $('a.navbar-brand img').attr('src',url+'/assets/img/logo-joia.svg');
            $('nav.navbar.navbar-light').removeClass('cambia-color-menu');
            $("a#menu-categorias").css('color','#000');

        }else{
          $('a.navbar-brand img').attr('src',url+'/assets/img/logo-joia-white.svg');
          $('nav.navbar.navbar-light').addClass('cambia-color-menu');
          $("a#menu-categorias").css('color','#464a4c');

        }
    });

    $("a#menu-categorias, #modal-categorias button.close").on( "click", function(e) {
        e.preventDefault();
        var url = $('body').data('url');
        if($('nav.navbar.navbar-inverse').hasClass('cambia-color-menu')){
            $('nav.navbar.navbar-inverse').removeClass('cambia-color-menu');

        }else{
            $('nav.navbar.navbar-inverse').addClass('cambia-color-menu');
        }
    });







