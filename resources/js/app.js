import './bootstrap';

//   $(document).ready(function(){
//     function chatSent(user_id)
//     {
//         let comment=$(`#comment`).val();
//         alert(user_id+comment);
//         alert()
//     }

//     //chatSent();

// //  })

// $(document).ready(function(){
//  $(document).on('click','#sendchat',function(e){
//     e.preventDefault();
//     let userid=$('#user_id').val();
//     let message=$('#comment').val();
//     // alert(userid+message);
//     if (message=="")
//     {
//         alert('Please enter message');
//         return false;
//     }

//     $.ajax({
//         method:'post',
//         url:'/send_message',
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         data:{userid:userid,message:message},
//         success:function(res){

//         }
//     });


//  });

// });

// Echo.channel('chat')
// .listen('.message',(e)=>{
//     console.log(e);
//         $('chat_box').append('<p><strong>'+e.userid+':</strong>'+e.message+'</p>');
//         $('chat_box').val('');
//     });

//  $(document).ready(function(){
//      $('#chat-part').submit(function(event){
//         //$(document).on('click','#sendchat',function(e){
//         event.preventDefault();
//         var userid=$('#user_id').val();
//         var message=$('#message').val();
//         console.log(userid);
//         var formData=$(this).serialize();
//         $.ajax({
//             url:"{{url('broadcast-message')}}",
//             type:'POST',
//             'headers': {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     },
//             data:{userid:userid,message:message}

//         });
//         $('#message').val("");

//     });
// });

Echo.channel('chat')
        .listen('Message',(e)=>{
            console.log(e);
            let html=`<br>
            <b>`+e.userid+`</b>
            <span>`+e.message+`</span>`;
            $('#chat_box').append(html);
        })