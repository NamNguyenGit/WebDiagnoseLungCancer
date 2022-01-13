@extends('manager.main')
@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Excel File Information</h1>
                </div>

            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">

            <table id="example1" class="table table-bordered table-inverse table-hover">
                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Symptoms</th>
                        <th>Phone</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($exportuser as $key => $exportusers)
                    <tr>
                        <td>{{$exportusers->id}}</td>
                        <td>{{$exportusers->name}}</td>
                        <td>{{$exportusers->symptoms}}</td>
                        <td>{{$exportusers->phone}}</td>
                        <td>
                            @if($exportusers->status==1)
                            <form action="{{route('excel.editstatus')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$exportusers->id}}">
                                <input type="hidden" name="status" value="2">
                                <button type="submit" class="btn btn-danger">No</button>
                            </form>

                            @else
                            <button type="button" class="btn btn-primary">Yes</button>

                            @endif
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

@endsection
@section('css')
<link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
