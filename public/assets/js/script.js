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

function onLoad(){
    $.ajax({
        'url':"/view_data",
        'method':'get',
        'data':{},
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
                       <tr>
                           <td>${obj.Date}</td>
                           <td>${obj.Item_name}</td>
                           <td>${obj.Item_quantity}${obj.Item_unit}</td>
                           <td>${obj.Item_price}</td>
                           <td>${obj.Total_amount}</td>
                           <td>
                           <button type="button" class="btn btn-success" onclick="editdata(${obj.Sr_no})">Edit</button>
                           <button type="button" class="btn btn-danger" onclick="deletedata(${obj.Sr_no})">Delete</button>
                           

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


function editdata(id){
    var item_id=id;
    console.log("hello");
    
    console.log(id);
    $.ajax({
        
        'url':`{{url('/edit_backend')}}/${id}`,
        'method':'post',
        'data':{'_token':'{{csrf_token()}}'},
        'success':function(data,status){
            if(status=="success")
            {
                 console.log(data);
                 var jsonData = data.data;
                 console.log(jsonData);
                 content=``;
                jsonData.forEach((val)=>{
                 content=content+`
                 <td>${val.id}</td>
                 <td><input type="text" name="utitle" class="utitle" value="${val.title}"></td>
                 <td><input type="text" name="udesc" class="udesc" value="${val.descripton}"></td>
                 <td>${val.created}</td>
                 <td>
                   <button onclick="update(${id})" class="btn btn-success">Done</button>
                           <button onclick="delete_data()" class="btn btn-danger">Delete</button>
                   </td>
                 
                 `;
                 })
                $(`#select_row${item_id}`).html(content);
             }
         },
          'error':function (error){
              if(error) throw error;
          }
     });
 }