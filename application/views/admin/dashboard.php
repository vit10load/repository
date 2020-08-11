<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>

  <script>
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


  <style type="text/css">
    .main-header, .content-wrapper {
      margin: 0 !important;
    }
    .nav-tela {
      width: 100% !important;
    }
    .nav-tela .item-1 {
      width: 90% !important;
    }
    .card .form-group input {
      padding-top: 30px;
      padding-bottom: 30px;
    }
    .card .form-group button {
      width: 100%;
      margin-bottom: -15px;
      text-transform: uppercase;
      font-weight: bold;
    }
    .sair {
      width: 100%;
    }

    .sair li {
      float: right;
      display: block !important;
      text-transform: uppercase;
    }

    @media screen and (max-width: 480px){
      .sair li {
        padding-left: 80px;
      }
    }

    .row .form-inline {
      width: 100%;
      padding-left: 5px;
      padding-bottom: 5px;
    }

    .row .form-inline input {
      width: 90%;
    }

    @media screen and (max-width: 480px){
     .row .form-inline input {
      width: 70%;
    }
  }

  .row .form-inline button {
    margin-left: 5px;
    border-radius: 15px;
    border-style: hidden;
  }

  .main-footer {
    margin-left: 0px !important;
  }

  /**progress bar**/
  .progress {

   position: fixed;
   left: 0px;
   top: 0px;
   width: 100%;
   height: 3px;
   z-index: 9999;
   background-color: #F2F2F2;
 }

 .bar { 
  background-color: #00FFFF; 
  width:0%; 
  height:3px; 
  border-radius: 3px; 
}

.percent { 
  position:absolute; 
  display:inline-block; 
  top:3px; 
  left:48%; 
}

.alert {
  width: 100%;
  margin: 4px !important;
}

.list {
  height: 200px;
}

.todo-list {
  overflow: scroll !important;
  width: 100%;
  height: 200px;
  margin-top: -20px;
}

.todo-list>li {

  display: flex !important;
  flex-direction: row !important;
  align-items: baseline !important;
  justify-content: space-between !important;
}

.todo-list>li:last-of-type {
  padding-top: 25px !important;
}

.todo-list>li .tools {
  display: flex !important;
  margin-top: -20px;
}

.todo-list>li .text {
  word-break: break-word !important;
}


</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <div class='progress' id="progress_div">
    <div class='bar' id='bar1'></div>
    <div class='percent' id='percent1'></div>
  </div>

  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <!-- Content Wrapper. Contains page content -->
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div><!-- /.container-fluid -->
      <!-- /.content-header -->

      <ul class="sair">
        <li class="nav-item d-none d-sm-inline-block">
          <a class="btn btn-default nav-link" href="<?php echo base_url().'user/logout'; ?>">Sair</a>
        </li>
      </ul>

    </nav>
    <!-- /.navbar -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

          <div class="col-lg-12">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Bem-vindo!</h3>

                <p><?=$this->session->userdata('user_email');?></p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

        </div>
        <!-- /.row -->
        <div class="row">
          <form class="form-inline" action="<?php echo base_url().'repository/search'; ?>" method="POST">
            <input class="form-control form-inline" placeholder="pesquisar repositórios" type="text" name="search" />
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
            <input type="hidden" name="type" value="dashboard" />
            <button class="btn btn-primary" type="submit">Pesquisar</button>
          </form>
          <?php 
          if ($this->session->flashdata('sucess_msg_repository')) {

            $success_msg_repository = $this->session->flashdata('sucess_msg_repository');

          }elseif ($this->session->flashdata('error_msg_repository')) {

            $error_msg_repository = $this->session->flashdata('error_msg_repository');
          }
          ?>

          <?php if (!empty($success_msg_repository)) {
            ?>
            <div class="alert alert-success">
              <?=$success_msg_repository; ?>
            </div>
            <?php   

          }elseif (!empty($error_msg_repository)) {  ?>
            <div class="alert alert-danger">
              <?=$error_msg_repository; ?>
            </div>
          <?php }

          ?> 

        </div>
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">

            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Novos Repositorios
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body list">
                <ul class="todo-list" data-widget="todo-list">
                  <?php 

                  if (isset($search)) {

                    $repo = $search;
                  }

                  if (!empty($repo)) {

                    foreach ($repo as $key) {
                      ?>
                      <li>
                        <!-- drag handle -->
                        <span class="handle">
                          <i class="fas fa-ellipsis-v"></i>
                          <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <!-- checkbox -->
                        <!-- todo text -->
                        <span class="text"><?=$key->region;?> <a href="#"><?=$key->link;?></a></span>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                          <form class="form-inline" action="<?=base_url().'admin/delete/'; ?>" method="POST">
                            <input type="hidden" name="id_repo" value="<?=$key->id_repository; ?>" />
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                            <button><i class="fas fa-trash"></i></button>
                          </form>
                          <form class="form-inline" action="<?=base_url().'admin/repository/'; ?>" method="POST">
                            <input type="hidden" name="id_repo" value="<?=$key->id_repository; ?>" />
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                            <button><i class="fas fa-edit"></i></button>
                          </form> 
                          <?php if (isset($error_msg) and $error_msg == 'Falha Na Operação!' ) {
                            ?>
                            <div class="alert alert-danger">
                              Erro ao cadastrar um novo repositório!
                            </div>
                            <?php   

                          }elseif (isset($success_msg) and $success_msg == 'Excluído com sucesso!') {  ?>
                            <div class="alert alert-success">
                              <?=$success_msg; ?>
                            </div>
                          <?php }

                          ?> 
                        </div>
                      </li>

                      <?php 
                    }

                  } 

                  ?>

                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <section class="col-lg-6">
            <div class="card">

              <?php
              if (isset($data_update)) {
                foreach ($data_update as $data) {
                 ?>
                 <!-- FORM CREATE REPOSITORY-->
                 <form class="form-group" action="<?php echo base_url().'admin/update'; ?>" method="POST">
                  <input type="hidden" name="id_repo" value="<?=$data->id_repository;?>">
                  <input class="form-control" type="text" placeholder="regiao do repositorio" name="region" value="<?=$data->region;?>">
                  <input class="form-control" type="text" placeholder="uma breve descrição" name="description" value="<?=$data->description;?>" />
                  <label>Estado escolhido é <?=$data->sigla; ?></label>
                  <select class="form-control" name="states">
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
                  <input class="form-control" type="text" name="link" placeholder="Informe o link" value="<?=$data->link;?>" />
                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                  <button class="btn btn-success" type="submit">Atualizar</button>
                  <?php 
                }
              }else { 

                ?>

                <form class="form-group" action="<?php echo base_url().'admin/create'; ?>" method="POST">
                  <input class="form-control" type="text" placeholder="regiao do repositorio" name="region">
                  <input class="form-control" type="text" placeholder="uma breve descrição" name="description" />
                  <label>Escolha uma região:</label>
                  <select class="form-control" name="states">
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
                  <input class="form-control" type="text" name="link" placeholder="Informe o link" />
                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                  <button class="btn btn-success" type="submit">Criar</button>
                <?php } ?>

              </form>
              <?php if (isset($error_msg)) {
                ?>
                <div class="alert alert-danger">
                  <?=$error_msg; ?>
                </div>
                <?php   

              }elseif (isset($success_msg)) {  ?>
                <div class="alert alert-success">
                  <?=$success_msg;?>
                </div>
              <?php }

              ?>
            </div>
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.4
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<input type="hidden" id="progress_width" value="0">

</body>
</html>
