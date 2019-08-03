<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $titulo;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="images/favicon.ico" />
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>minoral/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>minoral/css/animate.min.css">


    <link href="<?php echo base_url(); ?>minoral/css/minoral.css" rel="stylesheet">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>minoral/js/bootstrap.min.js"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&amp;skin=sons-of-obsidian"></script>
    <script src="<?php echo base_url(); ?>minoral/js/plugins/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url(); ?>minoral/js/plugins/blockui/jquery.blockUI.js"></script>

     


    <script src="<?php echo base_url(); ?>minoral/js/minoral.min.js"></script>

    <script>
    $(function(){
      

    })
      
    </script>

   
  </head>
  <body class="darkgrey-scheme">


    <!-- Wrap all page content here -->
    <div id="wrap">

      


      <!-- Make page fluid -->
      <div class="row">
        




        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
          


          <!-- Branding -->
          <div class="navbar-header col-md-2">
            <a class="navbar-brand" href="index.html">
              <strong>SGI</strong> <span class="divider vertical"></span> Dashboard
            </a>
            <div class="sidebar-collapse">
              <a href="#">
                <i class="fa fa-bars"></i>
              </a>
            </div>
          </div>
          <!-- Branding end -->


          <!-- .nav-collapse -->
          <div class="navbar-collapse">
            

            

            <!-- Content collapsing at 768px to sidebar -->
            <div class="collapsing-content">




              <!-- Quick Actions -->
              <ul class="nav navbar-nav">
                <li class="divided">
                  <a href="#" class="page-refresh"><i class="fa fa-refresh"></i></a>
                  <span class="divider vertical"></span>
                </li>
                
                <li class="dropdown quick-action tasks">
                  <a class="dropdown-toggle button" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks"></i>
                    <span class="overlay-label green">5</span>
                  </a>
                  <ul class="dropdown-menu wide arrow green nopadding">
                    <li><h1>You have <strong>5</strong> new tasks</h1></li>
                    <li>
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">Layout</div>
                          <div class="percent">80%</div>
                        </div>
                        <div class="progress progress-striped progress-thin">
                          <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">40% Complete (success)</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">Schemes</div>
                          <div class="percent">15%</div>
                        </div>
                        <div class="progress progress-striped active progress-thin">
                          <div class="progress-bar progress-bar-cyan" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
                            <span class="sr-only">45% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">Forms</div>
                          <div class="percent">5%</div>
                        </div>
                        <div class="progress progress-striped progress-thin">
                          <div class="progress-bar progress-bar-orange" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                            <span class="sr-only">5% Complete (warning)</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">JavaScript</div>
                          <div class="percent">30%</div>
                        </div>
                        <div class="progress progress-striped progress-thin">
                          <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                            <span class="sr-only">30% Complete (danger)</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="task-info">
                          <div class="desc">Dropdowns</div>
                          <div class="percent">60%</div>
                        </div>
                        <div class="progress progress-striped progress-thin">
                          <div class="progress-bar progress-bar-amethyst" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li><a href="#">Check all tasks <i class="fa fa-angle-right"></i></a></li>
                  </ul>
                </li>

                <li class="dropdown quick-action notifications">
                  <a class="dropdown-toggle button" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>
                    <span class="overlay-label orange">12</span>
                  </a>
                  <ul class="dropdown-menu wide arrow orange nopadding">
                    <li><h1>You have <strong>12</strong> new notifications</h1></li>

                    <li>
                      <a href="#">
                        <span class="label label-green"><i class="fa fa-user"></i></span>
                        New user registered.
                        <span class="small">18 mins</span>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <span class="label label-red"><i class="fa fa-power-off"></i></span>
                        Server down.
                        <span class="small">27 mins</span>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <span class="label label-orange"><i class="fa fa-plus"></i></span>
                        New order.
                        <span class="small">36 mins</span>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <span class="label label-cyan"><i class="fa fa-power-off"></i></span>
                        Server restared.
                        <span class="small">45 mins</span>
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <span class="label label-amethyst"><i class="fa fa-power-off"></i></span>
                        Server started.
                        <span class="small">50 mins</span>
                      </a>
                    </li>

                     <li><a href="#">Check all notifications <i class="fa fa-angle-right"></i></a></li>
                  </ul>
                </li>

              </ul>
              <!-- Quick Actions end -->

              <!-- Search -->
              <div class="search">
                <input type="text" placeholder="&#61442; Buscar usuario...">
              </div>
              <!-- Search end -->

              <!-- User Controls -->
              <div class="user-controls">
                <ul>

                 
                  <li class="dropdown messages">
                    <a href="<?php echo base_url();?>UsuariosController/perfilAdmin">
                      <span class="badge badge-red" id="user-new-messages">3</span> <strong> <?php echo $username?></strong> <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="profile-photo">
                      <img src="<?php base_url()?>/uploads/" alt />
                    </div>
 

                  <li class="dropdown settings">
                    <a class="dropdown-toggle options" data-toggle="dropdown" href="#">
                      <i class="fa fa-cog"></i>
                    </a>
                    
                    <ul class="dropdown-menu arrow">

                      <li>
                        <h3>Color schemes:</h3>
                        <ul id="color-schemes">
                          <li><a href="#" class="brownish-scheme" title="Brownish"></a></li>
                          <li><a href="#" class="darkgrey-scheme" title="Dark Grey"></a></li>
                          <li><a href="#" class="lightgrey-scheme" title="Light Grey"></a></li>
                          <li><a href="#" class="cyan-scheme" title="Cyan"></a></li>
                          <li><a href="#" class="red-scheme" title="Red"></a></li>
                          <li><a href="#" class="orange-scheme" title="Orange"></a></li>
                          <li><a href="#" class="green-scheme" title="Green"></a></li>
                          <li><a href="#" class="amethyst-scheme" title="Amethyst"></a></li>
                        </ul>
                      </li>

                      <li class="divider"></li>

                      <li>
                        <a href="#"><i class="fa fa-user"></i> Profile</a>
                      </li>

                      <li>
                        <a href="#"><i class="fa fa-calendar"></i> Calendar</a>
                      </li>

                      <li>
                        <a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge badge-red" id="user-inbox">3</span></a>
                      </li>

                      <li class="divider"></li>

                      <li>
                        <a href="<?php echo base_url()?>/Acceso/salir"><i class="fa fa-power-off"></i> Logout</a>
                      </li>
                    </ul>
                  </li>

                </ul>
              </div>
              <!-- User Controls end -->

            



            </div>
            <!-- /Content collapsing at 768px to sidebar -->



            <!-- Sidebar -->
            <ul class="nav navbar-nav side-nav" id="navigation">
              <li class="collapsed-content">
                <!-- Collapsed content pasting here at 768px -->
              </li>
              <li class="user-status status-online" id="user-status">
                <div class="profile-photo">
                  <img src="<?php echo base_url();?>uploads/<?php echo $datos->foto; ?>" alt="Sin foto de perfil" height="60"/>
                </div>
                <div class="user">
                   <strong><?php echo $username?></strong>
                  <span class="role"><?php echo $nivel?></span>
                  <div class="status">
                    <ul>
                      <li class="dropdown change-status">
                        <a class="dropdown-toggle my-status" data-toggle="dropdown" href="#">Online</a>
                        
                        <ul class="dropdown-menu arrow">
                          <li>
                            <a href="#" id="status-online" data-status="status-online">Online</a>
                          </li>

                          <li>
                            <a href="#" id="status-away" data-status="status-away">Away</a>
                          </li>

                          <li>
                            <a href="#" id="status-invisible" data-status="status-invisible">Invisible</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    
                  </div>
                </div>
              </li>
              <li>
                    <a href="<?php echo base_url();?>UsuariosController/listarUsuarios" title="Listar usuarios">
                      <i class="fas fa-users"><span class="overlay-label red80"></span></i>
                      Listar usuarios
                    </a>
                  </li>
              <li>
                    <a href="<?php echo base_url();?>UsuariosController/nuevoUsuario" title="Agregar usuario">
                      <i class="fa fa-user-plus"><span class="overlay-label red80"></span></i>
                      Agregar usuario
                    </a>
                  </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Editar usuario">
                  <i class="fa fa-user-cog">
                    <span class="overlay-label green"></span>
                  </i>
                  Editar usuario <b class=" dropdown-arrow"></b>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="form-elements.html" title="Common Elements">
                      <i class="fa fa-key"><span class="overlay-label green80"></span></i>
                       Actualizar contraseña
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>UsuariosController/cambiarCorreo" title="Validation">
                      <i class="fa fa-at"><span class="overlay-label green60"></span></i>
                      Actualizar correo electrónico
                    </a>
                  </li>
                  <li>
                    <a href="form-wizard.html"  title="Form Wizard">
                      <i class="fa fa-address-card"><span class="overlay-label green40"></span></i>
                      Actualizar datos personales
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                    <a href="<?php echo base_url();?>Acceso/salir" title="Cerrar sesion">
                      <i class="fas fa-users"><span class="overlay-label red80"></span></i>
                      Cerrar sesion
                    </a>
                  </li>   
            </ul>
            <!-- Sidebar end -->





          </div>
          <!--/.nav-collapse -->





        </div>
        <!-- Fixed navbar end -->
        




        
        <!-- Page content -->
        <div id="content" class="col-md-12">
          

    
          