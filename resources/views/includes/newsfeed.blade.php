<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>roomies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <script type="text/javascript" src="{{ URL::asset('assets/js/script.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- <link rel="stylesheet" type="text/css" href="./assets/js/script.css"> -->
</head>
<body>
    {{-- cookies data --}}
    <?php
    if(isset($data))
    $avatar=$data['avatar'];
    $user_name=$data['user_name'];
    $user_id=$data['user_id'];
    ?>
    <script>
        // window.onload = function() 
        // {
        //         //  var reloading = sessionStorage.getItem("reloading");
        //         //  if (reloading) {
        //         //      sessionStorage.removeItem("reloading");
        //         chatload(`${$user_id}`);
        //     //  }
        // }
    </script>
      <!-- Top-Navbar -->
<div class="top_nav" style="margin-bottom:10px;" >
    <nav class="navbar-light bg-info">
        <div class="container-fluid">
            <div class="row  " style="min-height:56px;">
                <div class="col-md-4 col-sm-6 mb-2" style="line-height: 56px;">
                    <div class="collapse navbar-collapse d-flex flex-row " >
                        <div>
                        <img src="../assets/img/app_logo.png" alt="" style="width:50px; height:50px margin-top:100px">
                    </div>
                    <div>
                    <h3 class="ps-2 mt-2"><b>Expence Media</b></h3> 
                    </div>
                </div>
            </div>
                <div class="col-md-8 col-sm-6 mt-1 float-md-end">
                <div class="collapse navbar-collapse d-flex flex-row-reverse " >
                    {{-- <li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fa fa-user fs-2 icon" href="#" role="button" data-bs-toggle="dropdown"></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    
                                    <div class="circular--portrait mt-2 ms-5">
                                    <img src="{{$avatar}}" alt="Avatar"  class=" logo_icon avatar">
                                    
                                    </div>
                                </li>
                                <li><a class="dropdown-item ps-4 " href="#">{{$user_name}}</a></li>
                                <li><a class="dropdown-item ps-5 " href="{{'/logout_user'}}">Log Out</a></li>
                            </ul>
                        </li>
                    {{-- </li> --}}
                {{-- <li ><a href="" class="icon"><i class="fa fa-user icon_style ms-4" aria-hidden="true"></i></a></li> --}}
                <li ><a href="" class="icon"><i class="fa fa-bell icon_style ms-4" aria-hidden="true"></i></a></li>
                <li ><a href="" class="icon"><i class="fa fa-comment icon_style ms-4" aria-hidden="true"></i></a></li>
                <li ><a href="" class="icon"><i class="fa fa-shopping-cart icon_style ms-4" aria-hidden="true"></i></a></li>
        </div>
        </div>
           
    </nav>
</div>

<!-- left sidebar -->
<!-- <div class="container-fluid">
    <div class="row  ">  -->
<div class="left_sidebar  mt-2 ms-2">
    <nav id="sidebar" class="bg_color  p-4  ">
            <a href="{{'/newsfeed_view'}}" class="anchor "><h5 class="bar_option bg-primary">News Feed</h5></a>
            <a href="{{'/myexpense_view'}}" class="anchor"><h5 class="bar_option">My Expense</h5></a>
            <a href="{{'/other_expense_view'}}" class="anchor"><h5 class="bar_option">Others Expense</h5></a>
            <a href="create_order.php" class="anchor"><h5 class="bar_option">Contribution</h5></a>
            <a href="orders_list.php" class="anchor"><h5 class="bar_option">Others</h5></a>
    </nav>
</div>
<!-- </div>
</div> -->


<!-- right sidebar -->
<!-- <div class="container-fluid">
    <div class="row  ">  -->

<div class="right_sidebar  mt-2 ms-2 mt-2 me-2" onload="chatload({{$user_id}})">
        <nav id="sidebar" class="bg_color  p-2  ">
            <!-- <div class="container-fluid "> -->
                
                <div style="background-color:DodgerBlue;text-align: center;">
                    <h4 style="display:inline-block; "><b>Chat Messages</b></h4>
                    <button type="button" class="btn btn-primary" onclick="chatload({{$user_id}})">View Data</button>
                </div>
                <div class="chat mt-2" id="chat_box">
                    {{-- <div class="container-fluid lighter" >
                        <img src="" alt="Avatar" style="width:100%; ">
                        <img src="${obj.avatar}" alt="" class="user_logo_left mt-2" >
                        <span class="time-right">11:00</span>
                        <p class="chat_font">Hello. How are you today?</p>
                        
                    </div>

                    <div class="container-fluid darker">
                        <img src="" alt="Avatar" class="right" style="width:100%;">
                        <span class="time-left">11:01</span>
                        <p class="chat_font">Hey! I'm fine. Thanks for asking!</p>
                        
                    </div>

                    <div class="container-fluid lighter">
                        <img src="" alt="Avatar" style="width:100%;">
                        <span class="time-right">11:02</span>
                        <p class="chat_font">Sweet! So, what do you wanna do today?</p>
                        
                    </div>

                    <div class="container-fluid darker">
                        <img src="" alt="Avatar" class="right" style="width:100%;">
                        <span class="time-left">11:05</span>
                        <p class="chat_font">Nah, I dunno. Play soccer.. or learn more coding</p>
                        
                    </div>
                    <div class="container-fluid lighter">
                        <img src="" alt="Avatar" style="width:100%;">
                        <span class="time-right">11:06</span>
                        <p class="chat_font">Sweet! So, what do you wanna do today?</p>
                        
                    </div>
                    <div class="container-fluid darker">
                        <img src="" alt="Avatar" class="right" style="width:100%;">
                        <span class="time-left">11:07</span>
                        <p class="chat_font">Sweet! So, what do you wanna do today?</p>
                        
                    </div> --}}
                </div>
                <div id='chat-part'>
                <form id="chat-form">
                @csrf
                <input type="hidden" name='user_id' id='user_id' value="{{$user_name}}">
                <textarea class="form-control mt-1" rows="2" col="3" name="message" id="message" maxlength="99"></textarea>
                <input type="submit" value="Send" class="btn btn-primary mt-1 padding-bottom-3" style="float:right;">
                {{-- <button type="submit" class="btn btn-primary mt-1 padding-bottom-3" style="float:right;" id="sendchat" >Send</button> --}}
            </form>
                </div>
            <!-- </div> -->
        </nav>
</div>

<script>
    
     $('#chat-part').submit(function(event){
        //$(document).on('click','#sendchat',function(e){
        event.preventDefault();
        var userid=$('#user_id').val();
        var message=$('#message').val();
        console.log(userid);
        var formData=$(this).serialize();
        $.ajax({
            url:"{{url('broadcast-message')}}",
            type:'POST',
            'headers': {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            data:{userid:userid,message:message}

        });
        $('#message').val("");

    });

</script>
<!-- </div>
</div> -->
<!-- body content -->
<div class="container-fluid body_content">
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card  ">
                <div class="card-footer">
                     <h5 class="basic_font">News Feed :</h5> 
                     
                    </div>
                <div class="card-body ">
                         
                    <!-- <div class="container "> -->
                        <!-- <h2>Card Header and Footer</h2> -->
                        <div class="card">
                            <div class="card-header">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-2 ">
                                            <div class="circular--portrait mt-3">
                                            <img src="{{$avatar}}" alt="Avatar"  class=" logo_icon avatar">
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <form action="{{'/post_submit'}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                            <input type="hidden" id="user_name" name="user_name" value="{{$user_name}}">
                                            <input type="text" class="form-control mt-1" name="heading" placeholder="Enter Your Heading" id="heading">
                                            <textarea class="form-control mt-1" name="comment" rows="2" col="3" id="comment" placeholder="Share Your Thoughts"></textarea>
                                            <input type="file" id="myfile" name="myfile"  class="mt-1"/>
                                            <button type="submit" class="btn btn-primary mt-1 padding-bottom-3" style="float:right;"  >Post</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                    <!-- <div class="card"> -->
                                        <div class="card-header">
                                            <h3><b>Status :</b></h3>
                                        </div>
                                        <div class="card-body" id="body_content">
                                            <!-- post content -->
                                            @if($post_data)
                                            @foreach($post_data as $data)
                                            <div class="container mt-3 ">
                                                
                                                <div class="card ms-5" style="width:400px">
                                                    <img class="card-img-top" src="{{$data->post_img}}" alt="Card image" style="width:100%">
                                                    <div class="card-body">
                                                    <h4 class="card-title">{{$data->heading}}</h4>
                                                    <p class="card-text">{{$data->comment}} </p>
                                                    <p class="card-text text-muted">Post By-<b>{{$data->user_name}}</b></p>
                                                    <a href="#" class="btn btn-primary ms-5">comments</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div> 
                                        
                                    <!-- </div> -->
                                </div> 
                                <!-- <div class="card-footer">Footer</div> -->
                                        
                                    
                        </div>
                                     
                        
                            
                            
                    <!-- </div> -->
                
                    
                    
                
            </div>
        </div>
    </div>

    <div class="row bg-info pt-2">
        <div class="footer_content py-4">
            <div class="container">
              <div class="row">
                 <div class="text-muted col-sm-7">
                    Copyright &copy; Your Website 2023
                </div>
                <div class=" col-sm-5">
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
                </div>
              </div>
            </div>

        </div>
    </div>
</div>    

<!-- <footer class="py-4 bg-light mt-auto footer_content">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer> -->
</body>