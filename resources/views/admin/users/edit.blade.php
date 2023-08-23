@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit user</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Main</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Users</a></li>
                        <li class="breadcrumb-item">Edit user</li>
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
                    <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="w-25">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <input type="text" value="{{ old('name', $user->name) }}" class="form-control" name="name" placeholder="name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" value="{{ old('email', $user->email) }}" class="form-control" name="email" placeholder="email" required>
                        </div>
                        <div class="form-group">
                            <label>Select role</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $id => $role)
                                    <option value="{{ $id }}" {{ $id == old('role', $user->id) ? ' selected' : ''}}>{{ $role }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
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
