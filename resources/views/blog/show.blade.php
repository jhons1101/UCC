@extends('layouts/blog-details')
@extends('layouts.header')
@extends('layouts.footer')
@extends('layouts.sidebarItems')

@section('blogDetails')
<article class="blog-details">
    <div class="post-img">
        <img src="{{ asset('/img/blog') }}/{{ $blog->image }}" alt="" class="img-fluid">
    </div>
    <h2 class="title">{{ $blog->title }}</h2>
    <div class="meta-top">
        <ul>
            <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{ $blog->name }}</li>
            <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2020-01-01">{{ $blog->updated_at }}</time></li>
        </ul>
    </div>
    <div class="content">
        {!! html_entity_decode($blog->content, ENT_QUOTES, 'UTF-8') !!}
    </div>
</article>

<div class="comments">
    <div class="fb-comments" data-href="{{url()->current()}}" data-width="100%" data-numposts="5"></div>
</div>
@endsection