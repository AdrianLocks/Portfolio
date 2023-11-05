$(document).ready(function()
{

   var botao = $('.forma');
   var dropDown = $('.sub-menu');
   botao.on('click', function(event)
   {
       dropDown.stop(true,true).slideToggle();
       event.stopPropagation();
   });


});

