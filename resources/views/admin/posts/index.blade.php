@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Posts</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a
                                href="{{ route('admin.main.index') }}">Main</a>
                        </li>
                        <li class="breadcrumb-item">Posts</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-1">
                    <a href="{{ route('admin.post.create') }}"
                       class="btn btn-block btn-primary">Create</a>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>POST</th>
                                    <th colspan="3" class="text-center">ACTION
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td class="text-center"><a
                                                href="{{route('admin.post.show', $post->id)}}"><i
                                                    class="fas fa-eye"></i></a>
                                        </td>
                                        <td class="text-center"><a
                                                href="{{route('admin.post.edit', $post->id)}}"
                                                class="text-success"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <form
                                                action="{{ route('admin.post.delete', $post->id) }}"
                                                method="POST"
                                                onsubmit="if(confirm('Do you really want to delete this item?')) return true; else return false;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="border-0 bg-transparent">
                                                    <i class="fas fa-trash-alt text-danger"
                                                       role="button"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    {{--    </div>--}}
@endsection
