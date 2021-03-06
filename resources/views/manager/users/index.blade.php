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

    <table class=" table table-bordered table-inverse table-hover">
        <thead>
            <tr>
                <th>Role</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Position</td>
                <td>Admin</td>
                <td>Doctor</td>
                <td>Nurse</td>
                <td>Patient</td>
            </tr>
        </tbody>
    </table>
    <section class="content">
        <div class="container-fluid">
        @csrf
            <table id="example1" class="table table-bordered table-inverse table-hover">
                <thead>

                    <tr>

                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($user as $key => $users)
                    <tr>
                        <td>{{$users->id}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->role}}</td>


                        <td>
                            <select class="changerole form-control w-25" data-id="{{$users->id}}">
                                <option value="1" @if($users->role==1) selected @endif >Admin</option>
                                <option value="2" @if($users->role==2) selected @endif>Doctor</option>
                                <option value="3" @if($users->role==3) selected @endif>Nurse</option>
                                <option value="4" @if($users->role==4) selected @endif>Patient</option>
                            </select>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>

</div>






@endsection

@section('js')
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/admin/plugins/jszip/jszip.min.js"></script>
<script src="/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js" ></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>

<script>
    $(".changerole").change(function() {
        let user_id = $(this).data('id');
        let role = $(this).val();
        const data = {};
        data.user_id = user_id;
        data.role = role;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });
        $.ajax({
            url: '/admin/edit-roles',
            data: JSON.stringify(data),
            contentType: "application/json; charset=utf-8",
            traditional: true,
            processData: false,
            type: 'POST',
            beforeSend: function() {
                $.LoadingOverlay('show');
            },
            success: function(response) {
                $.LoadingOverlay('hide');
            },
            error: function(response) {
                $.LoadingOverlay('hide');
            }
        });
    });
</script>

@endsection
@section('css')
<link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
