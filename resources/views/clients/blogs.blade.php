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
            <div class="container">
                <div class="row">

                    <div class="col-md-12">

                        <input class="form-control mb-4" id="myInput" type="text" placeholder="Search some keywords">
                        @csrf
                        <div class="row" id="ourblog">
                            @foreach($blog as $key => $blogs)
                            <div class="col-md-4 pt-5">
                                <div class="blog-info" id="myblog">
                                    <a href="{{route('clients.blogdetails',$blogs->id)}}"> <img src="/img/{{$blogs->img}}" width="100%" style="height: 400px;" class="img-responsive" alt="" /></a>
                                    <h1 style="height: 200px;" class="pt-4">{{$blogs->title}}</h1> <span> <span class="fas fa-clock"></span>{{$blogs->publication_date}}</span>
                                    <p style="color: black"> <span class="fas fa-user"></span>
                                        {{$blogs->author}}
                                    </p>
                                    <a href="{{route('clients.blogdetails',$blogs->id)}}">
                                        <h5 class=" pb-5 " style="color: #ffc905;">Read more</h5>
                                    </a>
                                </div>
                            </div>
                            @endforeach
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js
"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js" ></script>
<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            const data = {};
            data.value = value;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });
            $.ajax({
                url: '/search-blog',
                data: JSON.stringify(data),
                contentType: "application/json; charset=utf-8",
                traditional: true,
                processData: false,
                type: 'POST',
                beforeSend: function() {
                    $.LoadingOverlay('show');
                },
                success: function(response) {
                    displayblog(response);
                    $.LoadingOverlay('hide');

                },
                error: function(response) {
                    $.LoadingOverlay('hide');
                }
            });
        });


    });
    function displayblog(response){
        var ourblog = $('#ourblog');
        ourblog.empty();
        var html = '';
        for(let i = 0 ; i<response.length;i++){
        html+=  '<div class="col-md-4 pt-5">';
        html+=  '<div class="blog-info" id="myblog">';
        html+=  '<a href="/blogdetail/'+response[i].id+'"> <img src="/img/'+response[i].img+'" width="100%" style="height: 400px;" class="img-responsive" alt="" /></a>';
        html+=  '<h1 style="height: 200px;" class="pt-4">'+response[i].title+'</h1> <span> <span class="fas fa-clock"></span>'+response[i].publication_date+'</span>';
        html+=  '<p style="color: black"> <span class="fas fa-user"></span>  '+response[i].author+' </p>';
        html+=  '<a href="/blogdetail/'+response[i].id+'">  <h5 class=" pb-5 " style="color: #ffc905;">Read more</h5> </a>';
        html+=  '</div>';
        html+=  '</div>';
        }
        ourblog.html(html);

    }

</script>
@endsection
