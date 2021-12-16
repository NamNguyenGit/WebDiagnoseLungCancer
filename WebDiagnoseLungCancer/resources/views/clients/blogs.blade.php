@extends('clients.main')
@section('content')


<section class="what-we-do py-5">
    <div class="breadcrumb-agile">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{route('clients.home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
        </ol>
    </div>
    <div class="container py-md-5">
        <h3 class="heading text-center mb-3 mb-sm-5">Our Blogs</h3>
        <div class="row what-we-do-grid">

            @foreach($blog as $key => $blogs)
            <div class="col-md-4 pt-5">
                <div class="blog-info">
                    <a href=""> <img src="/img/{{$blogs->img}}" width="100%" class="img-responsive" alt="" /></a>
                    <h1 style="height: 200px;" class="pt-4">{{$blogs->title}}</h1> <span> <span class="fas fa-clock"></span>{{$blogs->publication_date}}</span>
                    <p style="color: black"> <span class="fas fa-user"></span>
                        {{$blogs->author}}
                    </p>
                    <a href="{{route('clients.blogdetail',$blogs->id)}}">
                        <h5 class=" pb-5 " style="color: red;">Read more</h5>
                    </a>
                </div>
            </div>
            @endforeach


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