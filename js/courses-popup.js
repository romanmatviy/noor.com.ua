
function closePopup(){
    event.preventDefault();
    $('.bg-popup').css('left', '-100vw');
    $('.content-popup').css('left', '100vw');
    $('.success-ok').css('left', '100vw');
}
$('.course-popup').click(function(){
    event.preventDefault();
    let direction = $(this).attr('data');
    $('#direction').val(direction);
    $('.content-popup h4 span').html(direction);
    $('.bg-popup').css('left', '0');
    $('.content-popup').css('left', '0');
});



$("form.ajax").submit(function(e) {
    var form = $(this);
    var url = form.data('action');
    if(url == undefined)
      url = form.attr('action');
    if(url)
    {

      $.ajax({
          type: "POST",
          url: url,
          data: form.serialize(),
          complete: function() {
              // $("div#divLoading").removeClass('show');
          },
          success: function(res)
          {
            $('.success-ok').css('left', '0');
            $('.content-popup').css('left', '100vw');
            $('.ajax')['0'].reset();
          },
          error: function () {
            e.preventDefault();
            $('.success-ok').css('left', '0');
            $('.content-popup').css('left', '100vw');
            $('.success-ok h4').html('Ой! Щось пішло не так :(');
            $('.success-ok p').html('________________');
          }
      });
      return false;
  }
});