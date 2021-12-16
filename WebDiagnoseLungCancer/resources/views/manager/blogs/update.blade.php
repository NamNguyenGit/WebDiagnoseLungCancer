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

            <div class="row">

                <div class="col-md-6">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Blogs</h3>
                        </div>

                        <form method="POST" action="{{route('blogs.update')}}" enctype="multipart/form-data">
                            @csrf  @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <input value="{{$blogs->id}}" type="hidden" name="id">
                                    <label>Title</label>
                                    <input placeholder="Title" name="title" value="{{$blogs->title}}" type="text" class="form-control">
                                    @error('title')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Small Title</label>
                                    <input placeholder="Small Title" value="{{$blogs->smalltitle}}" name="smalltitle" type="text" class="form-control">
                                    @error('smalltitle')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input placeholder="Author" name="author" value="{{$blogs->author}}" type="text" class="form-control">
                                    @error('author')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea placeholder="Content..."   name="content" class="form-control">{{$blogs->content}}</textarea>
                                    @error('content')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Public-Date</label>
                                    <input placeholder="Public Date" value="{{$blogs->publication_date}}" name="publication_date" type="date"  class="form-control">
                                    @error('publication_date')
                                    <small class="help-block text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Image</label>

                                    <input type="file" name="file_upload" class="form-control">
                                    @error('file_upload')
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
