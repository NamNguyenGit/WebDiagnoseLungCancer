@extends('manager.main')
@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
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
                            <h3 class="card-title">Edit Users</h3>
                        </div>

                        <form method="POST" action="{{route('users.update')}}" role="form" >
                        @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <input value="{{$user->id}}" type="hidden" name="id">
                                    <label>Role</label>
                                    <select name="role" class="form-control" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                     
                                        <option value="2" >{{$user->role}}</option>
                                       
                                    </select>
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
