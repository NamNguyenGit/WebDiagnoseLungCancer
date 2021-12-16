@extends('clients.main')
@section('content')

<!-- //banner-botttom -->
<section class="content-info py-5">
    <div class="breadcrumb-agile">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{route('clients.home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </div>
    <div class="container py-md-5">
        <div class="text-center px-lg-5">
            <h3 class="heading text-center mb-3 mb-sm-5">Get in Touch</h3>
            <div class="title-desc text-center px-lg-5">
                <p class="px-lg-5 sub-wthree">Praesent ullamcorper dui turpis.At vero eos et accusam et justo duo dolores et ea rebum.Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui turpis.
                    Praesent ullamcorper dui turpis.</p>
            </div>
        </div>
        <div class="contact-w3pvt-form mt-5">
            <form action="{{route('clients.contact')}}" class="w3layouts-contact-fm" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" placeholder="">
                            @error('name')
                            <small class="help-block text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" placeholder="">
                            @error('email')
                            <small class="help-block text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Write Message</label>
                            <textarea class="form-control" name="messages" placeholder=""></textarea>
                            @error('messages')
                            <small class="help-block text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mx-auto mt-3">

                        <button type="submit" class="btn btn-lg  btn-readmore">Send Message</button>

                    </div>
                </div>

            </form>
        </div>
    </div>
</section>
<!-- //banner-botttom -->
@endsection


@section('css')
<link rel="stylesheet" href="/client/toastr/toastr.min.css">
<link rel="stylesheet" href="/client/css/bootstrap.css">
<link rel="stylesheet" href="/client/css/style.css" type="text/css" media="all" />
<link href="/client/css/font-awesome.css" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
@endsection


@section('js')
<script src="/client/toastr/toastr.min.js"></script>

<script>
    toastr.options = {
        "debug": false,
        "positionClass": "toast-top-center",
        "fadeIn": 300,
        "fadeOut": 1000,
        "timeOut": 3000,
        "extendedTimeOut": 1000
    }
</script>

@if(Session::has('success'))
<script>
    toastr.success("{{Session::get('success')}}", 'Success');
</script>
@endif

@if(Session::has('fail'))
<script>
    toastr.error("{{Session::get('fail')}}", 'Fail');
</script>
@endif

@endsection
