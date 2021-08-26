@section('footer')

<!-- footer -->
<footer>
    <div class="container-xl">
        <div class="footer-inner">
            <div class="row d-flex align-items-center gy-4">
                <!-- copyright text -->
                <div class="col-md-4">
                    <span class="copyright"> Al Jazeera © 2021</span>
                </div>

                <!-- social icons -->
                <div class="col-md-4 text-center">
                    <ul class="social-icons list-unstyled list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

                <!-- go to top button -->
                <div class="col-md-4">
                    <a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- end site wrapper -->

<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
    <!-- close button -->
    <button type="button" class="btn-close" aria-label="Close"></button>

    <!-- logo -->
    <div class="logo">
        <img src="{{asset('website/images/aj-footer-logo.bac952ad.svg')}}" alt="Katen" />
    </div>

    <!-- menu -->
    <nav>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- social icons -->
    <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
    </ul>
</div>

<!-- JAVA SCRIPTS -->
<script src="{{asset('website/js/jquery.min.js')}}"></script>
<script src="{{asset('website/js/popper.min.js')}}"></script>
<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/js/slick.min.js')}}"></script>
<script src="{{asset('website/js/jquery.sticky-sidebar.min.js')}}"></script>
<script src="{{asset('website/js/custom.js')}}"></script>

</body>
</html>
@endsection
