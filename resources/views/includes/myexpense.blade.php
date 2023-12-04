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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    {{-- <script type="text/javascript" src="{{asset('assets/js/script.css')}}"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/js/script.js') }}"></script>
    {{-- <script src="{{ mix('assets/js/script.css') }}"></script> --}}
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
            <a href="{{'/newsfeed_view'}}" class="anchor "><h5 class="bar_option">News Feed</h5></a>
            <a href="{{'/myexpense_view'}}" class="anchor"><h5 class="bar_option bg-primary">My Expense</h5></a>
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

<div class="right_sidebar  mt-2 ms-2 mt-2 me-2">
        <nav id="sidebar" class="bg_color  p-2  ">
            <!-- <div class="container-fluid "> -->
                
                <div style="background-color:DodgerBlue;text-align: center;"><h4 style="display:inline-block; "><b>Add Expence :</b></h4></div>
                <div class="chat mt-2">
                    <!-- <h2>Stacked form</h2> -->
                    {{-- <form action="/action_page.php"> --}}
                        <input type="hidden"  id="user_id" value="{{$user_id}}">
                        <div id="info"></div>
                        <div class="mb-3 mt-3">
                            <label for="itm_nm">Items Name:</label>
                            <input type="text" class="form-control" id="itm_nm" placeholder="Enter Item" >
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="itm_amt">Quantity:</label>
                            <input type="number" class="form-control" id="itm_qty" placeholder="Enter Item amount" >
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="itm_amt">Amount Unit:</label>
                            <select name="weight" id="weight">
                                            <option value="KG">KG</option>
                                            <option value="Gram">Gram</option>
                                            <option value="Ltr">Ltr</option>
                                            <option value="Pc">Pc</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="itm_amt">Price:</label>
                            <input type="number" class="form-control" id="itm_prc" placeholder="Enter Item price" >
                        </div>

                    {{-- </form> --}}
                </div>
                
                <button class="btn btn-primary mt-1 me-5 padding-bottom-3" style="float:right;" onclick=insert_data()>Update</button>
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
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-10 ">
                            <h5 class="basic_font">My Expendature :</h5>
                        </div>
                        <div class="col-md-2 flex-end">
                            <button type="button" class="btn btn-primary" onclick="onLoad({{$user_id}})">View Data</button>
                        </div>
                    </div> 
                </div>
                <div class="card-body " id="table_data">
                            
                                           
                        {{-- <table class="table table-striped">
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
                            <tbody> --}}

                                
                                {{-- <tr>
                                    <td>1</td>
                                    <td>10/5/23</td>
                                    <td>Basmati Rice</td>
                                    <td>
                                        10
                                        <select name="weight" id="weight">
                                            <option value="KG">KG</option>
                                            <option value="Gram">Gram</option>
                                            <option value="Ltr">Ltr</option>
                                            <option value="Pc">Pc</option>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <a href="view_customer_edit.php"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr> --}}

                                {{-- <tr>
                                    <td>2</td>
                                    <td>15/5/23</td>
                                    <td>Amul Milk</td>
                                    <td>
                                        20
                                        <select name="weight" id="weight">
                                            <option value="KG">KG</option>
                                            <option value="Gram">Gram</option>
                                            <option value="Ltr">Ltr</option>
                                            <option value="Pc">Pc</option>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <a href="view_customer_edit.php"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr> --}}

                                {{-- <tr>
                                    <td>3</td>
                                    <td>21/5/23</td>
                                    <td>Gas</td>
                                    <td>
                                        1
                                        <select name="weight" id="weight">
                                            <option value="KG">KG</option>
                                            <option value="Gram">Gram</option>
                                            <option value="Ltr">Ltr</option>
                                            <option value="Pc">Pc</option>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <a href="view_customer_edit.php"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>25/5/23</td>
                                    <td>Swets</td>
                                    <td>
                                        5
                                        <select name="weight" id="weight">
                                            <option value="KG">KG</option>
                                            <option value="Gram">Gram</option>
                                            <option value="Ltr">Ltr</option>
                                            <option value="Pc">Pc</option>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <a href="view_customer_edit.php"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>15/5/23</td>
                                    <td>Amul Milk</td>
                                    <td>
                                        20
                                        <select name="weight" id="weight">
                                            <option value="KG">KG</option>
                                            <option value="Gram">Gram</option>
                                            <option value="Ltr">Ltr</option>
                                            <option value="Pc">Pc</option>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <a href="view_customer_edit.php"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>21/5/23</td>
                                    <td>Gas</td>
                                    <td>
                                        1
                                        <select name="weight" id="weight">
                                            <option value="KG">KG</option>
                                            <option value="Gram">Gram</option>
                                            <option value="Ltr">Ltr</option>
                                            <option value="Pc">Pc</option>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <a href="view_customer_edit.php"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>25/5/23</td>
                                    <td>Swets</td>
                                    <td>
                                        5
                                        <select name="weight" id="weight">
                                            <option value="KG">KG</option>
                                            <option value="Gram">Gram</option>
                                            <option value="Ltr">Ltr</option>
                                            <option value="Pc">Pc</option>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <a href="view_customer_edit.php"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>25/5/23</td>
                                    <td>Swets</td>
                                    <td>
                                        5
                                        <select name="weight" id="weight">
                                            <option value="KG">KG</option>
                                            <option value="Gram">Gram</option>
                                            <option value="Ltr">Ltr</option>
                                            <option value="Pc">Pc</option>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <a href="view_customer_edit.php"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>15/5/23</td>
                                    <td>Amul Milk</td>
                                    <td>
                                        20
                                        <select name="weight" id="weight">
                                            <option value="KG">KG</option>
                                            <option value="Gram">Gram</option>
                                            <option value="Ltr">Ltr</option>
                                            <option value="Pc">Pc</option>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <a href="view_customer_edit.php"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>21/5/23</td>
                                    <td>Gas</td>
                                    <td>
                                        1
                                        <select name="weight" id="weight">
                                            <option value="KG">KG</option>
                                            <option value="Gram">Gram</option>
                                            <option value="Ltr">Ltr</option>
                                            <option value="Pc">Pc</option>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <a href="view_customer_edit.php"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>25/5/23</td>
                                    <td>Swets</td>
                                    <td>
                                        5
                                        <select name="weight" id="weight">
                                            <option value="KG">KG</option>
                                            <option value="Gram">Gram</option>
                                            <option value="Ltr">Ltr</option>
                                            <option value="Pc">Pc</option>
                                        </select>
                                        
                                    </td>
                                    <td>
                                        <a href="view_customer_edit.php"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                                --}}



                               
                            </tbody>
                        </table>
                            
                            
                </div>
                
                    
                    
                
            </div>
        </div>
    </div>

    <div class="row bg-info">
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