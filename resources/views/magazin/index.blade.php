@include('magazin.layouts.header')
@include('magazin.layouts.footer')
@include('magazin.layouts.sidebar')

@yield('header')


<!-- section hero-carousel -->


<!-- section main content -->
    <section class="main-content">
    <div class="container-xl">
        <div class="row gy-4">
            <div class="col-lg-8">

                @foreach($articles as $article)
                <!-- post -->
                <div class="post post-classic rounded bordered">
                    <div class="thumb top-rounded">
                        <a href="category.html" class="category-badge lg position-absolute">{{$article->category->name}}</a>
                        <a href="{{route('showArticle', $article->id)}}">
                            <div class="inner">
                                <img src="{{asset('uploads/'.$article->featured_photos)}}" alt="post-title" />
                            </div>
                        </a>
                    </div>
                    <div class="details">
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item">{{$article->created_at}}</li>
                        </ul>
                        <h5 class="post-title mb-3 mt-3"><a href="{{route('showArticle', $article->id)}}">{{$article->name}}</a></h5>
                        <p class="excerpt mb-0">{{$article->excerpt}}</p>
                    </div>
                    <div class="post-bottom clearfix d-flex align-items-center">
                        <div class="float-end d-none d-md-block">
                            <a href="{{route('showArticle', $article->id)}}" class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
                        </div>
                        <div class="more-button d-block d-md-none float-end">
                            <a href="{{route('showArticle', $article->id)}}"><span class="icon-options"></span></a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Pinate -->
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item active" aria-current="page">
                            {{$articles->links()}}
                        </li>
                    </ul>
                </nav>
            </div>







@yield('sidebar')
@yield('footer')
