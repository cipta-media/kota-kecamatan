<!DOCTYPE html>
<?php
    $koneksidb = new PDO('mysql:host=localhost;dbname=kota-kecamatan', 'root', 'lupalagi');
    if ($_POST) {
      $updatesql = "UPDATE pengguna
        SET
          nama = '{$_POST['nama']}',
          email = '{$_POST['email']}'
        WHERE id = '{$_POST['uid']}'";
      $koneksidb->exec($updatesql);
      header('Location: admin-user_daftar.php');
    }
    $sql = 'select * from pengguna where id = ' . $_GET['uid'];
    foreach ($koneksidb->query($sql) as $baris) {
      $email = $baris['email'];
      $nama = $baris['nama'];
    }
?> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="admin-user_ubah.php">
        <input type="hidden" name="uid" value="<?php echo $_GET['uid']; ?>">
        <h2 class="form-signin-heading">Register</h2>
        
	   <input type="text" name="nama" class="form-control" placeholder="Nama" autofocus value="<?php echo $nama; ?>"><br>
	   <input type="text" name="email" class="form-control" placeholder="Email address" autofocus value="<?php echo $email; ?>"><br>
	   <button class="btn btn-lg btn-primary btn-block" type="submit">Simpan</button>
      </form>
  </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
