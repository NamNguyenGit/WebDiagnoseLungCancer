@extends('clients.main')
@section('content')



<section class="banner-bottom py-5">
    <div class="breadcrumb-agile">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{route('clients.home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
        </ol>
    </div>
    <div class="container py-md-5">

        <h3 class="heading text-center mb-3 mb-sm-5">{{$blog->title}}</h3>
        <div class="single-w3pvt-page mt-md-5 mt-4 px-lg-5">
            <div class="content-sing-w3ls px-lg-5">
                <h5 class="p-1"> <span class="fas fa-clock"></span> {{$blog->publication_date}} </h6>
                    <h5 class="p-1"> <span class="fas fa-user"></span> {{$blog->author}}</h5>
                    <h4>{{$blog->smalltitle}}</h4>
                    <p>{{$blog->content}}</p>

                    



            </div>
            <div class="row my-lg-5 mt-3 mx-0">
                <div class="col-lg-6 text-info pl-0">
                    <p>
                    <p>{{$blog->content}}</p>
                    </p>
                </div>
                <div class="col-lg-6 mt-3 team-img">
                    <div class="row">
                        <div class="col-12">
                            <img src="/img/{{$blog->img}}" class="img-fluid" alt="user-image">
                        </div>

                    </div>
                </div>
            </div>



        </div>


    </div>
</section>
@endsection


@section('css')

<link rel="stylesheet" href="/client/css/bootstrap.css">
<link rel="stylesheet" href="/client/css/style.css" type="text/css" media="all" />
<link href="/client/css/font-awesome.css" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
@endsection
@section('js')
@endsection
