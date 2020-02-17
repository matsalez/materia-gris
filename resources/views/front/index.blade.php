@extends('front.template')

@section('pageTitle', 'Materia Gris | CoWork ')

@section('mainContent')

<div class="home no-gutters">
  <div class="row no-gutters">
    <div id="div-img" class="col-lg-12">
        <img class="img-home" src="/images/home-3.png" alt="home-materia">

        <div class="bg-text">
            <h3>UN NUEVO CONCEPTO DE ESPACIO DE TRABAJO LLEGA AL OESTE</h3>
            <br>
            <p>COWORKING · OFICINAS FLEXIBLES · EMPRESAS · FACILITY SERVICE</p>
            <br>
              <a class="bg-button" type="button" name="button"> VENI A CONOCERNOS</a>
        </div>

    </div>
  </div>
</div>
<br>
<br>

<!-- MODALIDADES -->

<div id="espacios" class="servicios row no-gutters">
  <div class="titulo-seccion col-12">
    <h2> NUESTROS ESPACIOS  </h2>
  </div>
  <div class="descripcion-seccion col-12">
    <p> Nuestro espacio de Coworking ofrece una variada gama de opciones en base a las necesidades y gustos de cada profesional. Si sos emprendedor independiente, freelancer, una start up o un equipo con trayectoria; Working & Co, es el espacio de trabajo ideal.  </p>
  </div>



</div>
<div class=" container-planes row ">
    <div class="container-plan col-lg-3 col-md-6 col-xs-12">
      <img class="img-plan" src="/images/hotdesk.jpg" alt="own office" >
      <h3>HOT DESK</h3>
      <p>Trabaja desde el Hot Desk de cualquiera de los espacios de la MQCo. hasta 10 jornadas por mes: incluye uso de salas y full access a todos los eventos de la Comunidad.</p>
      <br>
      <a class="btn-consultar" href="">CONSULTAR</a>
    </div>

    <div class="container-plan col-lg-3 col-md-6 col-xs-12">
      <img class="img-plan"  src="/images/surfdesk.jpg" alt="own office">
      <h3>SURF DESK</h3>
      <p>Tené tu puesto fijo en un ambiente colaborativo y encontrá la sinergia que tu emprendimiento necesita. </p>
      <br>
      <a class="btn-consultar" href="">CONSULTAR</a>
    </div>

    <div class="container-plan col-lg-3 col-md-6 col-xs-12">
      <img class="img-plan" src="/images/fixdesk.jpg" alt="own office">
      <h3>FIX DESK</h3>
      <p>Este puesto dedicado está pensado para hacer crecer tu negocio. Llega con tu equipo, conéctate y empezá a producir! </p>
      <br>
      <a class="btn-consultar" href="">CONSULTAR</a>
    </div>

    <div class="container-plan col-lg-3 col-md-6 col-xs-12">
      <img class="img-plan" src="/images/ownoffice.jpg" alt="own office">
      <h3>OWN OFFICE</h3>
      <p>Oficinas privadas a la medida de tu equipo. La combinación perfecta entre privacidad y sinergia. </p>
      <br>
      <a class="btn-consultar" href="">CONSULTAR</a>
    </div>


</div>

<!-- SERVICIOS-->

<div id="servicios" class="servicios row no-gutters">
  <div class="titulo-seccion col-12">
    <h2> SERVICIOS </h2>
  </div>
</div>

<div class="container-services row no-gutters">
<div class="container-service col-lg-3 col-md-6 col-xs-12">
  <img src="/images/papelera.png" alt="own office" style="width:15%">
    <h3>INSUMOS DE OFICINA</h3>

</div>

<div class="container-service col-lg-3 col-md-6 col-xs-12">
  <img src="/images/wifi.png" alt="own office" style="width:25%">
    <h3>WIFI</h3>

    <br>
</div>

<div class="container-service col-lg-3 col-md-6 col-xs-12">
  <img src="/images/proyector.png" alt="own office" style="width:25%">
    <h3>PROYECTOR</h3>

    <br>
</div>

<div class="container-service col-lg-3 col-md-6 col-xs-12">
  <img src="/images/smart.png" alt="own office" style="width:25%">
    <h3>SMART TV</h3>
    <br>
</div>

<div class="container-service col-lg-3 col-md-6 col-xs-12">
  <img src="/images/cafe.png" alt="own office" style="width:25%">
    <h3>CAFE</h3>
    <br>
</div>

<div class="container-service col-lg-3 col-md-6 col-xs-12">
  <img src="/images/after.png" alt="own office" style="width:25%">
    <h3>AFTER OFFICE</h3>
    <br>
</div>
<div class="container-service col-lg-3 col-md-6 col-xs-12">
  <img src="/images/espacio.png" alt="own office" style="width:25%">
    <h3>ESPACIOS DE TRABAJO</h3>

</div>
<div class="container-service col-lg-3 col-md-6 col-xs-12">
  <img src="/images/eventos.png" alt="own office" style="width:25%">
    <h3>EVENTOS</h3>

    <br>
</div>
<div class="container-service col-lg-3 col-md-6 col-xs-12">
  <img src="/images/salas.png" alt="own office" style="width:25%">
    <h3>SALA DE REUNIONES</h3>

    <br>
</div>
</div>
<br>

<!-- BTN WHATSAPP -->
<div class="btn-whatsapp">
  <a id="btn-wh" href="https://api.whatsapp.com/send?phone=5491130494150&text=Me%20contacto%20para%20realizar%20un%20pedido" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>

<!-- FORM -->

<div id="contacto" class="base-form">
  <!-- start base texts -->
  <div class="base-textos col-lg-6 col-md-12 col-xs-12 no-gutters">
    <div class="row no-gutters">
      <div class="col-lg-12 col-md-12">
        <div class="titulo-contacto">
            <p>Enviános tu consulta</p>
        </div>
      </div>
    </div>
    <br>
    <div class="row no-gutters">
      <div class="col-lg-12 col-md-12">
        <div class="subtitulo-contacto">
            <p>Nos pondremos en contacto a la brevedad</p>
        </div>
      </div>
    </div>
    <br>
    <div class="row no-gutters">
      <div class="col-lg-12 col-md-12">
        <div class="texto-contacto">
            <p>¿Tenés preguntas acerca de nuestros planes, precios o disponibilidad? Simplemente decinos cual es tu inquietud y un asesor capacitado te ofrecerá la mejor solución para tu negocio... </p>
        </div>
      </div>
    </div>

    <div class="row no-gutters">
      <div class="container-iconos col-lg-12 col-md-12 col-xs-12">
        <div class="iconos-contacto">
            <i class="borde-iconos fab fa-instagram"></i> <p class="texto-icono"> materiagris</p>
        </div>

        <div class="iconos-contacto">
          <i class="borde-iconos fab fa-whatsapp"> </i> <p class="texto-icono"> +54 9 1130068331</p>
        </div>

        <div class="iconos-contacto">
          <i class="borde-iconos far fa-envelope"> </i> <p class="texto-icono"> mgcowork@gmail.com.ar</p>
        </div>

      </div>
    </div>



  </div>
  <!-- end base texts -->

  <!-- start base inputs -->
  <div id="formulario" class="base-inputs col-lg-6 col-md-12 col-xs-12 no-gutters">
    <div class="row no-gutters">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <form action="{{ url('/') }}"  method="POST">

           {{ csrf_field() }}
          <input id="input-sm" type="text" name="name" value="NOMBRE">
          <br>
          <br>
          <input id="input-sm" type="text" name="tel" value="TELEFONO">
          <br>
          <br>
          <input id="input-sm" type="email" name="email" value="EMAIL">
          <br>
          <br>
          <input id="input-md" type="text" name="msg" value="MENSAJE">
          <br>
          <br>
          <button id="button-form" type="submit" name="button">ENVIAR</button>
          <br>
          <br>
        </form>
      </div>
    </div>
  </div>
  <!-- end base inputs -->
</div>

<!-- GOOGLE MAPS -->

<div id="map"></div>
<script>
  function initMap() {

    // Create a new StyledMapType object, passing it an array of styles,
    // and the name to be displayed on the map type control.
    var styledMapType = new google.maps.StyledMapType(
      [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.business",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
],
        {name: 'Styled Map'});

    // Create a map object, and include the MapTypeId to add
    // to the map type control.

    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.6145839, lng: -58.8529584},
      zoom: 15,
      mapTypeControlOptions: {
        mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                'styled_map']
      },

    });

    var image = '/images/marker-brakeup.png';

       var storeMarker = new google.maps.Marker({
         position: {lat: -34.6145839, lng: -58.8529584},
         map: map,

       });


    //Associate the styled map with the MapTypeId and set it to display.
    map.mapTypes.set('styled_map', styledMapType);
    map.setMapTypeId('styled_map');
  }

</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgbBoiCfWxdnYNyCVc-hquYhTcc7GVYAg&callback=initMap">
</script>

<script src="/js/navbar.js"></script>
<script src="/js/toggle.js"></script>
<script src="/js/scroll-web.js"></script>
@endsection
