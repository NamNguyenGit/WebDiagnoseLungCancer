<!doctype html>
<html lang="en">

<head>
    <title>Welcome to Magic Clinic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/signin/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(./signin/images/1.jpg);">
    <section class="ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <div class="pb-2">
                            <a href="{{route('login.github')}}"> <button type="submit" class="form-control btn submit px-3 ghlogin"> <span class="fa fa-github  mr-2 " style="font-size:24px;"></span> Login with Github</button></a>
                        </div>
                      

                        <h3 class="mb-4 text-center">OR</h3>


                        <form action="{{route('clients.login')}}" method="POST" role="form" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control" placeholder="Password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input name="remember" type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50">
                                    <a href="{{route('clients.register')}}"><label class="checkbox-wrap checkbox-primary">Have an account ?

                                        </label></a>

                                </div>

                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/signin/js/jquery.min.js"></script>
    <script src="/signin/js/popper.js"></script>
    <script src="/signin/js/bootstrap.min.js"></script>
    <script src="/signin/js/main.js"></script>

</body>

</html>