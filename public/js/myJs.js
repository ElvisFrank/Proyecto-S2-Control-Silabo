
/*Tiempo de alerta del flash mensage*/
$('div.alert').not('.alert-important').delay(8500).fadeOut(1150);
/*----------------fin de Tiempo de alerta del flash mensage*/

/*Dar funcionalidad al Nav en mobiles.*/
$(".button-collapse").sideNav({
      menuWidth: 250, // Default is 300
      edge: 'left', // Choose the horizontal origin
      //closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      //onOpen: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is opened
      //onClose: function(el) { /* Do Stuff */ }, // A function to be called when sideNav is closed
    }
  );
/*----------------fin de Dar funcionalidad al Nav en mobiles.*/

/*inicializar los select*/
  $(document).ready(function() {
    $('select').material_select();
  });

/*inicializar modal*/  
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

/*Inicializacion de Parallax*/
    $(document).ready(function(){
      $('.parallax').parallax();
    });

/*Inicializacion */
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });

  /*Inicializacion del Corrusel*/
    $(document).ready(function(){
      $('.carousel').carousel();      

      //Para auto play
      setInterval(function(){
        $('.carousel').carousel('next');
      }, 3000);

      $('.carousel.carousel-slider').carousel({
        fullWidth: false,
        duration:300,
        noWrap:true
      });
    });