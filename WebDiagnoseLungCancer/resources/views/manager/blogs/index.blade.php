@extends('manager.main')
@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Blogs</h1>
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
                        <th>Title</th>
                        <th>SmallTitle</th>
                        <th>Content</th>
                        <th>Author</th>
                        <th>Public-Date</th>
                        <th>Image</th>
                        <th>Created-At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blog as $key => $blogs)
                    <tr>
                        <td>{{$blogs->id}}</td>
                        <td>{{$blogs->title}}</td>
                        <td>{{$blogs->smalltitle}}</td>
                        <td style=" max-width: 300px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">{{$blogs->content}}</td>
                        <td>{{$blogs->author}}</td>
                        <td>{{$blogs->publication_date}}</td>
                        <td style="width: 10%;"><img src="/img/{{$blogs->img}}" style="width: 100%;" alt=""></td>
                        <td>{{$blogs->created_at}}</td>
                        <td>
                            <a href="{{route('blogs.delete',$blogs->id)}}"> <button class="btn btn-danger">Delete</button></a>
                            <a href="{{route('blogs.edit',$blogs->id)}}"><button class="btn btn-success">Update</button></a>
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
