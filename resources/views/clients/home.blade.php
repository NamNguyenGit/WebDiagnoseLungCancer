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
                                <a href="{{route('clients.import')}}" class="btn"> Check your lungs now </a>
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
                                <a href="{{route('clients.contact')}}" class="btn">Get appointment </a>
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
                                <a href="{{route('clients.contact')}}" class="btn">Contact Us </a>
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


                <a href="{{route('clients.about')}}">
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
                    <a href="{{route('clients.blogdetails',$newblogs->id)}}"><img src="/img/{{$newblogs->img}}" alt="news image" class="img-fluid"></a>
                    <div class="ab-info-con">
                        <a href="{{route('clients.blogdetails',$newblogs->id)}}">
                            <h3 class="p-2 title-blog ">{{$newblogs->smalltitle}}</h3>
                        </a>
                        <h5 class="p-2"> <span class="fas fa-clock"></span> {{$newblogs->publication_date}} </h5>
                        <h5 class="p-2"> <span class="fas fa-user"></span> {{$newblogs->author}}</h5>
                        <a href="{{route('clients.blogdetails',$newblogs->id)}}">
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
            <div class="col-md-4 ab-content">
                <div class="ab-content-inner">
                    <a href="{{route('clients.blogdetails',$blogs->id)}}"><img src="/img/{{$blogs->img}}" alt="news image" class="img-fluid"></a>
                    <div class="ab-info-con">
                        <a href="{{route('clients.blogdetails',$blogs->id)}}">
                            <h3 class="title-smallblog">{{$blogs->smalltitle}}</h3>
                        </a>
                        <h6 class="p-1"> <span class="fas fa-clock"></span> {{$blogs->publication_date}} </h6>
                        <h6 class="p-1"> <span class="fas fa-user"></span> {{$blogs->author}}</h6>
                        <a href="{{route('clients.blogdetails',$blogs->id)}}">
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
            <div class="col-lg-4  mb-lg-0 mb-5">
                <div class="padding">
                    <h3>SYMPTOMS</h3>
                    <!-- Item starts -->
                    @foreach($symptom as $key => $symptoms)
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-10 menu-item-name">
                                <h6>{{$symptoms->name}}</h6>
                            </div>
                            <div class="col-2 menu-item-price text-right">
                                <a href="{{$symptoms->refer}}">
                                    <h6>refer</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Item ends -->

                </div>
            </div>
            <div class="col-lg-4  mb-lg-0 mb-5">
                <div class="padding">
                    <h3>RISK FACTORS</h3>
                    <!-- Item starts -->
                    @foreach($riskfactor as $key => $riskfactors)
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-10 menu-item-name">
                                <h6>{{$riskfactors->name}}</h6>
                            </div>
                            <div class="col-2 menu-item-price text-right">
                                <a href="{{$riskfactors->refer}}">
                                    <h6>refer</h6>
                                </a>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    <!-- Item ends -->

                </div>
            </div>
            <div class="col-lg-4  mb-lg-0 mb-5">
                <div class="padding">
                    <h3>PREVENTIONS</h3>
                    <!-- Item starts -->
                    @foreach($prevention as $key => $preventions)
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-10 menu-item-name">
                                <h6>{{$preventions->name}}</h6>
                            </div>
                            <div class="col-2 menu-item-price text-right">
                                <a href="{{$preventions->refer}}">
                                    <h6>refer</h6>
                                </a>
                            </div>
                        </div>

                    </div>
                    @endforeach
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
            <h4 class="tittle my-2">0336065128 </h4>

            <div class="read-more mx-auto m-0 text-center">
                <a href="" class="read-more scroll btn">Click here</a>
            </div>
        </div>
    </div>
</section>
<section class="content-info py-5">

    <div class="container py-md-5">
        <div class="text-center px-lg-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Keep in Touch</h3>
            <div class="title-desc text-center px-lg-5">
                <p class="px-lg-5 sub-wthree">Don't be shy. Please ask us to have more informations.</p>
            </div>
        </div>
        <div class="contact-w3pvt-form mt-5">

            <div class="row">
                <div class="form-group mx-auto mt-3">
                    <a href="{{route('clients.contact')}}"> <button class="btn btn-lg  btn-readmore">Ask Question</button></a>
                </div>
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