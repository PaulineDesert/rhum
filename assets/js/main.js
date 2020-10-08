$(document).ready(function () {

  //Smooth scroll index
  $('.jumbotron a').click(function (e) {

    e.preventDefault();

    $('html, body').animate({

      scrollTop: $('#' + $(this).data('scroll')).offset().top
  }, 2000);
  });

  //PopOver input form
  $('[data-toggle="popover"]').popover();


  //Modal Delete Schedule
  $('.deletebtn').on('click', function () {
    $('#deletemodal').modal('show');
  });







  //DOM READY END
});
