@include('magazin.layouts.header')
@include('magazin.layouts.sidebar')
@include('magazin.layouts.footer')

@yield('header')



    <!-- page header -->
    <section class="page-header">
        <div class="container-xl">
            <div class="text-center">
                <h1 class="mt-0 mb-2">About</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

	<!-- section main content -->
	<section class="main-content">
		<div class="container-xl">

			<div class="row gy-4">

				<div class="col-lg-8">

                    <div class="page-content bordered rounded padding-30">

                        <img src="{{asset('website/images/aj-footer-logo.bac952ad.svg')}}" width="1680" height="1120" alt="Katen Doe" class="rounded mb-4" />

                        <p>About Us
                            Al Jazeera is an independent news organisation funded in part by the Qatari government.

                            In 2006, Al Jazeera Satellite Network was changed to a public utility, private corporation by a public memorandum and articles of association in accordance with the provisions of Qatar Law No. 21 of 2006, and was re-named “Al Jazeera Media Network”.

                            Thus, it is a private corporation established for the public benefit.

                            The Board of Directors of Al Jazeera Media Network issues directives, decisions and related regulations.

                            Launched in 1996, Al Jazeera Arabic was the first independent news channel in the Arab world dedicated to providing comprehensive news and live debate. Al Jazeera English, which was launched in 2006, is part of a growing network comprising more than 10 channels and divisions.

                            The network challenged established narratives and gave a global audience an alternative voice, one that put the people back at the centre of the news agenda, and quickly made it one of the world’s most influential news networks.

                            Each subsidiary in the Al Jazeera Media Network follows the same principles and values that inspire it to be challenging and bold, and to provide a voice for the voiceless in some of the world’s most unreported places.

                            It’s a responsibility shared by every employee at the Al Jazeera Media Network, from our headquarters to our broadcast centres. In more than 70 bureaus around the world, we strive to deliver content that captivates, informs, inspires and entertains.</p>




                        <hr class="my-4" />
                        <ul class="social-icons list-unstyled list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>

                    </div>

                </div>

                @yield('sidebar')

			</div>
		</div>
	</section>

@yield('footer')
