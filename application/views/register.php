<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Repositorio</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Child Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>

	<script>

		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

		document.onreadystatechange = function(e)
		{
			if(document.readyState == "interactive") {

				var all = document.getElementsByTagName("*");


				<?php 

				$success_msg = $this->session->flashdata('success_msg');

				$error_msg = $this->session->flashdata('error_msg');

				if (isset($error_msg)) {
					?>

					$("#bar1").css("background-color","#ff0000");

				<?php } ?>

				for (var i=0, max=all.length; i < max; i++) {

					set_elemento(all[i]);

				}
			}
		}

		function verificar_elemento(ele)
		{
			var all = document.getElementsByTagName("*");

			var totalele=all.length;

			var per_inc=100/all.length;

			if($(ele).on()) {

				var prog_width=per_inc+Number(document.getElementById("progress_width").value);

				document.getElementById("progress_width").value = prog_width;


				$("#bar1").animate({width:prog_width+"%"},10,function(){


					if(document.getElementById("bar1").style.width=="100%") {

						$(".progress").fadeOut("slow");

					}

				});

			} else  {

				set_elemento(ele);

			}
		}

		function set_elemento(elemento) {

			verificar_elemento(elemento);

		}
	</script>

	<!-- css files -->
	<link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
	<link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	
</head>
<body>

	<div class='progress' id="progress_div">
		<div class='bar' id='bar1'></div>
		<div class='percent' id='percent1'></div>
	</div>

	<!-- header -->
	<header>
		<div class="top-head container">
			<div class="ml-auto text-right right-p">
				<ul>
					<li class="mr-3">
						<span class="fa fa-clock-o"></span> <?php echo date('d/m/Y'); ?></li>
						<li>
							<span class="fa fa-envelope-open"></span> <a href="mailto:info@example.com">repository.application01@gmail.com</a> </li>
						</ul>
					</div>
				</div>
				<div class="container">
					<!-- nav -->
					<nav class="py-3 d-lg-flex">
						<div id="logo">
							<h1> <a href="#"><img src="<?=base_url(); ?>images/s2.png" alt=""></a></h1>
						</div>
						<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
						<input type="checkbox" id="drop" />
						<ul class="menu ml-auto mt-1">
							<li class="active"><a class="btn" href="#">Inicio</a></li>
							<li class=""><a class="btn" href="#services">Serviços</a></li>
							<li class=""><a class="btn" href="<?php echo base_url(); ?>#ancora-repository">Repositórios</a></li>
							<!--<li class=""><a class="btn" href="">Inscreva-se</a></li>-->
						</ul>
					</nav>
					<!-- //nav -->
				</div>
			</header>
			<!-- //header -->

			<!-- banner -->
			<div class="banner" id="home">
				<div class="layer">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 banner-text-w3pvt">
								<!-- banner slider-->
								<div class="csslider infinity" id="slider1">
									<ul class="banner_slide_bg">
										<li>
											<div class="container-fluid">
												<div class="w3ls_banner_txt">
													<h3 class="b-w3ltxt text-capitalize mt-md-4">Confira os repositórios</h3>
													<h4 class="b-w3ltxt text-capitalize mt-md-2">Estude para um futuro melhor</h4>
													<p class="w3ls_pvt-title my-3">Sistema institucional sem fins lucrativos com intuito de incentivar a leitura dos melhores repositórios do país</p>
													<a href="<?=base_url().'user/sigin#find'; ?>" class="btn btn-banner my-3">Confira</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- //banner slider-->
							</div>
							<div class="col-lg-5 col-md-8 px-lg-3 px-0">
								<div class="banner-form-w3 ml-lg-5">
									<div class="padding">
										<!-- banner form -->
										<form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
											<h5 class="mb-3">Registre-se agora mesmo</h5>
											<?php if (isset($error_msg)) {
												?>
												<div class="alert alert-danger">
													Erro ao cadastrar um novo usuário!
												</div>
												<?php 	

											}elseif (isset($success_msg)) {  ?>
												<div class="alert alert-success">
													Usuário cadastrado com sucesso!
												</div>
											<?php } ?>
											<div class="form-style-w3ls">
												<input  placeholder="nome de usuario" name="user_name" type="text" autofocus>

												<input  placeholder="usuario de e-mail" name="user_email" type="email" autofocus>

												<input placeholder="senha de até 8 caracteres" name="user_password" type="password" value="">

												<input placeholder="confirmar senha digitada" name="user_password_confirm" type="password" value="">

												<input  placeholder="entre com sua idade" name="user_age" type="text" value="">

												<input  placeholder="contato de telefone" name="user_mobile" type="text" value="">

												<select name="user_type">
													<option value="biblioteca">Bibliotecario</option>
													<option value="professor">Professor</option>
												</select>

												<input placeholder="código de cadastro" name="codigo" type="password" value="">
												
												<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />

												<button class="btn" type="submit" >Criar</button>
											</div>

										</form>
										<center><b>Já tem cadastro?</b> <br></b><a href="<?php echo base_url('user/sigin'); ?>"> Entrar </a></center><!--for centered text-->
										<!-- //banner form -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //banner -->

			
			<!-- subscribe -->
			<section class="subscribe" id="subscribe">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-5 d-flex subscribe-left p-sm-5 py-4">
							<div class="image mr-3">
								<img src="<?php echo base_url(); ?>images/mail.png" alt="" class="img-fluid">
							</div>
							<div class="text">
								<h3>Assine a nossa newsletter</h3>
							</div>
						</div>
						<div class="col-lg-7 subscribe-right p-sm-5 py-3">
							<form action="#" method="post">
								<input type="email" name="email" placeholder="entre com seu e-mail aqui" required="">
								<button class="btn1"><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
							</form>
							<p>nunca compartilhamos seu email com mais ninguém</p>
						</div>
					</div>
				</div>
			</section>
			<!-- //subscribe -->

			<!-- footer -->
			<footer>
				<div class="footer-layer py-sm-5 pt-5 pb-3">
					<div class="container py-md-3">
						<div class="footer-grid_section text-center">
							<div class="footer-title mb-3">
								<a href="#"><img src="<?php echo base_url(); ?>images/s2.png" alt=""></a>
							</div>
							<div class="footer-text">
								<p>Site de repositórios com inúmeros links de acervos com diversos trabalhos com variadas áreas de pesquisa, Aqui voçe pode cadastrar seu usuário e desfrutar dos serviços oferecidos.</p>
							</div>
							<ul class="social_section_1info">
								<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
								<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
								<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
								<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
								<li class="pinterest"><a href="#"><span class="fa fa-pinterest"></span></a></li>
								<li class="vimeo"><a href="#"><span class="fa fa-vimeo"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- //footer -->

			<!-- copyright -->
			<section class="copyright">
				<div class="container py-4">
					<div class="row bottom">
						<ul class="col-lg-6 links p-0">
							<li><a href="#why" class="">Porque escolher agente!</a></li>
							<li><a href="#services" class="">Serviços</a></li>
							<li><a href="#team" class="">Professores</a></li>
						</ul>
						<div class="col-lg-6 copy-right p-0">
							<p class="">© 2020 Repositorios. Todos os direitos reservados 
							</p>
						</div>
					</div>
				</div>
			</section>
			<!-- //copyright -->

			<!-- move top -->
<!--<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>-->
<!-- move top -->
<input type="hidden" id="progress_width" value="0">

</body>
</html>