<?php

if ($_POST) {
    if ($_POST['email'] != '') {
        $koneksidb = new PDO('mysql:host=localhost;dbname=kota-kecamatan', 'root', 'SpiD3r');

        $query = "INSERT INTO pengguna (email) VALUES ('{$_POST['email']}')";
        $koneksidb->exec($query);

        $berhasil = "Registrasi berhasil dilakukan. Email {$_POST['email']} berhasil disimpan di database";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" action="daftar.php" method="post">
        <h2 class="form-signin-heading">Registrasi</h2>
        <input type="email" class="form-control" placeholder="Email address" required autofocus>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>

      <?php if ($berhasil != '') echo $berhasil; ?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
