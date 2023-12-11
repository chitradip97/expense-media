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

$(document).ready(function(){
 $(document).on('click','#sendchat',function(e){
    e.preventDefault();
    let userid=$('#user_id').val();
    let message=$('#comment').val();
    // alert(userid+message);
    if (message=="")
    {
        alert('Please enter message');
        return false;
    }

    $.ajax({
        method:'post',
        url:'/send_message',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:{userid:userid,message:message},
        success:function(res){

        }
    });


 });

});

Window.Echo.channel('chat')
    .listen('.message',(e)=>{
        $('chat_box').append('<p><strong>'+e.userid+':</strong>'+e.message+'</p>');
        $('chat_box').val('');
    });