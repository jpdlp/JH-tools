<?php
session_start();

  if (empty($_SESSION["login"])) {
    header("Location: login.php");
  }

?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JH-tools | IPinfo</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">


  </head>

  <style>
    .card-text{
    margin:20px;
    text-align: center;
    padding-bottom: 30px;
  }

  input{
    text-align: center;
    border: 0;
    border-bottom: 1px solid grey;
    outline: 0;
  }
  input:hover{
    text-align: center;
    border: 0;
    border-bottom: 1px solid blue;
    outline: 0;
  }
  table  {

    text-align: center;
    width: 100%;
  }
  .thead-light{
    margin: -50px;
  }


  </style>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
               <a href="index.php" class="site_title"><i class="fa fa-desktop"></i> <span>JH-tools</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem Vindo,</span>
                <h2><?php echo $_SESSION["login"]; ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Geral</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="ipinfo.php">IP INFO</a></li>
                      <li><a href="traceroute.php">TRACEROUTE</a></li>
                      <!-- <li><a href="portscanner.php">PORT SCANNER</a></li> -->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-group"></i> Gerenciamento <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="gerUser.php">Gerenciar Usuarios</a></li>
                    </ul>
                  </li>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt=""><?php echo $_SESSION["login"]; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Configuracoes</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Ajuda</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>Sair</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>Administrador</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Bem vindo ao JH-tools
                        </span>
                      </a>
                    </li>

                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Veja todas Notificacoes</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Inicio</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>IP-INFO</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <script>

                          function pegarDados(){
                            $('#result').show("slow");
                            let ip = document.querySelector('#ip').value
                            let ipAddr = 'http://ip-api.com/json/' + ip

                            fetch(ipAddr)
                            .then(resposta => resposta.json())
                            .then(function(dados){

                             document.querySelector('.ipR').innerHTML = dados.query
                             document.querySelector('.empR').innerHTML = dados.org
                             document.querySelector('.regiaoR').innerHTML = dados.regionName
                             document.querySelector('.cidadeR').innerHTML = dados.city
                             document.querySelector('.paisR').innerHTML = dados.country

                          })
                        }

                        </script>
                          <div class="container" style="margin-left:20%;">
                            <div class="row justify-content-center">
                              <div class="card col-md-6">
                                <div class="card-header">
                                </div>
                              <div class="card-block">
                                <p class="card-text">
                                <input type="text" id="ip" placeholder="8.8.8.8"><br><br>
                                <button type="button" class="btn btn-primary " onclick="pegarDados()">Consultar</button>
                                </p>
                              </div>
                            </div>
                          </div>

                          <div class="row justify-content-center">
                            <div class="card col-md-6" id="result">

                              <table class="table">
                                <tr>
                                  <thead class="thead-light">
                                  <th>IP-Addres</th>
                                  <th>Organizacao</th>
                                  <th>Regiao</th>
                                  <th>Cidade</th>
                                  <th>Pais</th>
                                  <thead>
                                </tr>
                                <tr>
                                  <td class="ipR"></td>
                                  <td class="empR"></td>
                                  <td class="regiaoR"></td>
                                  <td class="cidadeR"></td>
                                  <td class="paisR"></td>
                                </tr>
                              </table>
                              </p>
                            </div>
                          </div>
                        </div>
                        </div>

                        <script>
                         $('#result').hide();
                        </script>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
