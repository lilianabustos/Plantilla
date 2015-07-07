<?php
require_once "crudUser.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agregar - Usuario</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

             <?php include_once "menu.php"; ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Editar Usuario
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Usuarios</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Editar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <?php if(empty($_GET['id'])){ ?>
                    <div class="alert alert-danger">
                        <strong>Error!</strong> No se encontro un usuario al que aplicar esta accion.
                    </div>
                <?php }else{ ?>

                <?php
                    $_SESSION['idUser'] = $_GET['id'];
                    $arrUser = getUser($_SESSION['idUser']);
                ?>
                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" id="frmUser" method="post" action="crudUser.php?action=update">
                            <div class="form-group">
                                <label>Usuario</label>
                                <input id="usuario" name="usuario" class="form-control" value="<?php echo $arrUser['usuario']; ?>" placeholder="usuario">
                                <p class="help-block">Usuario.</p>
                            </div>
                            <div class="form-group">
                                <label>Contrasena</label>
                                <input id="contrasena" name="contrasena" class="form-control" value="<?php echo $arrUser['contrasena']; ?>" placeholder="contrasena">
                                <p class="help-block">Contrasena.</p>
                            </div>
                             <div class="form-group">
                                <label>Nombre</label>
                                <input id="nombres" name="nombre" class="form-control" value="<?php echo $arrUser['nombre']; ?>" placeholder="nombre">
                                <p class="help-block">Nombres completos del usuario.</p>
                            </div>
                             <div class="form-group">
                                <label>Apellido Uno</label>
                                <input id="nombres" name="nombres" class="form-control" value="<?php echo $arrUser['Nombres']; ?>" placeholder="Nombres Usuario">
                                <p class="help-block">Primer Apellido del usuario.</p>
                            </div>
                             <div class="form-group">
                                <label>Apellido Dos</label>
                                <input id="apellidodos" name="apellidodos" class="form-control" value="<?php echo $arrUser['apellidodos']; ?>" placeholder="apellidodos">
                                <p class="help-block">Segundo Apellido del usuario.</p>
                            </div>

                            <div class="form-group">
                                <label>Titulo</label>
                                <input id="titulo" name="titulo" class="form-control" value="<?php echo $arrUser['titulo']; ?>" placeholder="titulo">
                                <p class="help-block">Titulo.</p>
                            </div>

                            <div class="form-group">
                                <label>Descripcion</label>
                                <input id="descripcion" name="descripcion" class="form-control" value="<?php echo $arrUser['descripcion']; ?>" placeholder="descripcion">
                                <p class="help-block">Descripcion.</p>
                            </div>

                            <div class="form-group">
                                <label>Foto</label>
                                <input id="foto" name="foto" class="form-control" value="<?php echo $arrUser['foto']; ?>" placeholder="foto">
                                <p class="help-block">Foto.</p>
                            </div>

                            <div class="form-group">
                                <label>Web Personal</label>
                                <input id="webpersonal" name="webpersonal" class="form-webpersonal" value="<?php echo $arrUser['webpersonal']; ?>" placeholder="webpersonal">
                                <p class="help-block">Web Personal.</p>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input id="foto" name="email" class="form-control" value="<?php echo $arrUser['email']; ?>" placeholder="email">
                                <p class="help-block">Email.</p>
                            </div>

                            

                            <button type="submit" class="btn btn-default">Enviar</button>
                            <button type="reset" class="btn btn-default">Limpiar</button>

                        </form>

                    </div>

                </div>

                <?php } ?>


                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
