<!DOCTYPE html>
<html lang="zxx">



<head>
    <title>Magic Clinic</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Men spa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="/client/css/bootstrap.css">
    <link rel="stylesheet" href="/client/css/style.css" type="text/css" media="all" />
    <link href="/client/css/font-awesome.css" rel="stylesheet
	">
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    @yield('css')

</head>

<body>
    <header>
        <div class="container">
            <div class="header d-lg-flex justify-content-between align-items-center">
                <div class="header-agile">
                    <h1>
                        <a class="navbar-brand logo" href="{{route('clients.home')}}">
                            <span class="fas fa-lungs" aria-hidden="true"></span> Magic Clinic <span class="fas fa-hand-holding-medical" aria-hidden="true"></span>
                        </a>
                    </h1>
                </div>
                <div class="nav_w3ls">
                    <nav>
                        <label for="drop" class="toggle mt-lg-0 mt-1"><span class="fa fa-bars" aria-hidden="true"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li class="mr-lg-3 mr-2 active"><a href="{{route('clients.home')}}">Home</a></li>
                            <li class="mr-lg-3 mr-2"><a href="{{route('clients.about')}}">About </a></li>

                            @if(auth()->check())
                            @if(auth()->user()->role==4)

                            <li class="mr-lg-3 mr-2"><a href="{{route('clients.formpatient')}}">Form Patient</a></li>
                        
                            <li class="mr-lg-3 mr-2"><a href="{{route('clients.import')}}">Import Excel</a></li>
                            @else
                            <li class="mr-lg-3 mr-2"><a href="{{route('manager.index')}}">Manager </a></li>
                            @endif
                            @endif

                            <li class="mr-lg-3 mr-2"><a href="{{route('clients.blog')}}">Blog</a></li>
                          

                            @if(auth()->check())
                            <li class="mr-lg-3 mr-2 " style="color:white"> <a href="{{route('clients.profile')}}"> Hi {{auth()->user()->name}}</a></li>

                            <li class="mr-lg-3 mr-2"><a href="{{route('clients.logout')}}">Log out</a></li>

                            @else
                            <li class="mr-lg-3 mr-2"><a href="{{route('clients.login')}}">Log in</a></li>
                            <li><a class="mr-lg-3 mr-2" href="{{route('clients.register')}}">Register</a></li>
                            @endif






                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </header>

    @yield('content')
    <!-- footer -->
    <footer class="footer-content">
        <div class="layer footer">
            <div class="container-fluid">
                <div class="row footer-top-inner-w3ls">
                    <div class="col-lg-4 col-md-6 footer-top ">
                        <h2>
                            <a href="index.html">MAGIC CLINIC</a>
                        </h2>
                        <p class="my-3">Lung cancer is a type of cancer that begins in the lungs. Your lungs are two spongy organs in your chest that take in oxygen when you inhale and release carbon dioxide when you exhale. Lung cancer is the leading cause of cancer deaths worldwide</p>

                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                        <div class="footer-w3pvt">
                            <h3 class="mb-3 w3pvt_title">Opening Hours</h3>
                            <hr>
                            <ul class="list-info-w3pvt last-w3ls-contact mt-lg-4">
                                <li>
                                    <p> Monday - Friday 08.00 am - 10.00 pm</p>

                                </li>
                                <li class="my-2">
                                    <p>Saturday 08.00 am - 10.00 pm</p>

                                </li>
                                <li class="my-2">
                                    <p>Sunday 08.00 am - 10.00 pm</p>

                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                        <div class="footer-w3pvt">
                            <h3 class="mb-3 w3pvt_title">Contact Us</h3>
                            <hr>
                            <div class="last-w3ls-contact">
                                <p>
                                    <a href="mailto:example@email.com">Group3@gmail.com</a>
                                </p>
                            </div>
                            <div class="last-w3ls-contact my-2">
                                <p>+ 123456789</p>
                            </div>
                            <div class="last-w3ls-contact">
                                <p>+ 18 Hoang Quoc Viet,
                                    <br>Cau Giay, Ha Noi.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="w3ls-footer text-center mt-4">
                    <ul class="list-unstyled w3ls-icons">
                        <li>
                            <a href="#">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-vk"></span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- //footer bottom -->
        </div>
    </footer>

@yield('js')    <!-- //footer -->
</body>

</html>
