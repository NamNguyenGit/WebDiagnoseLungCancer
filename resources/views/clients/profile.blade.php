@extends('clients.main')
@section('content')
<section class="what-we-do py-5">
    <div class="breadcrumb-agile">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{route('clients.home')}}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </div>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                <form class="form-horizontal" role="form" action="{{route('clients.postprofile',auth()->user()->id)}}" method="POST">
                    @csrf @method('PUT')
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control"  value="{{auth()->user()->name}}"></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control"  value="{{auth()->user()->email}}"></div>
                        <div class="col-md-12"><label class="labels">Date of Birth</label><input type="text" class="form-control"  value="{{auth()->user()->joinpatient()->dateofbirth}}"></div>
                        <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control"  value="{{$patients->address}}"></div>
                        <div class="col-md-12"><label class="labels">Phone</label><input type="text" class="form-control" value="{{$patients->phone}}"></div>
                        <div class="col-md-12"><label class="labels">Symptoms</label><input type="text" class="form-control" value="{{$patients->symptomps}}"></div>
                        <div class="col-md-12"><label class="labels">Date Diagnosis</label><input type="text" class="form-control" value="{{$patients->date_diagnosis}}"></div>
                        <div class="col-md-12"><label class="labels">Date CT Scan</label><input type="text" class="form-control" value="{{$patients->date_ctscan}}"></div>

                    </div>

                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>


@endsection


@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="/client/css/style.css" type="text/css" media="all" />

@endsection
@section('js')

@endsection
