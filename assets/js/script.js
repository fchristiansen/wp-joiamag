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

  var myLatLng1 = {lat: -33.4379797, lng: -70.6511553};
  var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: myLatLng1,//Setting Initial Position
    zoom: 16,
    scrollwheel: false,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  });

  var infoWindow = new google.maps.InfoWindow();


  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');


  //cargar los puntos en el mapa
  $( "#puntoslist li" ).each(function() {
        var cx = parseFloat($(this).attr("data-x"));
        var cy = parseFloat($(this).attr("data-y"));
        var local = $(this).attr("data-name").toString();
        var direccion = $(this).text();
        var urlMaps = $(this).attr("data-url-maps");
        var urlTienda = $(this).attr("data-url-tienda");

        var LatLng = {lat: cx, lng: cy};
        var imageIcon = "http://todo.seo2.cl/clientes/joia/wp/wp-content/uploads/2017/11/marker-1.png";
        
        var contentString = '<div class="contentInfoWindow">'+
        '<h6 id="firstHeading" class="firstHeading">'+local+'</h6>'+
        '<div id="bodyContent">'+
        '<p>'+ direccion + '</p>' +
        '<p><a href="'+urlTienda+'" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> Ir a Tienda</a> '+
        '<a href="' + urlMaps + '" target="_blank"><i class="fa fa-map-o" aria-hidden="true"></i> Ver en Google Maps</a></p>' +
        '</div></div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });


          var marker = new google.maps.Marker({
          position: LatLng,
          map: map,
          animation: google.maps.Animation.DROP,
          title: local,
          icon: imageIcon
        });

        marker.setMap(map);
        //marker.addListener('click', toggleBounce);
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
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

function toggleBounce() {
  if (this.getAnimation() != null) {
    this.setAnimation(null);
  } 
  else {
    this.setAnimation(google.maps.Animation.BOUNCE);
  }







}

//Setting Location with jQuery
$(document).ready(function ()
{

    $('.text-direccion').on('click', function (){
        var x = parseFloat($(this).attr('data-x'));
        var y = parseFloat($(this).attr('data-y'));
        newLocation(x,y);

        $('html, body').animate({
          scrollTop: $("#map-canvas").offset().top
        }, 1000);

        return false;
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









