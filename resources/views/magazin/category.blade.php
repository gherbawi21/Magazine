@include('magazin.layouts.header')
@include('magazin.layouts.footer')

@yield('header')



    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">{{$categories->name}}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$categories->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

<!-- section main content -->
<section class="main-content">
    <div class="container">
        <div class="row">
            @foreach($categories->articles as $article)
            <div class="col-6">
                <!-- post -->
                    <div class="post post-classic rounded bordered">
                        <div class="thumb top-rounded">
                            <a href="" class="category-badge lg position-absolute">{{$article->category->name}}</a>
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
                                <a href="blog-single.html" class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
                            </div>
                            <div class="more-button d-block d-md-none float-end">
                                <a href="blog-single.html"><span class="icon-options"></span></a>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@yield('footer')
