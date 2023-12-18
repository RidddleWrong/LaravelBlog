@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Categories list</h1>
            <section class="d-flex justify-content-center">
                <div class="list-group w-100 text-center">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Category</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $counter = 1; @endphp
                        @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{ $counter++ }}</th>
                                <td><a href="{{ route('category.post.show', $category->id) }}">{{ $category->title }}</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
@endsection
