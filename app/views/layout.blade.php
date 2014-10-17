<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Bibliotecas - Universidad Bicentenaria de Aragua</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="images/ubalogo.png">
        <style>
            body {
                padding-top: 70px;
            }
            #buscador
            {
            	top:30px;
            	margin-left: 68%;
            	position: relative;
            	width: 100px;
            }
            #searcher
            {
            	font-size:16px; 
            	height: 24px;
            	width: 250px;
            }
            button
            {
            	height: 26px;
            	width: 100px;
            }
        </style>
        {{ HTML::style('css/stailos.css') }}
        {{ HTML::style('css/normalize.css') }}
		{{ HTML::style('css/main.css') }}
        {{ HTML::style('css/customstyle.css') }}
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<!-- Load fonts -->
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Pacifico|Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body id="skrollr-body">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		<!-- Master Header -->
		<header id="master-header">
			<div id="master-header-bg">
				<div class="pricing-spec">
					<div style="height:2px;">
						&nbsp;
					</div>
				</div>
			<div id="master-header-wrap">
				<!-- Logo -->
				<div id="logo">
					<h1>
						<a href="{{ URL::to('inico')}}">
							<img src="{{ URL::to('images/uba.png') }}" height="93" width="351" margin-top:"2px">
						</a>
						<span class="title-custom">Portal de Bibliotecas Virtuales</span>
					</h1>
				</div>
				<!--  or, for logo image: <div id="logo"><a href="index.html"><img src="images/universidades/css/img/MicroPrism.png" alt="" /></a></div> -->
				<!-- ..Logo -->
				<!-- Navi -->
				<div id="buscador">
					{{Form::open(array('url' => 'busqueda', 'method' => 'get'))}}
						<input type="text" id="searcher" name="searcher">
						<button>Enviar</button>
						<datalist id="searcher">
						</datalist>
					{{Form::close()}}
				</div>
				<nav id="master-nav">
					<ul>
						<li class="dropdown active hassubmenu"><a href="{{ URL::to('inico')}}">Inicio</a></li>
					</ul>
				</nav>
				<!-- ..Navi -->
				<!-- Mobile Button -->
				<a href="#" id="mobile-switch"><span class="icon-menu"></span></a>
				<!-- ..Mobile Button -->
			</div>
			</div>
		</header>
		<!-- ..Master Header -->
		<!-- Section - Breadcrumbs -->
		<section class="breadcrumbs">
			
			<div class="container">

				<div class="row">
					<div class="span12">
							<a href="#"></a> / 
							<a href="#"></a> / 
							<a href="#"></a>
					</div>
				</div>
			</div>	
		</section>
		<!-- Section -->
		
		<!-- Section -->
		@yield('content')
		<section class="bg-two bg-map padding-half">
			<div class="container">
				<div class="row">
					<div class="span12 prevent-overflow">
						<div class="cta">
							<div class="cta-text">
								<div align="center">
									<h3>
										Páginas a Nivel Mundial a su Disposición
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</section>
		<!--/. Section -->
		<!-- Footer -->
		<footer id="master-footer">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="span4">
						<h3 class="widget-title">Sitios de Interés
						</h3>
							<div class="tagcloud">
								<a href="http://uba-extension.com">Dirección de Extensión</a>
								<a href="http://aulavirtual.uba.edu.ve">Aula Virtual</a>
								<a href="http://blog.uba.edu.ve">Blog</a>
								<a href="http://secretariauba.net.ve">Zona del Estudiante</a>
							</div>
					</div>
					<div class="span4">
						<h3 class="widget-title">Dirección
						</h3>
							<address class="icon icon-location">
							Av. Intercomunal Santiago Mariño c/c Av. Universidad. 
							<br/>
							 Sector la Providencia. Zona Postal 2115. 
							<br/>
							 Municipio Santiago Mariño, Turmero. Edo. Aragua. Venezuela. 
							</address>
					</div>
					<div class="span4">
						<h3 class="widget-title">Contacto
						</h3>
							<p class="icon icon-envelop">
								<strong class="colored">E-mail:</strong>
							<a href="info@uba.edu.ve">info@uba.edu.ve
							</a>
							</p>
							<p class="icon icon-phone">
								<strong class="colored">Línea Gratuita:</strong>  0.500.UBA.0000
								<br/>
								<strong class="colored">Máster:</strong>  +58 243.265.00.11
								<br/>
								<strong class="colored">Fax:</strong>  +58 243.265.00.01
							</p>
					</div>
				</div>
			</div> <!--/. Container -->
		</footer>
		<!--/. Footer -->
		<!-- Copyrights -->
		<div id="copyrights">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="pie-pag">
						<p>Copyright © 2014 - Universidad Bicentenaria de Aragua. Todos los derechos reservados.
							<br>
								Sitio desarrollado por:  
							<a href="http://ingenium-dv.com/">Ingenium: Desarrollo Virtual</a></p>
					</div>
				</div>
			</div> <!--/. Container -->
		</div>
		<!--/. Copyrights -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{URL::to('js/vendor/jquery-1.10.1.min.js') }}"><\/script>')</script>

        {{ HTML::script('http://static.uba.edu.ve/js/plugins/jquery.flexslider-min.js') }}
        {{ HTML::script('http://static.uba.edu.ve/js/plugins/jquery.hoverIntent.minified.js') }}
        {{ HTML::script('http://static.uba.edu.ve/js/plugins/jquery.imagesLoaded.min.js') }}
        {{ HTML::script('http://static.uba.edu.ve/js/plugins/jquery.isotope.min.js') }}
        {{ HTML::script('http://static.uba.edu.ve/js/plugins/twitter-min.js') }}
        {{ HTML::script('http://static.uba.edu.ve/js/plugins/sscr-min.js') }}
        {{ HTML::script('http://static.uba.edu.ve/js/plugins/skrollr-min.js') }}
		{{ HTML::script('http://static.uba.edu.ve/js/plugins/easing-min.js') }}
		{{ HTML::script('http://static.uba.edu.ve/js/plugins/Chart.min.js') }}
        {{ HTML::script('http://static.uba.edu.ve/js/main-min.js') }}
        {{ HTML::script('http://static.uba.edu.ve/js/plugins/jquery.prettyPhoto.js') }}
        {{ HTML::script('http://static.uba.edu.ve/js/custom.js') }}
        {{ HTML::script('js/efecto.js') }}

    </body>
</html>