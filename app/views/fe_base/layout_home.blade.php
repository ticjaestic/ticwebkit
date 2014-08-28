<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="@yield('metadescription')" />
<meta name="keywords" content="@yield("keywords")" />
<meta name="author" content="Jaestic, S.L." />
<!-- css -->
{{ HTML::style('app/views/fe_base/css/bootstrap.min.css') }}
{{ HTML::style('app/views/fe_base/css/jquery.fancybox.css') }}
<!-- TODO: Encontrar este CSS 

	<link href="css/jcarousel.css" rel="stylesheet" /> -->
{{ HTML::style('app/views/fe_base/css/flexslider.css') }}
{{ HTML::style('app/views/fe_base/css/style.css') }}

<!-- Theme skin -->
{{ HTML::style('app/views/fe_base/css/default.css') }}

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span>Abogado</span>en Reus</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active">{{ HTML::link(URL::to('/'), 'Inicio') }}</li>
                        <li>{{ HTML::link(URL::to('quienessomos'), 'Quiénes somos') }}</li>
                        <li>{{ HTML::link(URL::to('quehacemos'), 'Qué hacemos') }}</li>
                        <li>{{ HTML::link(URL::to('dondeestamos'), 'Dónde estamos') }}</li>
                        <li>{{ HTML::link(URL::to('contacto'), 'Contacto') }}</li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
              	{{ HTML::image('app/views/fe_base/img/slide1.jpeg', 'slide 1')}}
                <div class="flex-caption">
                    <h2>Abogado Derecho Civil</h2> 
					<p>Descubre nuestros servicios de Abogado en Derecho Civil</p> 
					{{ HTML::link(URL::to('quehacemos'),'Leer más', array("class" => "btn btn-theme")) }}
                </div>
              </li>
              <li>
                {{ HTML::image('app/views/fe_base/img/slide2.jpeg', 'slide 2')}}
                <div class="flex-caption">
                    <h2>Abogado Derecho Mercantil</h2> 
					<p>Descubre nuestros servicios de Abogado en Derecho Civil</p> 
					{{ HTML::link(URL::to('quehacemos'),'Leer más', array("class" => "btn btn-theme")) }}
                </div>
              </li>
              <li>
                {{ HTML::image('app/views/fe_base/img/slide3.jpeg', 'slide 3')}}
                <div class="flex-caption">
                    <h2>Abogado Derecho Matrimonial</h2> 
					<p>Descubre nuestros servicios de Abogado en Derecho Civil</p> 
					{{ HTML::link(URL::to('quehacemos'),'Leer más', array("class" => "btn btn-theme")) }}
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
						<h1><span>Abogado en Reus</span> | Especialistas en Derecho Civil</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h3 style="font-size:18px">Derecho Sanitario</h3>
								<div class="icon">
								<i class="fa fa-heart fa-3x"></i>
								</div>
								<p>
								 Descubre nuestros servicos de Derecho Sanitario
								</p>
									
							</div>
							<div class="box-bottom">
								{{ HTML::link(URL::to('quehacemos'),'Leer más') }}
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h3 style="font-size:18px">Responsabilidad Civil</h3>
								<div class="icon">
								<i class="fa fa-user fa-3x"></i>
								</div>
								<p>
								 Descubre nuestros servicos de Responsabilidad Civil
								</p>
									
							</div>
							<div class="box-bottom">
								{{ HTML::link(URL::to('quehacemos'),'Leer más') }}
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h3 style="font-size:18px">Accidentes de trabajo</h3>
								<div class="icon">
								<i class="fa fa-wrench fa-3x"></i>
								</div>
								<p>
								 Descubre nuestros servicos de Accidentes de trabajo
								</p>
									
							</div>
							<div class="box-bottom">
								{{ HTML::link(URL::to('quehacemos'),'Leer más') }}
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h3 style="font-size:18px">Accidentes de tráfico</h3>
								<div class="icon">
								<i class="fa fa-road fa-3x"></i>
								</div>
								<p>
								 Descubre nuestros servicos de Accidentes de tráfico
								</p>
									
							</div>
							<div class="box-bottom">
								{{ HTML::link(URL::to('quehacemos'),'Leer más') }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-6">
						<h4>@yield('title')</h4>
						<p>
							En Abogado en Reus tenemos una amplia experiencia en asesoramiento jurídico tanto a particulares como a empresas, contamos con 15 años de práctica en el ejercicio profesional.
						</p>
						<p>
							En nuestro bufete de Abogado en Reus nos anticipamos y resolvemos eficazmente los retos jurídicos de nuestros clientes.
						</p>
						<p>
							En Abogado en Reus  creemos en nuestros clientes. Ofrecemos servicios adaptados a su necesidades.
						</p>
						<p>
							Nos encontramos firmemente asentados en el sector abogados, proporcionando asesoramiento a corporaciones, a entidades y a particulares, desde sus Áreas Contenciosa, de Derecho Público, Laboral y de la Seguridad Social, Nuevas Tecnologías, Derecho Farmaceutico y Socio Sanitaria.
						</p>
					</div>
					<div class="col-lg-6">
						
				<h4>Contacta con nosotros sin compromiso</h4>
				<form id="contactform" action="#" method="post" class="validateform" name="send-contact">
					<div id="sendmessage">
						 Your message has been sent. Thank you!
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="name" placeholder="* Escriba su nombre completo" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="email" placeholder="* Escriba su e-mail" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="subject" placeholder="Escriba un asunto" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" class="input-block-level" placeholder="* Escriba su duda..." data-rule="required" data-msg="Please write something"></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">Enviar mensaje</button>
								<span class="pull-right margintop20">* Campos requeridos obligatoriamente</span>
							</p>
						</div>
					</div>
				</form>
			</div>
					</div>
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
	</div>
	</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Contacto</h5>
					<address>
					<strong>Camí Reial 13-17 3r piso</strong><br>
					 El Vendrell - 43700 Tarragona</address>
					<p>
						<i class="icon-phone"></i>Tel. 877 01 99 14<br>
						<i class="icon-envelope-alt"></i> comercial@yaestoy.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Mapa WEB</h5>
					<ul class="link-list">
						<li>{{ HTML::link(URL::to('quienessomos'), 'Quiénes somos') }}</li>
                        <li>{{ HTML::link(URL::to('quehacemos'), 'Qué hacemos') }}</li>
                        <li>{{ HTML::link(URL::to('dondeestamos'), 'Dónde estamos') }}</li>
                        <li>{{ HTML::link(URL::to('contacto'), 'Contacto') }}</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="widget">
					<h5 class="widgetheading">Situación</h5>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24034.158377643194!2d1.1071681000000002!3d41.150463849999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a150e4b86d9e5d%3A0x2e2190d249deced2!2sReus%2C+Tarragona!5e0!3m2!1ses!2ses!4v1409180974727" width="100%" height="200" frameborder="0" style="border:0"></iframe>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<a href="http://yaestoy.com" target="_blank"><span>&copy; Diseño web en Reus</span></a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{ HTML::script('app/views/fe_base/js/jquery.js') }}
{{ HTML::script('app/views/fe_base/js/jquery.easing.1.3.js') }}
{{ HTML::script('app/views/fe_base/js/bootstrap.min.js') }}
{{ HTML::script('app/views/fe_base/js/jquery.fancybox.pack.js') }}
{{ HTML::script('app/views/fe_base/js/jquery.fancybox-media.js') }}
{{ HTML::script('app/views/fe_base/js/google-code-prettify/prettify.js') }}
{{ HTML::script('app/views/fe_base/js/jquery.quicksand.js') }}
{{ HTML::script('app/views/fe_base/js/setting.js') }}
{{ HTML::script('app/views/fe_base/js/jquery.flexslider.js') }}
{{ HTML::script('app/views/fe_base/js/animate.js') }}
{{ HTML::script('app/views/fe_base/js/custom.js') }}

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54263262-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>