$(function(){
  $('.buscar-rutas').click(BuscarRutasClick);
});

function BuscarRutasClick () {
  var url = 'rutas';
  var punto = $('.punto').val();

  $.ajax({
    type: 'post',
    url: url,
    data: {punto: punto},

    success: function(data) {
      //console.log(data.html);
      $('.panel-body').html(data.html);
    }
  });
}
