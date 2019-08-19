<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KI SHOP</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/all.css"><!--FontAwesome-->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/main.css">
    <!--<link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">-->
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light navbar-main fixed-top">
        <a class="navbar-brand" href="./index.php">
            <img src="img/logo.png" height="30" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="ml-auto my-auto d-inline w-100">
				<div class="input-group">
			    	<input type="text" class="form-control" placeholder="Search">
			    	<span class="input-group-append">
			       		<button class="btn btn-orange text-white" type="submit"><i class="fas fa-search"></i></button>
			       </span>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
                <a href="./index.php" class="btn btn-orange my-2 my-sm-0 text-white">Logout</a>
            </form>
  </div>
</nav>
        
    <main class="content">
        <div class="container-fluid">
            <div class="row">
                <nav aria-label="breadcrumb" class="col-12">
                    <ol class="breadcrumb float-right">
                        <div class="btn-group btn-group-sm" role="group">
                            <button type="button" class="btn btn-orange text-white" onclick="mostrarModal('producto')">
                                <i class="far fa-plus-square"></i> Product
                            </button>
                            <button type="button" class="btn text-white" onclick="mostrarModal('promocion')" style="background-color: #FF9B21;">
                                <i class="far fa-plus-square"></i> Promotions
                            </button>
                            <button type="button" class="btn btn-orange text-white" onclick="mostrarModal('sucursal')">
                                <i class="far fa-plus-square"></i> Branch office
                            </button>
                        </div>
                    </ol>
                </nav>
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Ratings</h4>
                            <p class="card-category">Percentage of Stars By Products</p>
                        </div>
                        <div class="card-body ">
                            <div id="chartStars" class="ct-chart ct-perfect-fourth"></div>
                            <div class="legend">
                                <i class="fa fa-circle" style="color: #AAC3BD"></i> 1 Star
                                <i class="fa fa-circle" style="color: #F3F67C"></i> 2 Stars
                                <i class="fa fa-circle" style="color: #FFCC51"></i> 3 Stars
                                <i class="fa fa-circle" style="color: #FF9B21"></i> 4 Stars
                                <i class="fa fa-circle" style="color: #ED6801"></i> 5 Stars
                            </div>
                            <hr>
                            <div class="stats">
                                <i class="fa fa-history"></i> Update 18/08/2019
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">Sales Per Day</h4>
                            <p class="card-category">Last 15 Days</p>
                        </div>
                        <div class="card-body ">
                            <div id="chartSales" class="ct-chart"></div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="far fa-clock"></i> From 03/08/2019 To 18/08/2019
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">New Followers</h4>
                            <p class="card-category">2019</p>
                        </div>
                        <div class="card-body ">
                            <div id="chartFollowers" class="ct-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card  card-tasks">
                        <div class="card-header ">
                            <h4 class="card-title">Last Comments</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-full-width">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                USUARIO 1
                                            </td>
                                            <td>COMENTARIO</td>
                                            <td>Producto w</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                USUARIO 2
                                            </td>
                                            <td>COMENTARIO</td>
                                            <td>Producto x</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                USUARIO 3
                                            </td>
                                            <td>COMENTARIO</td>
                                            <td>Producto y</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                USUARIO 4
                                            </td>
                                            <td>COMENTARIO</td>
                                            <td>Producto z</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    </main>

    <div class="modal" tabindex="-1" role="dialog" id="modal"></div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controlador.js"></script>
    <script src="js/plugins/chartist.min.js"></script>
    <script src="js/dashboard-controller.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            demo.initDashboardPageCharts();
        });
    </script>
</body>
</html>