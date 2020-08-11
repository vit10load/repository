<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Repository</title>
  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Child Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>

  <script>

    document.onreadystatechange = function(e)
    {

      if(document.readyState == "interactive") {


        <?php 

        $success_msg = $this->session->flashdata('success_msg');

        $sucess_msg_repository = $this->session->flashdata('sucess_msg_repository');

        $error_msg_login = $this->session->flashdata('error_msg_login');

        $error_msg = $this->session->flashdata('error_msg');

        $error_msg_repository = $this->session->flashdata('error_msg_repository');

        if (isset($error_msg) || isset($error_msg_login) || isset($error_msg_repository)) {
          ?>

          $("#bar1").css("background-color","#ff0000");

        <?php } ?>

        var all = document.getElementsByTagName("*");

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

        var prog_width = per_inc+Number(document.getElementById("progress_width").value);

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
  <!-- //google fonts -->
  
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
              <li class=""><a class="btn" href="#ancora-repository">Repositórios</a></li>
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
                          <h3 class="b-w3ltxt text-capitalize mt-md-4">Confira os repositorios</h3>
                          <h4 class="b-w3ltxt text-capitalize mt-md-2">Estude para um futuro melhor</h4>
                          <p class="w3ls_pvt-title my-3">Este é site institucional sem fins lucrativos com intuito de incentivar a leitura dos melhores acervos do país</p>
                          <a href="#about" class="btn btn-banner my-3">Leia Mais</a>
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
                    <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
                     <h5 class="mb-3">Entre na sua conta</h5>
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
                    <?php }elseif (isset($error_msg_login)) {

                     ?>
                     <div class="alert alert-danger">
                      Senha ou e-mail inválidos
                    </div>
                  <?php  } ?>
                  <div class="form-style-w3ls">
                   <input class="form-control" placeholder="Enter E-mail" name="user_email" type="email" autofocus>
                   <input class="form-control" placeholder="Enter Password" name="user_password" type="password" value="">
                   <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />

                   <button class="btn" type="submit">Entrar</button>
                 </div>
               </form>
               <center><b> Não tem cadastro? </b> <br></b><a href="<?php echo base_url('user/signup'); ?>">Registre-se aqui</a></center>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- //banner -->
 <!-- services -->
 <section class="services py-5" id="services">
  <div class="container">
    <h3 class="heading mb-5">Nossos serviços</h3>
    <div class="row ml-sm-5">
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="our-services-wrapper mb-60">
          <div class="services-inner">
            <div class="our-services-img">
              <img src="<?php echo base_url(); ?>images/s1.png" alt="">
            </div>
            <div class="our-services-text">
              <h4>Qualidade na Educação</h4>
              <p>Todos serviços nos acervos são realizados com muito cuidado e destreza</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="our-services-wrapper mb-60">
          <div class="services-inner">
            <div class="our-services-img">
              <img src="<?php echo base_url(); ?>images/s2.png" alt="">
            </div>
            <div class="our-services-text">
              <h4>Recomendaçoes de professores</h4>
              <p>Professores recomendam acervos para suas turmas</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="our-services-wrapper mb-60">
          <div class="services-inner">
            <div class="our-services-img">
              <img src="<?php echo base_url(); ?>images/s3.png" alt="">
            </div>
            <div class="our-services-text">
              <h4>Salas de aula</h4>
              <p>Neste sistema as turmas da instituição terão acesso ao conjunto de acervos</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="our-services-wrapper mb-60">
          <div class="services-inner">
            <div class="our-services-img">
              <img src="<?php echo base_url(); ?>images/s4.png" alt="">
            </div>
            <div class="our-services-text">
              <h4>Principais acervos são cadastrados aqui</h4>
              <p>Informações na palma da mão são gerenciadas aqui</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="our-services-wrapper mb-60">
          <div class="services-inner">
            <div class="our-services-img">
              <img src="<?php echo base_url(); ?>images/s5.png" alt="">
            </div>
            <div class="our-services-text">
              <h4>Bibliotecário cadastra links diversos</h4>
              <p>Aqui concentra-se todos os links dos principais repositórios do país.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="our-services-wrapper mb-60">
          <div class="services-inner">
            <div class="our-services-img">
              <img src="<?php echo base_url(); ?>images/s6.png" alt="">
            </div>
            <div class="our-services-text">
              <h4>Aqui tem acesso aos principais trabalhos de conclusão de concurso local</h4>
              <p>TCC em detaque está aqui</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- positioned image -->
    <div class="position-image">
      <img src="<?php echo base_url(); ?>images/services.png" alt="" class="img-fluid">
    </div>
    <!-- //positioned image -->
    
  </div>
</section>
<!-- //services -->

<a name="#ancora-repository" href="#" id="ancora-repository"></a>
<section class="other_services py-5" id="why">
  <div class="container py-lg-5 py-3">
    <h3 class="heading mb-sm-5 mb-4">Repositórios</h3>

    <?php 
    if (isset($sucess_msg_repository)) {
      ?>

      <div class="alert alert-success">
        <?=$sucess_msg_repository; ?>
      </div>

      <?php 
    }elseif(isset($error_msg_repository)){
      ?>

      <div class="alert alert-danger">
        <?=$error_msg_repository; ?>
      </div>

    <?php } ?>

    <div class="row">
      <form class="search" action="<?php echo base_url().'repository/search/#ancora-repository'; ?>" method="POST">
        <input type="text" name="search" placeholder="digite aqui sua pesquisa" required />
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
        <label>Filtrar Por Região:</label>
        <select name="states">
          <option value="">Escolha uma região:</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>
        <label>Por Truncamento:</label>
        <select name="truncate">
          <option value="AND">AND</option>
          <option value="OR">OR</option>
          <option value="NOT">NOT</option>
        </select>
        <input class="input-truncate" type="text" name="truncate-text" value="" placeholder="palavra de truncamento" required />
        <button class="btn btn-primary" type="submit">Pesquisar</button>
      </form>
    </div>

    <div class="row">

      <?php if (!empty($search)) {

        foreach ($search as $key) {
         ?>

         <div class="col-lg-4 col-md-6">
          <div class="grid">
            <div class="info p-4">
              <h4 class=""><?=$key->region; ?></h4>
              <p class="mt-3"><a class="btn acervo" href="<?=$key->link; ?>"><?=$key->link; ?></a></p>
            </div>
          </div>
        </div>

        <?php 
      }

    }elseif(!empty($repository)) {

      foreach ($repository as $key) {

        ?>

        <div class="col-lg-4 col-md-6">
          <div class="grid">
            <div class="info p-4">
              <h4 class=""><?=$key->region; ?></h4>
              <p class="mt-3"><a class="btn acervo" href="<?=$key->link; ?>"><?=$key->link; ?></a></p>
            </div>
          </div>
        </div>

        <?php 

      }

    } 

    ?>

  </div>
</div>
</section>


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
          <a href="#"><img src="<?=base_url(); ?>images/s2.png" alt=""></a>
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
        <li><a href="#find" class="">Repositórios</a></li>
        <li><a href="#testi" class="">Depoimentos</a></li>
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
<div class="move-top text-right">
  <a href="#home" class="move-top"> 
    <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
  </a>
</div>
<!-- move top -->

<input type="hidden" id="progress_width" value="0">

</body>
</html>
