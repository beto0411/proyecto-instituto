(function() {
  "use strict";

var regalo = document.getElementById('regalo');

  document.addEventListener('DOMContentLoaded', function(){


//Mapa leafletjs
    var map = L.map('mapa').setView([25.675582, -100.302755], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([25.675582, -100.302755]).addTo(map)
    .bindPopup('Rafael Platon Sanchez #133.<br> Centro de Monterrey 64000')
    .openPopup();
    //#mapa leafletjs



  }); //DOM content loaded
})();
