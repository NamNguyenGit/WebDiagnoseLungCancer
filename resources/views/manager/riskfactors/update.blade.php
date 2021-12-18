@extends('manager.main')
@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Risk Factors</h1>
                </div>

            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Risk Factors</h3>
                        </div>

                        <form method="POST" action="{{route('riskfactors.update')}}" >
                        @csrf @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <input value="{{$riskfactors->id}}" type="hidden" name="id">
                                    <label>Name</label>
                                    <input placeholder="Name" name="name" value="{{$riskfactors->name}}"  type="text" class="form-control">
                                    @error('name')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Refer</label>
                                    <input placeholder="Refer"  name="refer"  value="{{$riskfactors->refer}}" type="text" class="form-control">
                                    @error('refer')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>


                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">EDIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('js')
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

@endsection
