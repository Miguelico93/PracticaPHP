<?php
// including the database connection file
include_once("config.php");

// fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT producto.nombre AS nombre_producto, producto.codigo AS codigo_producto, producto.precio AS precio_producto, fabricante.nombre AS nombre_fabricante, fabricante.codigo AS codigo_fabricante, producto.imagen FROM producto INNER JOIN fabricante ON producto.codigo_fabricante=fabricante.codigo ORDER BY producto.codigo DESC");
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Proyecto IAW</title>

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
      <strong>Proyecto IAW</strong>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg> -->
        <strong><a href= "login.php">LOGIN</a></strong>
      </a>
    </div>
  </div>
</header>

<main role="main">

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
      <?php
	      while($res = mysqli_fetch_array($result)) {
      ?>
      <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" width='100%' height='225' src="<?php echo $res['imagen']; ?>">
            <div class="card-body">
              <p class="card-text"><?php echo utf8_encode($res['nombre_producto']); ?></p>
              <p class="card-text"><?php echo $res['precio_producto']; ?>€</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="view_productos.php?codigo=<?php echo $res['codigo_producto'];?>" class="btn btn-sm btn-outline-secondary">Ver</a>
                
                </div>
                <small class="text-muted"><?php echo $res['nombre_fabricante']; ?></small>
              </div>
            </div>
          </div>
        </div>
      
      <?php  
      }

	      mysqli_close($msqli);
	    ?>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.3/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
