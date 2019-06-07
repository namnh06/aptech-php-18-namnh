$('#second').hide();
$('#third').hide();
$(document).ready(function () {
  $('#first').click(function () {
    $(this).hide();
    $('#second').show();
  })
  $('#second').click(function () {
    $(this).hide();
    $('#third').show();
  })
  $('#third').click(function () {
    $(this).hide();
    $('#first').show();
  })

  $('button').click(function () {
    $.get('https://namcoi.com/projects/users-crud-laravel/public/api/users', function (data, status) {
      console.log(data, status);
    })
  })
})