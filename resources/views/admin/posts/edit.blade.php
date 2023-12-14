@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Main</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Posts</a></li>
                        <li class="breadcrumb-item">Edit post</li>
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
                    <form action="{{ route('admin.post.update', $post->id) }}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label class="custom-label">Title</label>
                            <input type="text" class="form-control w-25" name="title" placeholder="Post title"
                                   value="{{ old('title', $post->title) }}">
                        </div>

                        <div class="from-group">
                            <label class="custom-label">Content</label>
                            <textarea id="summernote" name="content">{{ old('content', $post->content) }}</textarea>
                        </div>

                        <div class="form-group w-50">
                            <label for="exampleInputFile">Add preview</label>
                            <div class="image mb-2">
                                <img src="{{ $post->preview_image ? asset('storage/'.$post->preview_image) : asset('storage/aNoPhoto.png') }}" alt="preview_image" class="w-25">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label" for="exampleInputFile">Preview</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
{{--                        --}}
                        <div class="form-group w-50">
                            <label for="exampleInputFile">Add main image</label>
                            <div class="image mb-2">
                                <img src="{{ $post->main_image ? asset('storage/'.$post->main_image) : asset('storage/aNoPhoto.png')}}" alt="main_image" class="w-25">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"
                                           name="main_image">
                                    <label class="custom-file-label" for="exampleInputFile">Main image</label>
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
                                @foreach($categories as $category)
                                    <option
                                        value="{{$category->id}}" {{ old('category_id', $category->id) == $post->category_id ? ' selected' : ''}}>{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
{{--                        --}}
                        <div class="form-group" data-select2-id="46">
                            <label>Choose tags</label>
                            <select name="tag_ids[]" class="select2 select2-hidden-accessible" multiple="multiple"
                                    data-placeholder="Tags" style="width: 100%;" data-select2-id="7" tabindex="-1"
                                    aria-hidden="true">
                                @foreach($tags as $tag)
                                    <option
                                        value="{{ $tag->id }}" {{ in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : ''}}>{{ $tag->title }}</option>
                                @endforeach
                            </select>
                        </div>
{{--                        --}}
                        <div class="from-group mb-3">
                            <input type="submit" class="btn btn-primary" value="Update">
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
