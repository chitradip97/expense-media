<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>roomies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- <link rel="stylesheet" type="text/css" href="./assets/js/script.css"> -->
</head>
<body>
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
                <li ><a href="" class="icon"><i class="fa fa-user icon_style ms-4" aria-hidden="true"></i></a></li>
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
            <a href="news_feed.php" class="anchor "><h5 class="bar_option bg-primary">News Feed</h5></a>
            <a href="files_header_updated.php" class="anchor"><h5 class="bar_option">My Expense</h5></a>
            <a href="others_expendature.php" class="anchor"><h5 class="bar_option">Others Expense</h5></a>
            <a href="create_order.php" class="anchor"><h5 class="bar_option">Contribution</h5></a>
            <a href="orders_list.php" class="anchor"><h5 class="bar_option">Others</h5></a>
    </nav>
</div>
<!-- </div>
</div> -->


<!-- right sidebar -->
<!-- <div class="container-fluid">
    <div class="row  ">  -->

<div class="right_sidebar  mt-2 ms-2 mt-2 me-2">
        <nav id="sidebar" class="bg_color  p-2  ">
            <!-- <div class="container-fluid "> -->
                
                <div style="background-color:DodgerBlue;text-align: center;"><h4 style="display:inline-block; "><b>Chat Messages</b></h4></div>
                <div class="chat mt-2">
                    <div class="container-fluid lighter" >
                        <img src="" alt="Avatar" style="width:100%; ">
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
                        
                    </div>
                </div>
                <textarea class="form-control mt-1" rows="2" col="3" id="comment"></textarea>
                <button class="btn btn-primary mt-1 padding-bottom-3" style="float:right;">Send</button>
            <!-- </div> -->
        </nav>
</div>
<!-- </div>
</div> -->
<!-- body content -->
<div class="container-fluid body_content">
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card  ">
                <div class="card-footer"> <h5 class="basic_font">News Feed :</h5> </div>
                <div class="card-body ">
                         
                    <!-- <div class="container "> -->
                        <!-- <h2>Card Header and Footer</h2> -->
                        <div class="card">
                            <div class="card-header">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-2 ">
                                            <div class="circular--portrait mt-3">
                                            <img src="../assets/img/myimg.jpg" alt="Avatar"  class=" logo_icon avatar">
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <textarea class="form-control mt-1" rows="2" col="3" id="comment"></textarea>
                                            <button class="btn btn-primary mt-1 padding-bottom-3" style="float:right;">Post</button>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    
                                    <!-- <div class="card"> -->
                                        <div class="card-header">
                                            <h3><b>Status :</b></h3>
                                        </div>
                                        <div class="card-body">
                                            <!-- post content -->
                                            <div class="container mt-3 ">
                                                
                                                <div class="card ms-5" style="width:400px">
                                                    <img class="card-img-top" src="../assets/img/party.jpg" alt="Card image" style="width:100%">
                                                    <div class="card-body">
                                                    <h4 class="card-title">Launch a party</h4>
                                                    <p class="card-text">Let's have fun Guy's. Tomorrow be there at sharp 8PM. Adress:Eden Garden, franklin club. </p>
                                                    <p class="card-text text-muted">Post By-<b>Chitro</b></p>
                                                    <a href="#" class="btn btn-primary ms-5">Comments</a>
                                                    </div>
                                                </div>
                                            </div>
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