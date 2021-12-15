@extends('clients.main')
@section('content')
<div class="banner_w3lspvt" id="home">
    <div class="csslider infinity" id="slider1">
        <input type="radio" name="slides" checked="checked" id="slides_1" />
        <input type="radio" name="slides" id="slides_2" />
        <input type="radio" name="slides" id="slides_3" />
        <input type="radio" name="slides" id="slides_4" />

        <ul class="banner_slide_bg">
            <li>
                <div class="slider-info bg1">
                    <div class="bs-slider-overlay">
                        <div class="banner-text">
                            <div class="container">
                                <h2 class="movetxt agile-title text-capitalize">Lung cancer is the most diagnosed cancer at 11.6%</h2>
                                <p>Lung cancer is the most common cancer worldwide, accounting for more than <span class="indexim"> 1.8 million</span> new cases and <span class="indexim">700.000 deaths </span>in 2020. </p>
                                <a href="" class="btn"> Check your lungs now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="slider-info bg2">
                    <div class="bs-slider-overlay1">
                        <div class="banner-text">
                            <div class="container">
                                <h2 class="movetxt agile-title text-capitalize">To save and improve lives!</h2>
                                <p> Dedicated to raising awareness, educating and promoting the early detection of mouth cancer as well as supporting those affected by it. </p>
                                <a href="" class="btn">Get appointment </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="slider-info bg3">
                    <div class="bs-slider-overlay1">
                        <div class="banner-text">
                            <div class="container">
                                <h2 class="movetxt agile-title text-capitalize"><span>1 in 5 </span> cancer deaths are from lung cancer</h2>
                                <p>About 80% of lung cancer death result from <span class="indexim">smoking tobacco </span>.</p>
                                <a href="contact.html" class="btn"> No Smoking</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="slider-info bg4">
                    <div class="bs-slider-overlay1">
                        <div class="banner-text">
                            <div class="container">
                                <h4 class="movetxt agile-title text-capitalize">We care about your health </h4>
                                <p>Lung cancer on track to <span class="indexim">38%</span> to <span class="indexim">2.89 million</span> case by 2030.</p>
                                <a href="contact.html" class="btn">Contact Us </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="navigation">
            <div>
                <label for="slides_1"></label>
                <label for="slides_2"></label>
                <label for="slides_3"></label>
                <label for="slides_4"></label>
            </div>
        </div>
    </div>
</div>
<section class="content-info py-5" id="about">
    <div class="container py-md-5">
        <h3 class="heading text-center mb-3 mb-sm-5">Our Team</h3>

        <div class="info-w3pvt-mid text-center px-lg-5">

            <div class="title-desc text-center  px-lg-5">

                <img src="/client/images/about.jpg" alt="news image" class="img-fluid">
                <p>The Lung Cancer Foundation is a charity dedicated to raising awareness and support for those suffering from or at risk of lung cancer, throat cancer and other head and neck cancers, as well as providing assistance and information on living with mouth cancer for families, friends and carers.
                </p>


                <a href="">
                    <div>
                    <button class="btn btn-lg  btn-readmore mt-lg-4 mt-3 read scroll ">Learn More</button>
                    </div>
                </a>


            </div>
        </div>
    </div>
</section>
<section class="services py-5" id="services">
    <div class="container py-md-5">
        <h3 class="heading text-center mb-3 mb-sm-5">New Blogs</h3>
        <div class="row ab-info">
            @foreach($newblog as $key => $newblogs)
            <div class="col-md-6 ab-content ab-content1">
                <div class="ab-content-inner">
                    <a href=""><img src="/img/{{$newblogs->img}}" alt="news image" class="img-fluid"></a>
                    <div class="ab-info-con">
                        <h3 class="p-2 title-blog ">{{$newblogs->smalltitle}}</h3>
                        <h5 class="p-2"> <span class="fas fa-clock"></span> {{$newblogs->publication_date}} </h5>
                        <h5 class="p-2"> <span class="fas fa-user"></span> {{$newblogs->author}}</h5>
                        <a href="">
                            <div style="text-align: center;">
                                <button class="btn btn-readmore ">Read More</button>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <h3 class="heading text-center mb-3 mb-sm-5 pt-5">Related Blogs</h3>
        <div class="row ab-info second mt-lg-4">
            @foreach($blog as $key => $blogs)
            <div class="col-md-3 ab-content">
                <div class="ab-content-inner">
                    <a href=""><img src="/img/{{$blogs->img}}" alt="news image" class="img-fluid"></a>
                    <div class="ab-info-con">
                        <h3 class="title-smallblog">{{$blogs->smalltitle}}</h3>
                        <h6 class="p-1"> <span class="fas fa-clock"></span> {{$blogs->publication_date}} </h6>
                        <h6 class="p-1"> <span class="fas fa-user"></span> {{$blogs->author}}</h6>
                        <a href="">
                            <div class="pt-1" style="text-align: center; ">
                                <button class="btn btn-readmore ">Read More</button>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="pricing py-5">
    <div class="container py-md-5">
        <h3 class="heading text-capitalize text-center mb-3 mb-sm-5">INFORMATIONS ABOUT LUNG CANCER</h3>
        <div class="row pricing-grids">
            <div class="col-lg-6  mb-lg-0 mb-5">
                <div class="padding">
                    <h3>SYMPTOMS OF LUNG CANCER</h3>
                    <!-- Item starts -->
                    @foreach($symptom as $key => $symptoms)
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-10 menu-item-name">
                                <h6>{{$symptoms->name}}</h6>
                            </div>
                            <div class="col-2 menu-item-price text-right">
                            <a href="{{$symptoms->refer}}"><h6>refer</h6></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Item ends -->

                </div>
            </div>
            <div class="col-lg-6  mb-lg-0 mb-5">
                <div class="padding">
                    <h3>RISK FACTORS</h3>
                    <!-- Item starts -->
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Dye your hair and beard 1</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>$27</h6>
                            </div>
                        </div>

                    </div>
                    <!-- Item ends -->

                </div>
            </div>

        </div>
    </div>
</section>
<section class="order-sec py-5">
    <div class="container py-md-5">
        <div class="test-info text-center">
            <h3 class="tittle order">
                <span>CALL US TO HAVE MORE QUESTION</span>Our team will call back immediately and Book the Appointment
            </h3>
            <h4 class="tittle my-2">123456789 </h4>

            <div class="read-more mx-auto m-0 text-center">
                <a href="" class="read-more scroll btn">Click here</a>
            </div>
        </div>
    </div>
</section>
<section class="testimonials py-5" id="testimonials">
    <div class="container py-md-5">
        <h3 class="heading text-center mb-3 mb-sm-5">Client Reviews</h3>
        <div class="row mt-3">

            <div class="col-md-4 test-grid text-left px-lg-3">
                <div class="test-info">

                    <p>Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.</p>
                    <h3 class="mt-md-4 mt-3"> Abraham Smith</h3>

                    <div class="test-img text-center mb-3">
                        <img src="images/test1.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <div class="mobl-footer test-soc text-center">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 test-grid text-left px-lg-3 py-sm-5 py-md-0 py-3">
                <div class="test-info">

                    <p>Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.</p>
                    <h3 class="mt-md-4 mt-3"> Mariana Noe</h3>
                    <div class="test-img text-center mb-3">
                        <img src="images/test2.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <div class="mobl-footer test-soc text-center">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 test-grid text-left px-lg-3">
                <div class="test-info">

                    <p>Lorem Ipsum has been the industry's standard since the 1500s. Praesent ullamcorper dui turpis.</p>
                    <h3 class="mt-md-4 mt-3">Nebula Nairobi</h3>

                    <div class="test-img text-center mb-3">
                        <img src="images/test3.jpg" class="img-fluid" alt="user-image">
                    </div>
                    <div class="mobl-footer test-soc text-center">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <span class="fa fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="mx-1">
                                <a href="#">
                                    <span class="fa fa-twitter"></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<section class="subscribe" id="subscribe">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 d-flex subscribe-left p-lg-5 py-sm-5 py-4">
                <div class="news-icon mr-3">
                    <span class="fa fa-paper-plane" aria-hidden="true"></span>
                </div>
                <div class="text">
                    <h3>Subscribe To Our Newsletter</h3>
                </div>
            </div>
            <div class="col-md-7 subscribe-right p-lg-5 py-sm-5 py-4">
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Enter your email here" required="">
                    <button class="btn1"><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                </form>
                <p>we never share your email with anyone else</p>
            </div>
        </div>
    </div>
</section>

@endsection
@section('js')
@endsection
@section('css')
<link rel="stylesheet" href="/client/css/bootstrap.css">
<link rel="stylesheet" href="/client/css/style.css" type="text/css" media="all" />
<link href="/client/css/font-awesome.css" rel="stylesheet
	">
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
@endsection
