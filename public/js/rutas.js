$(function(){
  $('.buscar-rutas').click(BuscarRutasClick);
});

function BuscarRutasClick () {
  var url = '/rutas'
  var ruta = $('.ruta').val();

  $.ajax({
    type: 'post',
    url: url,
    value: ruta,
    sucess: function(data, textStatus, jqXHR) {

    },
    error: function(jqXHR, textStatus, errorThrown) {

    }
  });
}
