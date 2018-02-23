<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JH-tools | Login </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <style>


  </style>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content"></br></br>
              <form action="" method="post">
                <h1>Entrar</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" required="" name="user" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Senha" required="" name="senha"/>
              </div>
              <div>
                  <input class="btn btn-default submit" type="submit" value=" Entrar">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Novo Aqui?
                  <a href="#signup" class="to_register"> Cadastre-se </a>
                </p>

                <div class="clearfix"></div>
                <br />

            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">

            <form action="cadastrar.php" method="post">

              <h1>Criar uma Conta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Usuario" required="" name="user" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" name="email"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Senha" required="" name="senha" />
              </div>
              <div>
                <input class="btn btn-default submit" type="submit" value=" Cadastrar">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Ja possui uma conta ?
                  <a href="#signin" class="to_register"> Entrar </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

<div style = "width:25%;margin:auto;text-align:center;">
<?php
require 'Classes/configBD.php';
require 'Classes/cadastrarClass.php';

if (isset($_POST["user"]) && isset($_POST["senha"]) ) {

  $login = $_POST["user"];
  $senha = $_POST["senha"];

  $bd = new BancoDeDados($host, $dbname,$dbuser, $dbpass);
  $bd->Logar($login,$senha);

}

?>
</div>
