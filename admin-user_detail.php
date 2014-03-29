<?php  
require_once('konfigurasi.php');
$sql = 'select * from pengguna where id = ' . $_GET['uid'];
foreach ($koneksidb->query($sql) as $baris) {
    $id = $_GET['uid'];
    $username = $baris['username'];
    $email = $baris['email'];
    $nama = $baris['nama'];
    $alamat = $baris['alamat'];
    $remote_ip = $baris['remote_ip'];
    $kode = $baris['kode_konfirmasi'];
    $aktif = $baris['aktif'];
    $pass = $baris['password'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Detail <?php echo $username; ?></title>

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
	        <input type="hidden" name="uid" value="<?php echo $_GET['uid']; ?>">
	       <h2 class="form-signin-heading">Detail <?php echo $username; ?></h2>

		   <input type="text" name="username" class="form-control" autofocus value="<?php echo $username; ?>"><br>
		   <input type="text" name="email" class="form-control" autofocus value="<?php echo $email; ?>"><br>
		   <input type="text" name="nama" class="form-control" autofocus value="<?php echo $nama; ?>"><br>
		   <input type="text" name="alamat" class="form-control" autofocus value="<?php echo $alamat; ?>"><br>
		   <input type="text" name="remote_ip" class="form-control" autofocus value="<?php echo $remote_ip; ?>"><br>
		   <input type="text" name="kode" class="form-control" autofocus value="<?php echo $kode; ?>"><br>
		   <input type="text" name="aktif" class="form-control" autofocus value="<?php echo $aktif; ?>"><br>
		   <input type="text" name="password" class="form-control" autofocus value="<?php echo $pass; ?>"><br>
  </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>