<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>Register & Login</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/fontawesome.css')}}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/icofont.css')}}">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/themify.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.css')}}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('asset/css/color-1.css')}}" media="screen">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/responsive.css')}}">
</head>
<body>

<!-- tap on top starts -->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->

<!-- page-wrapper Start-->
<div class="page-wrapper">
    <div class="container-fluid p-0">
        <!-- login page start-->
        <div class="authentication-main no-bg">
            <div class="row w-100">
                <div class="col-md-12">
                    <div class="auth-innerright">
                        <div class="authentication-box">
                            <div class="mt-4">
                                <div class="card-body">
                                    <div class="cont text-center">
                                        <div>
                                            <form class="theme-form" id="login" method="POST" action="{{route('login')}}">
                                                @csrf

                                                <h4>LOGIN</h4>
                                                <h6 class="mb-5">Enter your Username and Password</h6>
                                                <div class="form-group text-left">
                                                    <label for="email" class="col-form-label pl-2">Your Email</label>
                                                    <input class="form-control" name="email" id="email" type="text">

                                                    @error('email')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="form-group text-left">
                                                    <label class="col-form-label pl-2" for="password">Password</label>
                                                    <input class="form-control" id="password" name="password" type="password">

                                                    @error('password')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                                <div class="p-0 d-flex">
                                                    <input class="form-check mt-1 mr-2" type="checkbox">
                                                    <label class="form-check-label">Remember me</label>
                                                </div>

                                                <div class="row mt-3">
                                                    <div class="col-sm-4">
                                                        <button class="btn btn-primary" type="submit">LOGIN</button>
                                                    </div>

                                                    <div class="col-sm-8">
                                                        <div class="text-left mt-2 m-l-20">Are you already user? <a class="btn-link text-capitalize" href="login.html">Login</a></div>
                                                    </div>
                                                </div>

                                                <div class="login-divider d-none"></div>
                                                <br><br><br>
                                            </form>
                                        </div>

                                        <div class="sub-cont">
                                            <div class="img">
                                                <div class="img__text m--up">
                                                    <h2>New User?</h2>
                                                    <p>Sign up and discover great amount of new opportunities!</p>
                                                </div>

                                                <div class="img__text m--in">
                                                    <h2>One of us?</h2>
                                                    <p>If you already has an account, just sign in. We've missed you!</p>
                                                </div>

                                                <div class="img__btn"><span class="m--up">Sign up</span><span class="m--in">Sign in</span></div>
                                            </div>

                                            <div>
                                                <form class="theme-form" id="register">
                                                    @csrf

                                                    <h4 class="text-center">NEW USER</h4>
                                                    <h6 class="text-center mb-5">Enter your Username and Password For Signup</h6>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group text-left">
                                                                <input id="first_name" name="first_name" class="form-control" type="text" placeholder="First Name" />
                                                                <span class="text-danger" id="Er_first_name" role="alert"></span>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group text-left">
                                                                <input id="last_name" name="last_name" class="form-control" type="text" placeholder="Last Name" />
                                                                <span class="text-danger" id="Er_last_name" role="alert"></span>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group text-left">
                                                                <input id="email" name="email" class="form-control" type="text" placeholder="Email" />
                                                                <span class="text-danger" id="Er_email" role="alert"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group text-left">
                                                        <input id="password" name="password" class="form-control" type="password" placeholder="Password" />
                                                        <span class="text-danger" id="Er_password" role="alert"></span>
                                                    </div>

                                                    <div class="form-group">
                                                        <input id="phone_number" name="phone_number" class="form-control" type="text" placeholder="Phone Number" />
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <button class="btn btn-primary" type="submit">Sign Up</button>
                                                        </div>

                                                        <div class="col-sm-6 offset-1 mt-1">
                                                            <input type="radio" name="role" id="store" value="store" checked/>
                                                            <label for="store" class="form-label" style="margin:8px 3px 0 0">Store</label>

                                                            <input type="radio" name="role" id="shipping" value="shipping" style="margin:8px 3px 0 15px">
                                                            <label for="shipping" class="form-label">Shipping</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-divider d-none"></div>
                                                    <br><br><br>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login page end-->
    </div>
</div>
<!-- latest jquery-->
<script src="{{asset('asset/js/jquery-3.5.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('asset/js/popper.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{asset('asset/js/sidebar-menu.js')}}"></script>
<script src="{{asset('asset/js/config.js')}}"></script>

<!-- Plugins JS start-->
<script src="{{asset('asset/js/login.js')}}"></script>
<!-- Plugins JS Ends-->

<!-- Theme js-->
<script src="{{asset('asset/js/script.js')}}"></script>
<!-- login js-->

<script>
    $('#register').on('submit', function (e){
        e.preventDefault();

        $.ajax({
            type: "POST",
            url: "register",
            data: $(this).serialize(),
            success:function () {
                window.location.href = '/login';
            },
            error: function (fail) {
                // Convert text to json key and value
                let response = $.parseJSON(fail.responseText);

                // Foreach to json
                $.each(response.errors, function (key, val) {
                    $('#Er_'+key).text(val[0]);
                });
            }
        });
    });
</script>

</body>
</html>
