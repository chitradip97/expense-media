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
            <a href="news_feed.php" class="anchor "><h5 class="bar_option">News Feed</h5></a>
            <a href="files_header_updated.php" class="anchor"><h5 class="bar_option">My Expense</h5></a>
            <a href="others_expendature.php" class="anchor"><h5 class="bar_option bg-primary">Others Expense</h5></a>
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
                
                <div style="background-color:DodgerBlue;text-align: center;"><h4 style="display:inline-block; "><b>System Information :</b></h4></div>
                <div class="chat mt-2">
                    <table class="table  table-striped">
                        <tr class=".darker">
                            <td>User-1 :</td>
                            <td>Chitradip Dey</td>
                        </tr>
                        <tr class=".lighter">
                            <td>User-2 :</td>
                            <td>Amit Singh</td>
                        </tr>
                        <tr class=".darker">
                            <td>User-3 :</td>
                            <td>Supriya Debnath</td>
                        </tr>

                    </table>
                </div>
                <!-- <textarea class="form-control mt-1" rows="2" col="3" id="comment"></textarea>
                <button class="btn btn-primary mt-1 padding-bottom-3" style="float:right;">Send</button> -->
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
                <div class="card-header"> <h5 class="basic_font">Chitro Expendature :</h5> </div>
                <div class="card-body ">
                            
                                           
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Date</th>
                                    <th>Items</th>
                                    <th>Amount</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>

                                
                                <tr>
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
                                </tr>

                                
                               



                               
                            </tbody>
                        </table>
                            
                            
                </div>
                <div class="card-header"> <h5 class="basic_font">Amit Expendature :</h5> </div>
                <div class="card-body ">
                            
                                           
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Date</th>
                                    <th>Items</th>
                                    <th>Amount</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>

                                
                                <tr>
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
                                </tr>

                                
                               



                               
                            </tbody>
                        </table>
                            
                            
                </div>
                <div class="card-header"> <h5 class="basic_font">Supriya Expendature :</h5> </div>
                <div class="card-body ">
                            
                                           
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Date</th>
                                    <th>Items</th>
                                    <th>Amount</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>

                                
                                <tr>
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
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
                                    <!-- <td>
                                        <a href="view_customer_edit.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
                                        <a href="view_customer_delete.php?id=<?php echo $list['Customer_id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    </td> -->
                                </tr>

                                
                               



                               
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