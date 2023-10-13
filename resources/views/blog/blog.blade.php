@extends('layouts/blog-details')
@extends('layouts.header')
@extends('layouts.footer')
@extends('layouts.sidebarItems')

@section('blogDetails')
<!-- ======= Blog Item Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="row gy-4 posts-list">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-6">
                            <article class="d-flex flex-column">
                                <div class="post-img">
                                    <img src="{{ asset('img/blog') }}/{{ $blog->image }}" alt="Imágen del blog {{ $blog->title }}" class="img-fluid">
                                </div>
                                <h2 class="title">
                                    <a href="{{ asset('blog') }}/{{ $blog->slug }}">{{ $blog->title }}</a>
                                </h2>
                                <div class="meta-top">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{ $blog->name }}</li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2022-01-01">{{ $blog->updated_at }}</time></li>
                                    </ul>
                                </div>
                                <div class="content">
                                    {!! html_entity_decode(\Illuminate\Support\Str::limit($blog->content, 300, $end='...'), ENT_QUOTES, 'UTF-8') !!}
                                </div>
                                <div class="read-more mt-auto align-self-end">
                                    <a href="{{ asset('blog') }}/{{ $blog->slug }}">Leer más...</a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <div class="mt-5 d-flex justify-content-center">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection