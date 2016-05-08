<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>SysPron - Seus remédios em suas mãos</title>
  <meta name="keywords" content="SysPron - Seus remédios em suas mãos" />
  <meta name="description" content="SysPron - Seus remédios em suas mãos">
  <meta name="author" content="SysPron">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">


  <!-- Start: Main -->
  <div id="main" class="animated fadeIn">

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- begin canvas animation bg -->
      <div id="canvas-wrapper">
        <canvas id="demo-canvas"></canvas>
      </div>
  </section>
      <!-- Begin: Content -->
      <section id="content" class="">

        <div class="admin-form theme-info mw700" style="margin-top: 3%;" id="login1">

          <div class="row mb15 table-layout">

            <div class="col-xs-6 va-m pln">
              <a href="http://www.syspron.com" title="Página principal do Syspron ">
                <img src="assets/img/logos/logo.png" title="Syspron Logo" class="img-responsive w250">
              </a>
            </div>

            <div class="col-xs-6 text-right va-b pr5">
              <div class="login-links">
                <a href="index.php" class="" title="Entrar">Entrar</a>
                <span class="text-white"> | </span>
                <a href="cadastrar.php" class="active" title="Cadastro">Cadastrar-se</a>
              </div>

            </div>

          </div>

          <div class="panel panel-info mt10 br-n">

            <div class=" heading-border bg-white">
              
            </div>

            <form method="post" action="cadastrar-usuario.php" id="account2">
              <div class="panel-body p25 bg-light">
                <div class="section-divider mt10 mb40">
                  <span>Crie sua conta abaixo</span>
                </div>
                <!-- .section-divider -->

        <input type="hidden" id=prontuario name=prontuario>
        

                 <div class="section row">
                  <div class="col-md-6">
                    <label for="nome" class="field prepend-icon">
                      <input type="text" id="nome" name="nome" placeholder="Nome" class="gui-input" required>
                      <label for="nome" class="field-icon">
                        <i class="fa fa-user"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                  <div class="col-md-6">
                    <label for="sobrenome" class="field prepend-icon">
                      <input type="text" name="sobrenome" id="sobrenome" class="gui-input" required placeholder="Sobrenome">
                      <label for="sobrenome" class="field-icon">
                        <i class="fa fa-user"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->
                </div>
                <!-- end .section row section -->

                 <div class="section row">
                <div class="col-md-6">
                    <label for="datanascimento" class="field prepend-icon">
                      <input type="datanascimento" id="date" name="datanascimento" placeholder="Data de Nascimento" class="gui-input" required>
                      <label for="datanascimento" class="field-icon">
                        <i class="fa fa-clock-o"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->
                </div>
                <!-- end .section row section -->
                 <div class="section row">
                <div class="col-md-6">
                 <label for="cpf" class="field prepend-icon">
                      <input type="text" id="cpf" name="cpf" placeholder="CPF" class="gui-input" required>
                      <label for="cpf" class="field-icon">
                        <i class="fa fa-file-o"></i>
            </label>
                    </label>
                  </div>
                  <!-- end section -->
                </div>
                <!-- end .section row section -->
                  <div class="section row">
                <div class="col-md-6">
                <div class="fields">
          <form id=edit_application>
            <div class="fields">
              <select class="usertype">
            <option value="doctor">Médico</option>
            <option value="patient">Paciente</option>
            <option value="pharmacist">Farmacêutico</option>
        </select>
        <div class="doctor">
           
                    <label for="crm" class="field prepend-icon">
                      <input type="text" id="crm" name="crm" placeholder="CRM" class="gui-input" required>
                      <label for="crm" class="field-icon">
                        <i class="fa fa-file-o"></i>
                      </label>
                    </label>
                  
        </div>
            
        <div class="pharmacist">
                    <label for="crf" class="field prepend-icon">
                      <input type="text" id="crf" name="crf" placeholder="CRF" class="gui-input" required>
                      <label for="crf" class="field-icon">
                        <i class="fa fa-file-o"></i>
                      </label>
                    </label>
                  </div>
                 </div>
                </div>
        </div>
    </div>
    

                  <div class="section row">
                  <div class="col-md-6">
                    <label for="nomeusuario" class="field prepend-icon">
                      <input type="text" id="nomeusuario" name="nomeusuario" placeholder="Nome de Usuário" class="gui-input" required>
                      <label for="nomeusuario" class="field-icon">
                        <i class="fa fa-user"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->
                  </div>

                <div class="section">
                  <label for="email" class="field prepend-icon">
                    <input type="email" name="email" id="email" placeholder="Email" class="gui-input" required>
                    <label for="email" class="field-icon">
                      <i class="fa fa-envelope"></i>
                    </label>
                  </label>
                </div>
                <!-- end section -->

                <div class="section">
                  <label for="senha" class="field prepend-icon">
                    <input type="senha" name="senha" id="password" class="gui-input" placeholder="Crie uma Senha">
                    <label for="senha" class="field-icon">
                      <i class="fa fa-unlock-alt"></i>
                    </label>
                  </label>
                </div>
                <!-- end section -->

                 <div class="section">
                  <label for="confirmeSenha" class="field prepend-icon">
                    <input type="senha" name="confirmeSenha" id="confirmeSenha" class="gui-input" placeholder="Confirmar a senha">
                    <label for="confirmeSenha" class="field-icon">
                      <i class="fa fa-lock"></i>
                    </label>
                  </label>
                </div>
                <!-- end section -->

                <div class="section-divider mv40">
                  <span>Aceite de Termos</span>
                </div>
                <!-- .section-divider -->

                <div class="section mb15">
                  <label class="option block">
                    <input type="checkbox" name="terms">
                    <span class="checkbox"></span>Eu concordo com os
                    <a href="#" class="theme-link"> Termos de Uso. </a>
                  </label>
                </div>
                <!-- end section -->

              </div>
              <!-- end .form-body section -->
              <div class="panel-footer clearfix">
                <button type="submit" class="button btn-primary pull-right">Criar Conta</button>
              </div>
              <!-- end .form-footer section -->
            </form>
          </div>
        </div>

      </section>
      <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

  </div>
  <!-- End: Main -->

  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- CanvasBG Plugin(creates mousehover effect) -->
  <script src="vendor/plugins/canvasbg/canvasbg.js"></script>

  <!-- Theme Javascript -->
  <script src="assets/js/utility/utility.js"></script>
  <script src="assets/js/demo/demo.js"></script>
  <script src="assets/js/main.js"></script>

  <!-- Page Javascript -->
  <script type="text/javascript">
  jQuery(document).ready(function() {
    "use strict";
    // Init Theme Core      
    Core.init();

    // Init Demo JS
    Demo.init();

    // Init CanvasBG and pass target starting location
    CanvasBG.init({
      Loc: {
        x: window.innerWidth / 2.1,
        y: window.innerHeight / 4.2
      },
    });
  });
  </script>

<script type="text/javascript">
  $(".pharmacist").hide();
$(".patient").hide();
$(".doctor").hide();

 $(function() {
  $(document).on('change','.usertype',function () {
       var OBJ = $(this).parent('div.fields')
          if($(this).val()=="pharmacist"){
              OBJ.find(".pharmacist").show();
              OBJ.find(".patient").hide();
              OBJ.find(".doctor").hide();
          }
          if($(this).val()=="doctor"){
              OBJ.find(".doctor").show();
              OBJ.find(".pharmacist").hide();
              OBJ.find(".patient").hide();
          }
          if($(this).val()=="patient"){
              OBJ.find(".pharmacist").hide();
              OBJ.find(".patient").show();
              OBJ.find(".doctor").hide();
          }
  }).change();
});
</script>

  <!-- END: PAGE SCRIPTS -->

</body>

</html>
