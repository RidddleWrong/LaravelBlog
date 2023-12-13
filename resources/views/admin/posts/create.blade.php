@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Creating post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Main</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                        <li class="breadcrumb-item">Creating post</li>
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
                    <form action="{{ route('admin.post.store') }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="custom-label">Title</label>
                            <input type="text" class="form-control w-25" name="title" placeholder="Post title" value="{{ old('title') }}">
                        </div>

                        <div class="from-group">
                            <label class="custom-label">Content</label>
                            <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                        </div>

                        <div class="form-group w-50">
                            <label for="exampleInputFile">Add preview</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="preview_image" class="custom-file-input"
                                           id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose preview</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group w-50">
                            <label for="exampleInputFile">Add main image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="main_image" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <!-- select -->
                        <div class="form-group w-25 ">
                            <label>Select category</label>
                            <select name="category_id" class="form-control">
                                <option value="null" selected disabled>Select category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? ' selected' : ''}}>{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" data-select2-id="46">
                            <label>Choose tags</label>
                            <select name="tag_ids[]" class="select2 select2-hidden-accessible" multiple="multiple" data-placeholder="Tags" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}" {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : ''}}>{{ $tag->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="from-group">
                            <input type="submit" class="btn btn-primary" value="Add">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    {{--    </div>--}}
@endsection
