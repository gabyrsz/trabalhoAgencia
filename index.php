<?php include 'header.php';?>

<!doctype html>
<html class="no-js" lang="en">

    <head>

		
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>CVT</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="images/faviconcvt.ico"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

		<!--flaticon.css-->
        <link rel="stylesheet" href="assets/css/flaticon.css">

		<!--slick.css-->
        <link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/slick-theme.css">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">

		<link rel="stylesheet" href="assets/css/estilo.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
	
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		<!--header-top start -->
		<header id="header-top" class="header-top">
			<ul>
				<li>
					<div class="header-top-left">
						<ul>
							
							<li class="select-opt">
								<a href="#"><span class="lnr lnr-magnifier"></span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="head-responsive-right pull-right">
					<div class="header-top-right">
						<ul>
							<li class="header-top-contact">
								+55 31975319937
							</li>
							<li class="header-top-contact">
								<a href="login.html">Entrar</a>
							</li>
							<li class="header-top-contact">
								<a href="login.html">Registrar</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
					
		</header><!--/.header-top-->
		<!--header-top end -->

		<!-- top-area Start -->
		<section class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a href="index.html"><img src="img/logo.png" class="logoprincipal"></a>

			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li class=" scroll active"><a href="#home">Home</a></li>
			                    <li class="scroll"><a href="#explore">Explorar</a></li>
			                    <li class="scroll"><a href="#blog">Promoções</a></li>
			                    <li class="scroll"><a href="#contact">Contatos</a></li>
			                </ul><!--/.nav -->
			            </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

		</section><!-- /.top-area-->
		<!-- top-area End -->

		<!--welcome-hero start -->
	<!--welcome-hero start -->
<section id="home" class="welcome-hero">
    <div class="container">
        <div class="welcome-hero-txt">
            <h2>Conectando você ao turismo<br> VENHA CONOSCO</h2>
            <p>
                Encontre o melhor lugar, restaurante, hotel, imóveis e muito mais, torne sua viagem inesquecível
            </p>
        </div>
        <div class="welcome-hero-serch-box">
            <div class="welcome-hero-form">
                <!-- Formulário de pesquisa "O que?" -->
                <div class="single-welcome-hero-form">
                    <h3>O que?</h3>
                    <form action="https://www.google.com/search" method="get" target="_blank">
                        <input type="text" name="q" placeholder="Ex: cidades, estados, países" />
                        <div class="welcome-hero-form-icon">
                            <i class="flaticon-list-with-dots"></i>
                        </div>
                    </form>
                </div>
                <!-- Formulário de pesquisa "Lugares" -->
                <div class="single-welcome-hero-form">
                    <h3>Lugares</h3>
                    <form action="https://www.google.com/maps/search/" method="get" target="_blank">
                        <input type="text" name="q" placeholder="Ex: parques, clubes, praias" />
                        <div class="welcome-hero-form-icon">
                            <!-- Ícone de GPS para redirecionar ao Google Maps -->
                            <button type="submit">
                                <i class="flaticon-gps-fixed-indicator"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Botão de pesquisa -->
            <div class="welcome-hero-serch">
                <button class="welcome-hero-btn" onclick="document.querySelector('form').submit()">
                    Pesquisar  <i data-feather="search"></i>
                </button>
            </div>
        </div>
    </div>
</section><!--/.welcome-hero-->
<!--welcome-hero end -->



		<!--list-topics start -->
		<section id="list-topics" class="list-topics">
			<div class="container">
				<div class="list-topics-content">
					<ul>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<a href="https://guide.michelin.com/br/pt_BR/sao-paulo-region/sao-paulo/restaurant/borgo-mooca" target="_blank">
										<i class="flaticon-restaurant"></i>
									</a>
									
								</div>
								<h2><a href="https://guide.michelin.com/br/pt_BR/sao-paulo-region/sao-paulo/restaurant/borgo-mooca" target="_blank">Restaurantes</a></h2>
								<p>150 opções</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<a href="https://quantocustaviajar.com/" target="_blank">
									<i class="flaticon-travel"></i>
									</a>
								</div>
								<h2><a href="https://quantocustaviajar.com/" target="_blank">Destino</a></h2>
								<p>214 opções</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<a href="https://www.hoteis.com/de160256-st5/hoteis-cinco-estrelas-sao-paulo-brasil/" target="_blank">
									<i class="flaticon-building"></i>
									</a>
								</div>
								<h2><a href="https://www.hoteis.com/de160256-st5/hoteis-cinco-estrelas-sao-paulo-brasil/" target="_blank">Hotéis</a></h2>
								<p>185 opções</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<a href="https://www.redeinovadrogarias.com.br/pbm" target="_blank">
									<i class="flaticon-pills"></i>
									</a>
								</div>
								<h2><a href="https://www.redeinovadrogarias.com.br/pbm" target="_blank">Farmácias</a></h2>
								<p>200 opções</p>
							</div>
						</li>
						<li>
							<div class="single-list-topics-content">
								<div class="single-list-topics-icon">
									<a href="https://www.aluguefoco.com.br/" target="_blank">
									<i class="flaticon-transport"></i>
									</a>
								</div>
								<h2><a href="https://www.aluguefoco.com.br/" target="_blank">Automóveis</a></h2>
								<p>120 opções</p>
							</div>
						</li>
					</ul>
				</div>
			</div><!--/.container-->

		</section><!--/.list-topics-->
		<!--list-topics end-->

		<!--works start -->
		<section id="works" class="works">
			<div class="container">
				<div class="section-header">
					<h2>Como funciona</h2>
					<p>Saiba mais sobre como nosso site funciona</p>
				</div><!--/.section-header-->
				<div class="works-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-lightbulb-idea"></i>
								</div>
								<h2><a href="#">Países <span> em</span> alta</a></h2>
								<p>Explore novas oportunidades em países que estão ganhando destaque globalmente. Destinos como Japão e México estão cada vez mais em alta.</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									Saiba mais
								</button>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-networking"></i>
								</div>
								<h2><a href="#">Encontre <span>o que você quer</span></a></h2>
								<p>
									Encontre tudo o que você procura com facilidade e praticidade. Descubra opções incríveis para tornar sua experiência única e inesquecível.. 
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									Saiba mais
								</button>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-how-works">
								<div class="single-how-works-icon">
									<i class="flaticon-location-on-road"></i>
								</div>
								<h2><a href="#">Explore <span> um lugar </span> incrível</a></h2>
								<p>
									Explore lugares incríveis e descubra culturas fascinantes ao redor do mundo. Destinos como Itália, Grécia e Austrália são imperdíveis.
								</p>
								<button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
									Saiba mais
								</button>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.works-->
		<!--works end -->

		<!--explore start -->
		<section id="explore" class="explore">
			<div class="container">
				<div class="section-header">
					<h2>Explorar</h2>
					<p>Explore novos lugares, comidas, culturas ao redor do mundo e muito mais</p>
				</div><!--/.section-header-->
				<div class="explore-content">
					<div class="row">
						<div class=" col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="img/alasca.png" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">Recente</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-1">
									<h2><a href="#">Alasca</a></h2>
									<p class="explore-rating-price">
										<span class="explore-rating">5.0</span>
										<a href="#"> 1009 acessos</a> 
										<span class="explore-price-box">
											
											<span class="explore-price">2300$-8999$</span>
										</span>
										 <a href="#">Passeio</a>
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-2">
												<div class="explore-person-img">
													<a href="#">
														
													</a>
												</div>
											</div>
											<div class="col-sm-10">
												<p>
													O Alasca oferece paisagens incríveis, com geleiras, montanhas e uma vida selvagem, atraindo aventureiros de todo o mundo</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn" onclick="window.open('/alasca.html')">ver agora</button>
											</div>
											<div class="col-sm-7">
												<div class="explore-map-icon">
													<a href="#"><i data-feather="map-pin"></i></a>
													<a href="#"><i data-feather="upload"></i></a>
													<a href="#"><i data-feather="heart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/explore/e2.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">Recente</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-2">
									<h2><a href="#">Resort Caribe </a></h2>
									<p class="explore-rating-price">
										<span class="explore-rating">4.5</span>
										<a href="#"> 8022 acessos</a> 
										<span class="explore-price-box">
											
											<span class="explore-price">1400$-6500$</span>
										</span>
										 <a href="#">hotel</a>
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-2">
												<div class="explore-person-img">
													<a href="#">
														
													</a>
												</div>
											</div>
											<div class="col-sm-10">
												<p>
													Os resorts no Caribe oferecem luxo, praias paradisíacas, serviços all-inclusive e atividades para todos.
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn open-btn" onclick="window.open('/resortcaribe.html')">Vizualizado agora</button>
											</div>
											<div class="col-sm-7">
												<div class="explore-map-icon">
													<a href="#"><i data-feather="map-pin"></i></a>
													<a href="#"><i data-feather="upload"></i></a>
													<a href="#"><i data-feather="heart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/explore/e3.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">Recente</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-3">
									<h2><a href="#">Tour na Euroupa</a></h2>
									<p class="explore-rating-price">
										<span class="explore-rating">5.0</span>
										<a href="#"> 3000 acessos</a> 
										<span class="explore-price-box">
											
											<span class="explore-price">2200$-4700$</span>
										</span>
										 <a href="#">Passeio</a>
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-2">
												<div class="explore-person-img">
													<a href="#">
														
													</a>
												</div>
											</div>
											<div class="col-sm-10">
												<p>
													Um tour pela Europa oferece cultura, história e paisagens deslumbrantes, passando por cidades icônicas.
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn" onclick="window.open('/toureuropa.html')">Ver agora</button>
											</div>
											<div class="col-sm-7">
												<div class="explore-map-icon">
													<a href="#"><i data-feather="map-pin"></i></a>
													<a href="#"><i data-feather="upload"></i></a>
													<a href="#"><i data-feather="heart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class=" col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/explore/e4.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">Recente</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-4">
									<h2><a href="#">Veneza</a></h2>
									<p class="explore-rating-price">
										<span class="explore-rating">5.0</span>
										<a href="#"> 2869 acessos</a> 
										<span class="explore-price-box">
											
											<span class="explore-price">3000$-4899$</span>
										</span>
										 <a href="#">Hotel</a>
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-2">
												<div class="explore-person-img">
													<a href="#">
														
													</a>
												</div>
											</div>
											<div class="col-sm-10">
												<p>
													Veneza é uma cidade encantadora, famosa por seus canais românticos e arquitetura única. Com suas ruas de água, como o Canal Grande, e marcos históricos.
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn" onclick="window.open('/veneza.html')">Ver agora</button>
											</div>
											<div class="col-sm-7">
												<div class="explore-map-icon">
													<a href=""><i data-feather="map-pin"></i></a>
													<a href="#"><i data-feather="upload"></i></a>
													<a href="#"><i data-feather="heart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="img/suecia.png" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">Recente</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-2">
									<h2><a href="#">Suécia</a></h2>
									<p class="explore-rating-price">
										<span class="explore-rating">4.2</span>
										<a href="#"> 12990  acessos</a> 
										<span class="explore-price-box">
											
											<span class="explore-price">5000-7300</span>
										</span>
										 <a href="#">Passeio</a>
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-2">
												<div class="explore-person-img">
													<a href="#">
														
													</a>
												</div>
											</div>
											<div class="col-sm-10">
												<p>
													A Suécia é um destino incrível, onde a natureza deslumbrante se encontra com uma rica cultura e inovação e suas cidades vibrantes
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn open-btn" onclick="window.open('/suecia.html')">Vizualizado agora</button>
											</div>
											<div class="col-sm-7">
												<div class="explore-map-icon">
													<a href="#"><i data-feather="map-pin"></i></a>
													<a href="#"><i data-feather="upload"></i></a>
													<a href="#"><i data-feather="heart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-explore-item">
								<div class="single-explore-img">
									<img src="assets/images/explore/e6.jpg" alt="explore image">
									<div class="single-explore-img-info">
										<button onclick="window.location.href='#'">Recente</button>
										<div class="single-explore-image-icon-box">
											<ul>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-arrows-alt"></i>
													</div>
												</li>
												<li>
													<div class="single-explore-image-icon">
														<i class="fa fa-bookmark-o"></i>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="single-explore-txt bg-theme-5">
									<h2><a href="#">Tailândia Tour</a></h2>
									<p class="explore-rating-price">
										<span class="explore-rating">5.0</span>
										<a href="#"> 15401 acessos</a> 
										<span class="explore-price-box">
											<span class="explore-price">3300$-10000$</span>
										</span>
										 <a href="#">passeio</a>
									</p>
									<div class="explore-person">
										<div class="row">
											<div class="col-sm-2">
												<div class="explore-person-img">
													<a href="#">
														
													</a>
												</div>
											</div>
											<div class="col-sm-10">
												<p>

													A Tailândia é um destino exótico, onde praias paradisíacas se encontram com uma rica tradição cultural, com templos deslumbrantes e incríveis ilhas tropicais.
												</p>
											</div>
										</div>
									</div>
									<div class="explore-open-close-part">
										<div class="row">
											<div class="col-sm-5">
												<button class="close-btn" onclick="window.open('/tourtailandia.html')">ver agora</button>
											</div>
											<div class="col-sm-7">
												<div class="explore-map-icon">
													<a href="#"><i data-feather="map-pin"></i></a>
													<a href="#"><i data-feather="upload"></i></a>
													<a href="#"><i data-feather="heart"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.explore-->
		<!--explore end -->

		<!--reviews start -->
		<section id="reviews" class="reviews">
			<div class="section-header">
				<h2>Avaliações de clientes</h2>
				<p>O que nossos clientes dizem sobre nós</p>
			</div><!--/.section-header-->
			<div class="reviews-content">
				<div class="testimonial-carousel">
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c1.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Frederico Assis</h2>
									<h4>São Paulo</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Viajei com eles e fiquei impressionado com o nível de organização e cuidado. Cada detalhe foi pensado para tornar a viagem inesquecível. Não poderia pedir mais!
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c2.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Morgan Ferreira</h2>
									<h4>Londres</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Eu confiaria de olhos fechados. A equipe é super competente e cuidadosa, o que me fez relaxar e aproveitar a viagem sem preocupações!
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c3.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Dima Azevedo</h2>
									<h4>Bahia</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									A melhor agência de viagens que já usei! Profissionais atenciosos, sempre prontos para ajudar e garantir que tudo corra bem. Minha viagem foi incrível
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c4.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Julio Cesar</h2>
									<h4>Madri</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Eu nunca tinha viajado com tanta tranquilidade! O atendimento foi impecável e os roteiros são feitos sob medida, não poderia ser melhor
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c1.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Carlos Silva</h2>
									<h4>Minas Gerais</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Adorei minha experiência com essa agência! Eles cuidaram de todos os detalhes e a viagem foi perfeita, do começo ao fim. Super recomendo!
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c2.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Márcio Silva</h2>
									<h4>Santos</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Fui surpreendido pela qualidade e pelo cuidado que a agência teve com todos os detalhes da minha viagem. Não precisei me preocupar com nada e pude aproveitar ao máximo. Uma experiência inesquecível
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c3.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Luan Menezes</h2>
									<h4>Rio de Janeiro</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Excelente! A agência cuidou de tudo com um nível de organização e dedicação impressionantes. Viagem sem stress, só diversão e muito conforto. Adorei e com certeza vou viajar com eles novamente
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c4.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Tomas Souza</h2>
									<h4>Havaí</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Foi uma viagem dos sonhos! A agência cuidou de cada passo, me proporcionando uma experiência sem igual. Todo o processo foi transparente, e a equipe sempre esteve disponível para esclarecer dúvidas. Super recomendo!
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				</div>
			</div>

		</section><!--/.reviews-->
		<!--reviews end -->

		<!-- statistics strat -->
		<section id="statistics"  class="statistics">
			<div class="container">
				<div class="statistics-counter"> 
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">90 </div> <span>K+</span>
							</div><!--/.statistics-content-->
							<h3>Listagens</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">40</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>Categorias de listagem</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">65</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>Visitantes</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
					<div class="col-md-3 col-sm-6">
						<div class="single-ststistics-box">
							<div class="statistics-content">
								<div class="counter">50</div> <span>k+</span>
							</div><!--/.statistics-content-->
							<h3>Clientes felizes</h3>
						</div><!--/.single-ststistics-box-->
					</div><!--/.col-->
				</div><!--/.statistics-counter-->	
			</div><!--/.container-->

		</section><!--/.counter-->	
		<!-- statistics end -->

		<!--blog start -->
		<section id="blog" class="blog" >
			<div class="container">
				<div class="section-header">
					<h2>Promoções</h2>
					<p>Sempre atualizado com nossas últimas ofertas</p>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="img/paris.png" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#">Paris</a></h2>
									<h4>Preço: R$ 5.999,00 -</a> Março 2025</h4>
									<p>
										Visite monumentos icônicos como a Torre Eiffel, o Louvre e a Catedral de Notre-Dame. Explore os bairros charmosos, as lojas de luxo e saboreie a gastronomia francesa em um dos cafés mais famosos do mundo.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="img/maldivas.png" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#">Maldivas</a></h2>
									<h4>Preço: R$ 7.499,00 - </a> Julho 2025</h4>
									<p>
										Uma ilha paradisíaca com praias de areia branca e águas cristalinas. As Maldivas são o destino perfeito para relaxar em resorts de luxo, fazer snorkel e explorar a vida marinha. Ideal para casais em lua de mel ou quem busca tranquilidade.
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="single-blog-item">
								<div class="single-blog-item-img">
									<img src="img/toquio.png" alt="blog image">
								</div>
								<div class="single-blog-item-txt">
									<h2><a href="#">Tóquio</a></h2>
									<h4></a> Preço: R$ 6.899,00 - </a> Outubro 2025</h4>
									<p>
										Mergulhe na cultura de Tóquio, uma das cidades mais futuristas do mundo. Explore templos antigos, mercados tradicionais, arranha-céus impressionantes e a incrível culinária japonesa, famosa por sua qualidade e diversidade.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
			
		</section><!--/.blog-->
		<!--blog end -->

		<!--subscription strat -->
		<section id="contact"  class="subscription">
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						Você tem alguma sugestão de lugar?
					</h2>
					<p>
						Fale conosco para negociar pacotes exclusivos e descobrir novos destinos fascinantes. Estamos aqui para criar a viagem perfeita para você!
					</p>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="subscription-input-group">
							<form action="#">
								<input type="email" class="subscription-input-form" placeholder="Digite seu email">
								<button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
									criar conta
								</button>
							</form>
						</div>
					</div>	
				</div>
			</div>

		</section><!--/subscription-->	
		<!--subscription end -->

		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-3">
			           		 <div class="navbar-header">
				                <a class="navbar-brand" href="index.html">C<span>V</span>T</a>
				            </div><!--/.navbar-header-->
			           	</div>
			           	<div class="col-sm-9">
			           		<ul class="footer-menu-item">
			                    <li class="scroll"><a href="#works">Como funciona</a></li>
			                    <li class="scroll"><a href="#explore">Explorar</a></li>>
			                    <li class="scroll"><a href="#contact">Contato</a></li>
			                    <li class=" scroll"><a href="#contact">Minha conta</a></li>
			                </ul><!--/.nav -->
			           	</div>
		           </div>
				</div>
				<div class="hm-footer-copyright">
					<div class="row">
						<div class="col-sm-5">
							<p>
								&copy;copyright. Conectando você ao turismo <a href="https://www.cvt.com/"> CVT</a>
							</p><!--/p-->
						</div>
						<div class="col-sm-7">
							<div class="footer-social">
								<span><i class="fa fa-phone"> +55 31975319937</i></span>
								<a href="#"><i class="fa fa-facebook"></i></a>	
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
					
				</div><!--/.hm-footer-copyright-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="assets/js/slick.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>