@section('sidebar')

                <div class="col-lg-4">

                    <!-- sidebar -->
                    <div class="sidebar">

                        <!-- widget categories -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Explore Topics</h3>
                                <img src="{{asset('website/images/wave.svg')}}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <ul class="list">
                                    @foreach($categories as $category)
                                    <li><a href="/category/{{$category->id}}">{{$category->name}}</a><span>{{$category->articles->count()}}</span></li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>

                        <!-- widget newsletter -->
                        <div class="widget rounded">
                            <div class="widget-header text-center">
                                <h3 class="widget-title">Newsletter</h3>
                                <img src="{{asset('website/images/wave.svg')}}" class="wave" alt="wave" />
                            </div>
                            <div class="widget-content">
                                <span class="newsletter-headline text-center mb-3">Join 70,000 subscribers!</span>
                                <form method="post" action="{{route('mail')}}">
                                    @csrf
                                    <div class="mb-2">
                                        <input class="form-control w-100 text-center" placeholder="Email address…" type="email" name="email">
                                    </div>
                                    <button class="btn btn-default btn-full" type="submit">Sign Up</button>
                                </form>
                                <span class="newsletter-privacy text-center mt-3">By signing up, you agree to our <a href="#">Privacy Policy</a></span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


@endsection
