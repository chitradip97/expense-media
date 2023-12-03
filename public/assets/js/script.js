// insert data
function insert_data()
{
    console.log("hello");
    let name=$('#itm_nm').val();
    let itm_qty=$('#itm_qty').val();
    let weight=$('#weight').val();
    let price=$('#itm_prc').val();
    var token = $('meta[name="csrf_token"]').attr('content');
    console.log(price);
    console.log(itm_qty);
    console.log(weight);
    console.log(token);
    $.ajax({
        'url':"/insert_product",
        'method':'post',
        'headers': {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        'data':{
            // '_token':token,
            'name':name,
            'quantity':itm_qty,
            'weight':weight,
            'price':price
        },
        'success':function(data,status){
            if(status=="success")
            {
                console.log(data);
               if(data.active=1)
               {
                $('#info').html(`<div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                 Your data is successfully inserted
                </div>`);
               }
               else
               {
                $('#info').html('<h4 style="color:red; font-weight: bold">There is some Error.</h4>');
               }
                
               

            }
        },
        'error':function (error){
            console.log(error);
        }
    });
}