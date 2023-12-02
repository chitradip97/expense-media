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
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container bg-primary" style="border:none">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                <div class="card-body">
                                    @if($message = Session::get('error'))
                                     
                                        <div class="alert alert-danger alert-dismissible fade show">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                        <strong>Sorry!</strong> {{$message}}
                                        </div>
                                    
                                        {{-- <li style="color:red;">{{$info}}</li>   --}}
                                    
                                    @endif
                                    @if($errors->any())
                                        <ul>
                                        @foreach($errors->all() as $error)
                                            <li style="color:red;">{{$error}}</li>
                                        @endforeach    
                                        </ul>
                                        @endif
                                    <form action="{{'/login_verify'}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-floating mb-3" id='alert'>

                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="user_email" value="{{old('user_email')}}" />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="user_password" value="{{old('user_password')}}"/>
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        {{-- <div class="form-floating mb-3">
                                        <h5>Login as:</h5>
                                        
                                        admin
                                        <input type="radio" id="Admin" name="login_authorization" value="Admin">
                                        
                                        user
                                        <input type="radio" id="User" name="login_authorization" value="User">
                                        
                                        </div> --}}
                                        <!-- <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div> -->
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="login_pass_recovery.php">Forgot Password?</a>
                                            <!-- <a class="btn btn-primary" href="index.html">Login</a> -->
                                            <input type="submit" class="btn btn-primary" id="login_btn" value="Login">
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
        
    </div>
    
</body>
</html>