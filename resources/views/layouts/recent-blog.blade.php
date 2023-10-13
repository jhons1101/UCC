@section('recent-blog')
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Blog</h2>
            <p>Mantente actualizado con los post mas recientes de nuestro Blog</p>
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="post-box">
                    <div class="post-img"><img src="{{ asset('/img/blog')}}/{{ $blog->image }}" class="img-fluid" alt=""></div>
                    <div class="meta">
                        <span class="post-date">{{ $blog->updated_at }}</span>
                        <span class="post-author"> / {{ $blog->name }}</span>
                    </div>
                    <h3 class="post-title">{{ $blog->title }}</h3>
                    <p>{!! html_entity_decode(\Illuminate\Support\Str::limit($blog->content, 300, $end='...'), ENT_QUOTES, 'UTF-8') !!}</p>
                    <a href="{{ asset('blog') }}/{{ $blog->slug }}" class="readmore stretched-link"><span>Leer más...</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
