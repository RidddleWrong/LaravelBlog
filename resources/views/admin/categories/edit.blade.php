@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Main</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Categories</a></li>
                        <li class="breadcrumb-item">Edit category</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.category.update', $category->id) }}" method="POST" class="w-25">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label class="custom-label">Category name</label>
                            <input type="text" class="form-control" name="title" placeholder="Category name" value="{{ $category->title }}" required>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    {{--    </div>--}}
@endsection
