$(function(){
  $('.buscar-rutas').click(BuscarRutasClick);
});

function BuscarRutasClick () {
  var url = 'rutas';
  var punto = $('.punto').val();

  $.ajax({
    type: 'get',
    url: url,
    data: {punto: punto},

    success: function(data) {
    //  console.log(data.html);
      $('.panel-body').html(data.html);
    }
  });
}
