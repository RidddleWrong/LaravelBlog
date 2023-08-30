@extends('layouts.main')
@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }} blog</h1>
            {{--     For changing date-time lang      --}}
            {{--            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">Written by {{ $post->author_name }}• {{ $post->created_at->translatedFormat('F') }} {{ $post->created_at->day }} {{ $post->created_at->year }} {{ $post->created_at->format('H:i:s') }}• • Featured • 4 Comments</p>--}}
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">Written by {{ $post->author_name }}
                • {{ $post->created_at->format('F d Y • H:i') }} • {{ $post->comments->count() }} Comments</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img
                    src="{{ $post->main_image ? asset('/storage/'. $post->main_image) : asset('/assets/images/blog_7.jpg.png') }}"
                    alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        {!! $post->content !!}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Related Posts by Category</h2>
                        <div class="row">
                            @foreach($relatedPosts as $relatedPost)
                                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                    <img
                                        src="{{ $relatedPost->preview_image ? asset('/storage/'. $relatedPost->preview_image) : asset('/assets/images/blog_7.jpg') }}"
                                        alt="related post" class="post-thumbnail">
                                    <p class="post-category">{{ $relatedPost->category->title }}</p>
                                    <a href="{{ route('post.show', $relatedPost->id) }}">
                                        <h5 class="post-title">{{ $relatedPost->title }}</h5></a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Comments ({{ $post->comments->count() }})</h2>
                        @auth()
                            <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up">
                                        <label for="comment" class="sr-only">Comment</label>
                                        <textarea name="message" id="comment" class="form-control"
                                                  placeholder="Your comment"
                                                  rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" data-aos="fade-up">
                                        <input type="submit" value="Send comment" class="btn btn-warning">
                                    </div>
                                </div>
                            </form>
                        @endauth
                    </section>
                    <section class="mb-5">
                        @foreach($post->comments->sortByDesc('created_at') as $comment)
                            <div class="mb-5">
                                <div class="mb-2">
                                    <span class="font-weight-bold">{{ $comment->user->name }}</span>
                                    <span
                                        class="text-muted float-right">{{ $comment->created_at->diffForHumans() }}</span>
                                </div><!-- /.username -->
                                <div>
                                    {{ $comment->message }}
                                </div>
                            </div>
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
