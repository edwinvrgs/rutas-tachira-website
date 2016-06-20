$(function(){
  $('.buscar-rutas').click(BuscarRutasClick);
});

function BuscarRutasClick () {
  var url = 'rutas';
  var ruta = $('.ruta').val();

  $.ajax({
    type: 'post',
    url: url,
    data: {ruta: ruta},

    success: function(data) {
      console.log(data);
      $('.panel-body').html(data.html);
    }
  });
}
