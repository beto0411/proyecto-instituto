(function() {
  "use strict";

var regalo = document.getElementById('regalo');

  document.addEventListener('DOMContentLoaded', function(){

/*
//Mapa leafletjs
    var map = L.map('mapa').setView([25.675582, -100.302755], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([25.675582, -100.302755]).addTo(map)
    .bindPopup('Rafael Platon Sanchez #133.<br> Centro de Monterrey 64000')
    .openPopup();
    //#mapa leafletjs


*/
    //campos datos usuario
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');

    //campos pases
    var pase_dia = document.getElementById('pase_dia');
    var pase_dosdias = document.getElementById('pase_dosdias');
    var pase_completo = document.getElementById('pase_completo');

    //botones y divs
    var calcular = document.getElementById('calcular');
    var errordiv = document.getElementById('error');
    var botonRegistro = document.getElementById('btnRegistro');
    var lista_productos = document.getElementById('lista-productos');
    var suma = document.getElementById('suma-total');

    //Extras

    var etiquetas = document.getElementById('etiquetas');
    var camisas = document.getElementById('camisa_evento');

    botonRegistro.disabled = true;


  // calcular
if(document.getElementById('calcular')){



  calcular.addEventListener('click', calcularMontos);
  pase_dia.addEventListener('blur', mostrarDias);
  pase_dosdias.addEventListener('blur', mostrarDias);
  pase_completo.addEventListener('blur', mostrarDias);

  nombre.addEventListener('blur', validarCampos);
  apellido.addEventListener('blur', validarCampos);
  email.addEventListener('blur', validarCampos);
  email.addEventListener('blur', validarMail);



  function validarCampos(){
    if(this.value == ''){
      errordiv.style.display= 'block';
      errordiv.innerHTML = "Este campo es obligatorio";
      this.style.border= '1px solid red';
      errordiv.style.border= '1px solid red';
    }
    else {
      errordiv.style.display= 'none';
      this.style.border= '1px solid #cccccc';
    }
  }

  function validarMail(){
    if(this.value.indexOf("@") > -1){
      errordiv.style.border= 'none';
      this.style.border= '1px solid #cccccc';
    }
    else {
      errordiv.style.display= 'block';
      errordiv.innerHTML = "E-mail invalido";
      this.style.border= '1px solid red';
      errordiv.style.border= '1px solid red';
    }
  }


  function calcularMontos(event){
    event.preventDefault
    if (regalo.value === ''){
      alert("Debes elegir un regalo");
      regalo.focus();
    }else {
      var boletosDia = parseInt(pase_dia.value, 10) || 0,
          boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
          boletoCompleto = parseInt( pase_completo.value, 10) || 0,
          cantCamisas = parseInt(camisas.value, 10) || 0,
          cantEtiquetas = parseInt(etiquetas.value, 10) || 0;


      var totalPagar = (boletosDia * 300)+(boletos2Dias * 450)+(boletoCompleto * 500)+ ((cantCamisas * 150) * .9) + (cantEtiquetas * 100);
      var listadoProductos = [];

      if(boletosDia >= 1){
      listadoProductos.push(boletosDia+' Pases por dia');
      }
      if(boletos2Dias >= 1){
      listadoProductos.push(boletos2Dias+' Pases por 2 dias');
      }
      if(boletoCompleto >= 1){
      listadoProductos.push(boletoCompleto+' Pases completos');
      }
      if(cantCamisas >= 1){
      listadoProductos.push(cantCamisas+' Material');
      }
      if(cantEtiquetas >= 1){
      listadoProductos.push(cantEtiquetas+' Libro');
      }

//elimina el bg del resumen mientras no tengas resumen.

      lista_productos.style.display="block";

//Esta parte del codigo crea el resumen de la compra.

      lista_productos.innerHTML = '';
      for(var i = 0; i< listadoProductos.length; i++){
      lista_productos.innerHTML += listadoProductos[i] + '<br/>';
      }

//Imprime el total a totalPagar

      suma.innerHTML = '$ '+totalPagar.toFixed(2) + ' Pesos';

      botonRegistro.disabled = false;
      document.getElementById('total_pedido').value = totalPagar;

    }
  }
// esta parte oculta el intinerario hasta que elijas tipo de boleto lo muestra.
        function mostrarDias(){
          var boletosDia = parseInt(pase_dia.value, 10) || 0,
              boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
              boletoCompleto = parseInt( pase_completo.value, 10) || 0;

          var diasElegidos = [];

          if(boletosDia > 0){
            diasElegidos.push('viernes');
          }
          if(boletos2Dias > 0){
            diasElegidos.push('viernes','sabado');
          }
          if(boletoCompleto > 0){
            diasElegidos.push('viernes','sabado','domingo');
          }
          for(var i = 0; i < diasElegidos.length; i++){
            document.getElementById(diasElegidos[i]).style.display = 'block';
          }
        }
        }


  }); //DOM content loaded
})();

$(function(){
  //.lettering
    $('.nombre-sitio').lettering();
  //#lettering

  //.Agregar clase a Menu

//  $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
//  $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
//  $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');


  //#Agregar clase a Menu

  //Menu flotante

var windowHeight = $ (window).height();
var barraAltura = $('.barra').innerHeight();


$(window).scroll(function(){
  var scroll = $(window).scrollTop();
    if(scroll > windowHeight){
      $('.barra').addClass('fixed');
      $('body').css({'margin-top': barraAltura+'px'});
    }
  else {
    $('.barra').removeClass('fixed');
    $('body').css({'margin-top': '0px'});
  }
});

//Menu responsive.

$('.menu-movil').on('click', function(){
  $('.navegacion-principal').slideToggle();
});



  //.Programa Conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');
    $('.menu-programa a').on('click', function(){
    $('.menu-programa a').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').hide();

    var enlace = $(this).attr('href');
    $(enlace).fadeIn(1000);

    return false;
  });//#Programa conferencias

//.Animaciones para los numeros
/*  $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6}, 1200);
  $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15}, 1200);
  $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3}, 1000);
  $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9}, 1500);
*/

var resumenLista = jQuery('.resumen-evento');
if(resumenLista.length > 0 ){
  $('.resumen-evento').waypoint(function(){
      $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6}, 1200);
      $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15}, 1200);
      $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3}, 1000);
      $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9}, 1500);
  },{
    offset: '60%'
  });
}

//#animaciones para los numeros

//.Cuenta regresiva
  $('.cuenta-regresiva').countdown('2018/11/14 20:10:00', function(event){
    $('#dias').html(event.strftime('%D'));
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
  });
//#cuenta regresiva

//.Cuenta colorbox

$('.invitado-info').colorbox({inline:true, width:"50%"});

//#Cuenta colorbox

});
