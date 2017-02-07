// var last_position = {},
// $output       = $('#output'),
// mousemove_ok  = true,
// mouse_timer   = setInterval(function () {
//     mousemove_ok = true;
// }, 500),
// count         = 1;
// $(".ch-item").on('mousemove', function (event) {
//     if (mousemove_ok) {
//         mousemove_ok = false;
//         console.log("reached inside");
//         if (typeof(last_position.x) != 'undefined') {
//             var deltaX = last_position.x - event.clientX,
//             deltaY = last_position.y - event.clientY;
//             if (Math.abs(deltaX) > Math.abs(deltaY) && deltaX > 0) {
//                 //left
//                 $(this).attr("data-latest",'left');
//             } else if (Math.abs(deltaX) > Math.abs(deltaY) && deltaX < 0) {
//                 //right
//                 $(this).attr("data-latest",'right');
//             } else if (Math.abs(deltaY) > Math.abs(deltaX) && deltaY > 0) {
//                 //up
//                 $(this).attr("data-latest",'up');
//             } else if (Math.abs(deltaY) > Math.abs(deltaX) && deltaY < 0) {
//                 //down
//                 $(this).attr("data-latest",'down');
//                 $output.append('<li class="down">Down (' + (count++) + ')</li>');
//             }
//             if ($output.children().length> 10) {
//                 $output.children().eq(0).remove();
//             }
//         }
//         last_position = {
//             x : event.clientX,
//             y : event.clientY
//         };
//     }
// });
// $(".ch-overlay").hide();
// $(".ch-item").mouseenter(function(){
//     console.log("mouse entered");
//     if($(this).attr("data-latest")=='up')
//         $( this ).find(".ch-overlay").slideUp();
//     if($(this).attr("data-latest")=='down')
//         $( this ).find(".ch-overlay").slideDown();
// });

// $(".ch-item").mouseleave(function(){
//     console.log("mouse entered");
//     if($(this).attr("data-latest")=='up')
//         $( this ).find(".ch-overlay").slideUp();
//     if($(this).attr("data-latest")=='down')
//         $( this ).find(".ch-overlay").slideDown();
// });

