if($(document).width() > 1024){
    $(document).on('scroll', function(){
        let height = $(window).height();
        let absolute = $(window).scrollTop();
        for (var i = 1; i < 4; i++) {
            let g = $('.text-to-back:eq('+i+')');
            if(absolute < g.offset().top && (absolute + height) > g.offset().top){
                g.addClass('visible');
                if(absolute + height/5 < (g.offset().top) && (absolute + height/5*2.8) > g.offset().top){
                    $('.visible').css('opacity', '1');
                } else if(absolute + height/5*2.8 < (g.offset().top) && (absolute + height/5*3) > g.offset().top){
                    $('.visible').css('opacity', '0.8');
                } else if(absolute + height/5*3 < (g.offset().top) && (absolute + height/5*4) > g.offset().top){
                    $('.visible').css('opacity', '0.05');
                }else{
                    $('.visible').css('opacity', '0');
                }
            }else{
                g.css('opacity', '0');
                g.removeClass('visible');
            }
            if(absolute > $('#gift-text-5').offset().top - height/2 ){
                let st = (-absolute + $('#gift-text-5').offset().top - height/2) + 60;
                $('#bg-s').css('top', st);
            }else{
                $('#bg-s').css('top', '60');
            }
        }
    });
}


$('input[name="sum"]').click(function(){
    let p = $('input[name="sum"]:checked').attr('value');
    $('a.submit').attr('data-price', p);
    $('#howmuch option').prop('selected', false);
    let s = 0;
    if(p == '500'){ s = 0; }
    if(p == '1000'){ s = 1; }
    if(p == '1500'){ s = 2; }
    if(p == '2000'){ s = 3; }
    $('#howmuch option:eq('+s+')').prop('selected', true);
});
// function closePopup(){
//     event.preventDefault();
//     $('.bg-popup').css('left', '-100vw');
//     $('.content-popup').css('left', '100vw');
//     $('.success-ok').css('left', '100vw');
// }
$('a.submit').click(function(){
    event.preventDefault();
    $('.bg-popup').css('left', '0');
    $('.content-popup').css('left', '0');
});
$('#gift-text-1 .popup').click(function(){
    event.preventDefault();
    $('.bg-popup').css('left', '0');
    $('.content-popup').css('left', '0');
});
function minus(){
    let n = $('.n-value').html();
    if(n > 1){
        let mn = n - 1;
        $('.n-value').html(mn);
        $('#quantity').val(mn);
    }
}
function plus(){
    let n = $('.n-value').html();
    let mn = n - -1;
    $('.n-value').html(mn);
    $('#quantity').val(mn);
}


// $("form.ajax").submit(function(e) {
//     var form = $(this);
//     var url = form.data('action');
//     if(url == undefined)
//       url = form.attr('action');
//     if(url)
//     {

//       $.ajax({
//           type: "POST",
//           url: url,
//           data: form.serialize(),
//           complete: function() {
//               // $("div#divLoading").removeClass('show');
//           },
//           success: function(res)
//           {
//             $('.success-ok').css('left', '0');
//             $('.content-popup').css('left', '100vw');
//             $('.ajax')['0'].reset();
//           },
//           error: function () {
//             e.preventDefault();
//             $('.success-ok').css('left', '0');
//             $('.content-popup').css('left', '100vw');
//             $('.success-ok h4').html('Ой! Щось пішло не так :(');
//             $('.success-ok p').html('________________');
//           }
//       });
//       return false;
//   }
// });