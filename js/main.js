//maps
function initialize() {
    var marcadores = [
      ['Milkshake Laureles', 6.242914, -75.599542],
      ['Milkshake La 70', 6.248790, -75.588231],
      ['MilkShake Belen', 6.230864, -75.602424],
      ['MilkShake Poblado', 6.212245, -75.570188],
      ['MilkShake Bello', 6.341677, -75.541110],
      ['MilkShake Calazans', 6.265268, -75.597414],
      ['MilkShake Caney', 3.382816, -76.520407],
      ['MilkShake La 84', 11.002818, -74.818520],
      ['MilkShake Manizales', 5.057946, -75.486953],
      ['MilkShake Ibague', 4.436490, -75.201618],
      ['MilkShake Parque del perro', 3.437130, -76.545331],
      ['MilkShake la flora', 3.480958, -76.522388],
      ['MilkShake limonar', 3.399970, -76.544268],
      ['MilkShake Unicentro', 3.374377, -76.541263],
      ['MilkShake S', 3.466641, -76.501127],
      ['MilkShake Pereira', 4.808154, -75.686947],
      ['MilkShake Armenia', 4.560519, -75.655613],
      ['MilkShake Batallon', 3.526352, -76.286492],
      ['MilkShake Altamira', 3.546837, -76.296277],
      ['MilkShake Neiva', 2.904386, -75.267582],
      ['MilkShake Popayan', 2.457133, -76.597515],
      ['MilkShake Llanogrande', 3.527798, -76.316697],
      ['MilkShake Floridablanca Santander', 7.330733, -73.132643],
      ['MilkShake Bogota', 4.642805, -74.135104],
      

    ];
    var map = new google.maps.Map(document.getElementById('mapa'), {
      zoom: 5,
      center: new google.maps.LatLng(6.252934, -75.575105),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var infowindow = new google.maps.InfoWindow();
    var marker, i;
    for (i = 0; i < marcadores.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
        map: map
      });
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(marcadores[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  }
  google.maps.event.addDomListener(window, 'load', initialize);
  //fin maps
  //scroll reveal
  window.sr = ScrollReveal();

  sr.reveal('.navbar', {
    duration: 3000,
    origin: 'bottom'
  });

  sr.reveal('.reveal', {
    duration: 2000,
    origin: 'left',
    distance: '300px'
  });
  sr.reveal('.reveall', {
    duration: 3000,
    origin: 'bottom',
    distance: '300px'
  });

  

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });