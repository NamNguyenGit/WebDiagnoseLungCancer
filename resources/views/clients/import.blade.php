@extends('clients.main')
@section('content')
<section class="what-we-do py-5">
    <div class="breadcrumb-agile">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{route('clients.home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Import Excel</li>
        </ol>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center " style="font-size: 35px;">Thank you for believing in us</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif


                        <form action="{{route('clients.importpost')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                @error('file')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror
                                <input type="file" name="file" />

                                <button type="submit" style="width: 134px" class="btn btn-primary mt-2">Import</button>
                            </div>
                        </form>
                        <a href="{{route('clients.export')}}"> <button type="submit" class="btn btn-success mt-2">Download Example</button></a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
</section>


@endsection


@section('css')

<link rel="stylesheet" href="/client/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="/admin/plugins/toastr/toastr.min.css">
@endsection
@section('js')
<script src="/admin/plugins/jquery/jquery.min.js"></script>

<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="/admin/plugins/toastr/toastr.min.js"></script>
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