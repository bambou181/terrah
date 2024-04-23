@extends('layouts.app')
@section('content')

<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="index.html" class="logo m-0 float-start">Financing<span class="text-primary">.</span></a>
						</div>
						<div class="col-8 text-center ">
							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li><a href="index.html">Home</a></li>
								<li class="has-children">
									<a href="financing.html">Pages</a>
									<ul class="dropdown">
										<li><a href="financing.html">Financing</a></li>
										<li><a href="single.html">Blog Single</a></li>
										<li><a href="case-study.html">Case Study Detail</a></li>
										<li><a href="#">Menu One</a></li>
										<li><a href="#">Menu Two</a></li>
										<li class="has-children">
											<a href="#">Dropdown</a>
											<ul class="dropdown">
												<li><a href="#">Sub Menu One</a></li>
												<li><a href="#">Sub Menu Two</a></li>
												<li><a href="#">Sub Menu Three</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="services.html">Services</a></li>
								<li class="active"><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>

							<a href="#" class="call-us d-flex align-items-center">
								<span class="icon-phone"></span>
								<span>123-489-9381</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<div class="hero overlay inner-page">
		<img src="{{ asset('/img/little-family.jpg') }}" alt="" class="img-fluid blob">
		<div class="container">
			<div class="row align-items-center justify-content-center text-center pt-5">
				<div class="col-lg-6">
					<h1 class="heading text-white mb-3" data-aos="fade-up">A Propos</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="sectionp sec-halfs py-0">
		<div class="half-content d-lg-flex align-items-stretch">
			<div class="img" style="background-image: url('img/keyhome.jpg')" data-aos="fade-in" data-aos-delay="100">
				
			</div>
			<div class="text">
				<h2 class="heading text-primary mb-3">Bienvenue sur notre plateforme de vente de terrains ! </h2>
				<p class="mb-5">Notre entreprise est née de la vision de simplifier le processus d'achat et de vente de terrains. Forts de notre expertise dans le secteur immobilier, nous avons décidé de combiner notre passion pour l'innovation technologique avec notre connaissance approfondie du marché pour créer une solution en ligne qui répond aux besoins changeants de nos clients.</p>
			</div>
		</div>

		<div class="half-content d-lg-flex align-items-stretch">
			<div class="img order-md-2" style="background-image: url('img/space4.jpg')" data-aos="fade-in">
				
			</div>
			<div class="text">
				<h2 class="heading text-primary mb-3">Notre mission</h2>
				<p class="mb-5">notre mission est de rendre la recherche et l'achat de terrains aussi transparents, pratiques et accessibles que possible pour nos utilisateurs. Nous nous engageons à offrir une plateforme conviviale et sécurisée qui facilite la mise en relation entre les acheteurs et les vendeurs, tout en mettant l'accent sur l'intégrité et le service à la clientèle.</p>
			</div>
		</div>

	</div>

	<div class="sectionp mt-5 sec-features">
		<div class="container">
			<div class="row g-5">
				<div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
					<div class="feature d-flex">
						<span class="bi-bag-check-fill"></span>
						<div>
							<h3>Transparence</h3>
							<p>Nous sommes déterminés à fournir un service de qualité exceptionnelle à nos utilisateurs, tout en restant à l'écoute de leurs besoins et de leurs préoccupations.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
					<div class="feature d-flex">
						<span class="bi-wallet-fill"></span>
						<div>
							<h3>Sécurité</h3>
							<p>La sécurité de vos informations personnelles, notre priorité</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
					<div class="feature d-flex">
						<span class="bi-pie-chart-fill"></span>
						<div>
							<h3>Confidentialité</h3>
							<p>
							Explorez notre site en toute tranquillité, sachant que vos données sont sécurisées et que votre vie privée est respectée à chaque étape de votre parcours.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div class="sectionp">
		<div class="container">
			
			<div class="row mb-5">
				<div class="col-lg-5 mx-auto text-center" data-aos="fade-up">
					<h2 class="heading text-primary">Notre équipe</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="0">
					<img src="{{ asset('/img/peop.jpg') }}" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
					<h5 class="text-black">Kra Kouakou Badou</h5>
					<p>DG </p>
				</div>
				<div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="100">
					<img src="{{ asset('/img/peop.jpg') }}" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
					<h5 class="text-black">Mr</h5>
					<p></p>
				</div>
				<div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="200">
					<img src="{{ asset('/img/peop.jpg') }}" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
					<h5 class="text-black">Mme</h5>
					<p></p>
				</div>
			</div>

		</div>
	</div>


@endsection