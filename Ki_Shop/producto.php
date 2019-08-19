<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KI SHOP</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/all.css"><!--FontAwesome-->
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
        
    <main class="container">
        <div class="row" id="results">hola :V</div>
    </main><!-- /.container -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/search-controller.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            generarPantalla();
        });
    </script>
</body>
</html>