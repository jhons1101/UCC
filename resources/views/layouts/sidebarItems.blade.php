@section('sidebarItems')
<div class="col-lg-4">
    <div class="sidebar">

        <div class="sidebar-item recent-posts">
            <h3 class="sidebar-title">Blogs más recientes</h3>
            <div class="mt-3">
                @foreach($recents as $recent)
                    <div class="post-item mt-3">
                        <img src="{{asset('/img/blog')}}/{{ $recent->image }}" alt="" class="flex-shrink-0">
                        <div>
                            <h4><a href="{{ asset('/blog') }}/{{ $recent->slug }}">{{ $recent->title }}</a></h4>
                            <time datetime="2020-01-01">{{ $recent->updated_at }}</time>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="sidebar-item">
            <h3 class="sidebar-title">Visitanos en Facebook</h3><br />
            <iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/profile.php?id=100069104714602&tabs=timeline&width=300&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=593811532692273" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>

    </div>
</div>
@endsection