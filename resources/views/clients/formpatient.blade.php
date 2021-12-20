@extends('clients.main')
@section('content')
<section class="what-we-do py-5">
    <div class="breadcrumb-agile">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{route('clients.home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Patient Form</li>
        </ol>
    </div>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="/img/user.png"><span class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <form class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels"></label><input type="hidden" class="form-control" name="id" value="{{auth()->user()->id}}">

                            </div>
                            <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" name="name" value="{{auth()->user()->name}}"> @error('name')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror</div>
                            <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" name="email" value="{{auth()->user()->email}}">
                                @error('email')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12"><label class="labels">Date of Birth</label><input type="date" class="form-control" name="dateofbirth" >
                                @error('dateofbirth')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" name="address" ">
                                @error('address')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12"><label class="labels">Phone</label><input type="text" class="form-control" name="phone" ">
                                @error('phone')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12"><label class="labels">Symptoms</label><textarea rows="5" class="form-control" name="symptoms"></textarea>
                                @error('symptoms')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12"><label class="labels">Date Diagnosis</label><input type="date" class="form-control" name="date_diagnosis" >
                                @error('date_diagnosis')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12"><label class="labels">Date CT Scan</label><input type="date" class="form-control" name="date_ctscan" >
                                @error('date_ctscan')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-12"><label class="labels">Image Profile</label><input type="file" class="form-control" name="file_upload" >
                                @error('file_upload')
                                <small class="help-block text-danger">{{$message}}</small>
                                @enderror
                            </div>

                        </div>

                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Post Form</button></div>
                    </form>
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

@endsection
@section('js')

@endsection
