<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <title>roomies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="./assets/js/script.css"> -->
</head>
<body>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container bg-primary" style="border:none">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Password Recovery</h3></div>
                                    <div class="card-body">
                                        @if($errors->any())
                                        <ul>
                                        @foreach($errors->all() as $error)
                                            <li style="color:red;">{{$error}}</li>
                                        @endforeach    
                                        </ul>
                                        @endif
                                        <form action="{{'/register_submit'}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputname" type="text" placeholder="Enter your name..." name="user_name"/>
                                                <label for="inputname">Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="user_email"/>
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPass" type="text" name="user_password"/>
                                                <label for="inputPass">Password</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputAvatar" type="file" name="avatar"/>
                                                <label for="inputAvatar">Avatar</label>
                                            </div>
                                           
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="{{url('/login_view')}}">Return to login</a>
                                                
                                                <input type="submit" class="btn btn-primary" id="reset_btn" value="Reset Password">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                            
                                            
                                            
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
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
                </footer>
            </div> -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- <script src="js/scripts.js"></script> -->
    </body> 
</body>
</html>