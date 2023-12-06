// insert data
function insert_data()
{
    // console.log("hello");
    let name=$('#itm_nm').val();
    let itm_qty=$('#itm_qty').val();
    let weight=$('#weight').val();
    let price=$('#itm_prc').val();
    var user_id=$('#user_id').val();
    var token = $('meta[name="csrf_token"]').attr('content');
    // console.log(price);
    // console.log(itm_qty);
    // console.log(weight);
    // console.log(token);
    $.ajax({
        'url':"/insert_product",
        'method':'post',
        'headers': {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        'data':{
             'user_id':user_id,
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
                onLoad(user_id);
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

function onLoad(user_id){
var user_id=user_id;
    $.ajax({
        'url':"/view_data",
        'method':'get',
        'data':{'user_id':user_id},
        'success':(data,status)=>{
             if(status =='success'){
                // $('#table_data').html(`
                //  <p><img src='{{asset('./images/ajax-loader.gif')}}' height='120px' width='120px'/> Please Wait ... </p>`);                        
                
                    $('#table_data').html('');
                    console.log(data);  //response coming from ajax
                   var content =`
                   <table class="table table-striped">
                   <thead>
                       <tr>
                           <th>Date</th>
                           <th>Item Name</th>
                           <th>Quantity(unit)</th>
                           <th>Price</th>
                           <th>Total Amount</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                   `;
                   var jsonData = data.data;
                   jsonData.forEach(function(obj){
                      content+=`
                       <tr id="select_row${obj.Sr_no}" >
                           <td>${obj.Date}</td>
                           <td>${obj.Item_name}</td>
                           <td>${obj.Item_quantity}${obj.Item_unit}</td>
                           <td>${obj.Item_price}</td>
                           <td>${obj.Total_amount}</td>
                           <td>
                           <button type="button" class="btn btn-success" onclick="editdata(${obj.Sr_no},${user_id})">Edit</button>
                           <button type="button" class="btn btn-danger" onclick="deletedata(${obj.Sr_no},${user_id})">Delete</button>
                           

                           </td>
                       </tr>
                      `;
                   });
                   content+=`</tbody>
                            </table>`;
                   //console.log(content);
                   $('#table_data').html(content);
                  


                
                
             }
        },
        'error' :(error)=>{
            if(error) throw error;
        }
    });
}


function editdata(id,user_id){
    var item_id=id;
    console.log("hello");
    
    console.log(id);
    $.ajax({
        
        'url':"/edit_data",
        'method':'post',
        'headers': {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        'data':{'item_id':item_id},
        'success':function(data,status){
            if(status=="success")
            {
                 console.log(data);
                 var jsonData = data.data;
                 console.log(jsonData);
                 content=``;
                jsonData.forEach((val)=>{
                    var id=val.Sr_no;
                 content=content+`
                 <td>${val.Date}</td>
                 <td>${val.Item_name}</td>
                 <td><input type="number" id="itm_qty_mod${val.Sr_no}" style="width: 50px;" placeholder="Enter Item amount" value="${val.Item_quantity}">${val.Item_unit}</td>
                 <td><input type="number" id="itm_prc_mod${val.Sr_no}" style="width: 50px;" placeholder="Enter Item price" value="${val.Item_price}" ></td>
                 <td>${val.Total_amount}</td>
                 <td>
                    <button type="button" class="btn btn-success" onclick="updatedata(${val.Sr_no},${user_id})">Update</button>
                    <button type="button" class="btn btn-danger" onclick="deletedata(${val.Sr_no},${user_id})">Delete</button>
                </td>
                 
                 `;
                 })
                $(`#select_row${id}`).html(content);
             }
         },
          'error':function (error){
              if(error) throw error;
          }
     });
 }

 function updatedata(id,user_id)
{   var item_id=id;
    // console.log("hello");
    //let name=$('#itm_nm').val();
    let itm_qty=$(`#itm_qty_mod${id}`).val();
    //let weight=$(`itm_prc_mod${id}`).val();
    let price=$(`#itm_prc_mod${id}`).val();
    // var token = $('meta[name="csrf_token"]').attr('content');
     console.log(price);
     console.log(itm_qty);
    // console.log(weight);
    // console.log(token);
    $.ajax({
        'url':"/update_product",
        'method':'post',
        'headers': {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        'data':{
            // '_token':token,
             'Product_id':item_id,
            'quantity':itm_qty,
            // 'weight':weight,
            'price':price
        },
        'success':function(data,status){
            if(status=="success")
            {
                console.log(data);
               if(data.active=1)
               {
                
                onLoad(user_id);
               }
            }
        },
        'error':function (error){
            console.log(error);
        }
    });
}
         
                
               


function deletedata(id,user_id)
{
    console.log("hello");
    let product_id=id;
    // let tname=$('.utitle').val();
    // let tdesc=$('.udesc').val();
    $.ajax({
        'url':"/delete_product",
        'method':'post',
        'headers': {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        'data':{
            'product_id':product_id
            // 'utitle':tname,
            // 'udesc':tdesc
        },
        'success':function(data,status){
            if(status=="success")
            {
                console.log(data);
                // $('#info').html(`<h4 style="color:green; font-weight: bold">${data.message}</h4>`);
                if(data.active=1)
                {
                    onLoad(user_id);
                //  $('#info').html('<h4 style="color:green; font-weight: bold">Your data is successfully deleted.</h4>');
                }
            //    else if(data.active=0)
            //    {
            //     $('#info').html('<h4 style="color:red; font-weight: bold">There is some Error.</h4>');
            //    }
            }  
               

            // }
        },
        'error':function (error){
            console.log(error);
        }
    });
}

 function chat_send(user_id)
 {
    let comment=$(`#comment`).val();
    $.ajax({
        'url':"/insert_product",
        'method':'post',
        'headers': {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        'data':{
             'user_id':user_id,
            'comment':comment
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
                onLoad(user_id);
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
