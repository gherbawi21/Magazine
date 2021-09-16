@include('magazin.layouts.header')
@include('magazin.layouts.footer')

@yield('header')

@foreach($article as $article)
	<!-- cover header -->
    <section class="single-cover data-bg-image" data-bg-image="{{asset('uploads/'.$article->featured_photos)}}">

        <div class="container-xl">
            <div class="cover-content post">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="">{{$article->category->name}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$article->name}}</li>
                    </ol>
                </nav>

                <!-- post header -->
                <div class="post-header">
                    <h1 class="title mt-0 mb-3">{{$article->name}}</h1>
                    <ul class="meta list-inline mb-0">
                        <li class="list-inline-item"><a href="#">{{$article->category->name}}</a></li>
                        <li class="list-inline-item">{{$article->created_at}}</li>
                    </ul>
                </div>
            </div>

        </div>

    </section>
@endforeach

<!-- section main content -->
<section class="main-content">
    <div class="container-xl">
        <div class="row gy-4">
            <div class="col-lg-12">
                <!-- post single -->
                <div class="post post-single">
                    <!-- post content -->
                    <div class="post-content clearfix">
                        <p>
                            {!! $article->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@yield('footer')
