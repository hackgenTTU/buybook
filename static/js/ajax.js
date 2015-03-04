function ajax(uri) {
  $.ajax({
      url: uri,
      cache: false,
      dataType: 'html',
      type:'GET',
      data: { name: $('#name').val()},
      error: function(xhr) {
          alert('request error');
      },
      success: function(response) {
          $('#ajax').html(response);
          //$('#ajax').fadeIn();
      }
  });
};