@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            @if(isset($_GET['search']) && $_GET['search'] || isset($_GET['category_id']) && $_GET['category_id'])
                @if(count($posts) > 0)
                    <h3 class="edica-page-title text-left" data-aos="fade-up">Search results:</h3>
                @else
                    <h3 class="edica-page-title text-left" data-aos="fade-up">Nothing found by search</h3>
                @endif
            @else
                <h3 class="edica-page-title" data-aos="fade-up">The blogs</h3>
            @endif
            <section class="featured-posts-section">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 fetured-post blog-post">
                            <div class="blog-post-thumbnail-wrapper">
                                <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                    <img
                                        src="{{ $post->preview_image ? asset('/storage/'.$post->preview_image) : asset('/storage/aNoPhoto.png') }}"
                                        alt="blog post">
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="blog-post-category">{{ $post->category->title }}</p>
                                @auth()
                                    <form action="{{ route('post.like.store', $post->id) }}" method="post">
                                        @csrf
                                        <span><b>
                                            {{ $post->user_likes_count }}
                                        </b></span>
                                        <button type="submit" class="border-0 bg-transparent">
                                            <i class="fa{{ in_array($post->id, auth()->user()->likedPosts()->pluck('id')->toArray()) ? 's' : 'r' }} fa-heart"></i>
                                        </button>
                                    </form>
                                @endauth
                                @guest()
                                    <div>
                                        <span><b>
                                            {{ $post->user_likes_count }}
                                        </b></span>
                                        <i class="far fa-heart"></i>
                                    </div>
                                @endguest
                            </div>
                            <div>
                                <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{ $post->title }}</h6>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row mb-5">
                    <div class="mx-auto" style="margin-top: -80px">
                        {{ $posts->withQueryString()->links() }}
                    </div>
                </div>
            </section>
            {{--Random posts--}}
            <h2 class="edica-page-title text-center" data-aos="fade-up">Maybe you would like</h2>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            @foreach($randomPosts as $post)
                                <div class="col-md-6 blog-post" data-aos="fade-up">
                                    <div class="blog-post-thumbnail-wrapper">
                                        <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                            <img
                                                src="{{ $post->preview_image ? asset('/storage/'.$post->preview_image) : asset('/storage/aNoPhoto.png') }}"
                                                alt="blog post">
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="blog-post-category">{{ $post->category->title }}</p>
                                        @auth()
                                            <form action="{{ route('post.like.store', $post->id) }}" method="post">
                                                @csrf
                                                <span><b>
                                                    {{ $post->user_likes_count }}
                                                </b></span>
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <i class="fa{{ in_array($post->id, auth()->user()->likedPosts()->pluck('id')->toArray()) ? 's' : 'r' }} fa-heart"></i>
                                                </button>
                                            </form>
                                        @endauth
                                        @guest()
                                            <div>
                                                <i class="far fa-heart"></i>
                                            </div>
                                        @endguest
                                    </div>
                                    <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
                {{--Top posts--}}
                <div class="widget widget-post-list">
                    <h5 class="widget-title" style="font-size: 30px">Top posts</h5>
                    <ul class="post-list">
                        @foreach($likedPosts as $post)
                            <li class="post">
                                <a href="{{ route('post.show', $post->id) }}" class="post-permalink media">
                                    <img
                                        src="{{ $post->preview_image ? asset('/storage/'.$post->preview_image) : asset('/storage/aNoPhoto.png') }}"
                                        alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">{{ $post->title }}</h6>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="widget-title">Categories</h5>
                    <img src="{{ asset('assets/images/blog_widget_categories.jpg') }}" alt="categories"
                         class="w-100">
                </div>
            </div>
        </div>
    </main>
@endsection
