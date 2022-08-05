
$(document).on('ready click', function(){

        $('.portfolio-container figure').click(function (event) {
            event = event || window.event;
            var img = $('.portfolio-container .d-block figure');
            var links = [];
            index = 0;
            for (var i = 0; i < img.length; i++) {
                links.push($(img[i]).attr('data-img'));
                    if(img[i] == this){
                       index = i;
                    }
                }
                var options = {index: index, event: event};
                blueimp.Gallery(links, options);
        });

        $('.owl-carousel img').click(function (event) {
               event = event || window.event;
        var img = $('.owl-carousel img');
        var img2 = $('img').attr('data-img');
        var links = [];
        index = 0;
        for (var i = 0; i < img.length; i++) {
                links.push($(img[i]).attr('data-img'));
                if(img[i].src == this.src)
                       index = i;
                }
                var options = {index: index, event: event};
                blueimp.Gallery(links, options);
        });
});





// $(document).on('ready click', function(){
//         $('.d-block').click(function (event) {
//                event = event || window.event;
//         var img = $('.d-block img');
//         var img2 = $('img').attr('data-img');
//         var links = [];
//         index = 0;
//         for (var i = 0; i < img.length; i++) {
//                 links.push($(img[i]).attr('data-img'));
//                 if(img[i].src == this.src)
//                        index = i;
//                 }
//                 var options = {index: index, event: event};
//                 blueimp.Gallery(links, options);
//         });
// });