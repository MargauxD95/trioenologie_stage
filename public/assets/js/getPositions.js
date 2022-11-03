
 var arrayPos = [];
 var url = window.location.href;
console.log(url);

$('.pos').change(function(){
    console.log('hello');
    arrayPos =[];
    $('.pos').each(function(i){
        arrayPos.push($(this).val());
    });
    console.log(arrayPos);
    var posting = $.post( url, { 'positions': arrayPos } );
// console.log(posting);
// Put the results in a div
posting.done(function( arrayPos ) {
    // console.log(arrayPos);
//   var notif = $( data ).find( "#notification" );
//   $( "#result" ).empty().append( notif );
});
})


// // Send the data using post
// var posting = $.post( url, { 'positions': arrayPos } );
// // console.log(posting);
// // Put the results in a div
// posting.done(function( arrayPos ) {
//     console.log(arrayPos);
// //   var notif = $( data ).find( "#notification" );
// //   $( "#result" ).empty().append( notif );
// });
// console.log(arrayPos);

// function ajax(){
//    $.post(url),
//    {},
//    function(){
//     if (condition) {
        
//     } else {
        
//     }
//    }
// }

// $.ajax({
//     type:'POST',
//     url: url,
//     data: {positions : arrayPos},
//     cache: false,
//         success: function(responseText){
//             $('#notification').html(responseText);
//         }
//         });
//         // return false;

