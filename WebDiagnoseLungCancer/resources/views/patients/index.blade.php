@extends('main')
@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Patients</h1>
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
                        <th>Age</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Symptomps</th>
                        <th>Date of diagnosis</th>
                        <th>Date of ct scan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $key => $patient)
                    <tr>
                        <td>{{$patient->Id}}</td>
                        <td>{{$patient->Name}}</td>
                        <td>{{$patient->Age}}</td>
                        <td>{{$patient->DateOfBirth}}</td>
                        <td>{{$patient->Address}}</td>
                        <td>{{$patient->Phone}}</td>
                        <td style=" max-width: 200px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">{{$patient->Symptoms}}</td>
                        <td>{{$patient->Date_diagnose}}</td>
                        <td>{{$patient->Date_ctscan}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>

</div>






@endsection

@section('js')
<script src="/client/patients/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/client/patients/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/client/patients/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/client/patients/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/client/patients/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/client/patients/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/client/patients/plugins/jszip/jszip.min.js"></script>
<script src="/client/patients/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/client/patients/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/client/patients/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/client/patients/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/client/patients/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

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
<link rel="stylesheet" href="/client/patients/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/client/patients/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/client/patients/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection