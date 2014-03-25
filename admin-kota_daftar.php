<?php
require_once('konfigurasi.php');

$sql = 'select * from kota order by nama asc' ;
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

    <title>Daftar Kota yg ada di Indonesia</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  	<link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


   <body>
<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Kota</th>
                  <th>Dibuat pada</th>
		  <th>Diubah pada</th>
                </tr>
              </thead>
              <tbody>
<?php
foreach($koneksidb->query($sql) as $baris) {
?>
                <tr>
                  <td></td>
                  <td><?php echo $baris['nama'] ?></td>
                  <td><?php echo $baris['dibuat_pada'] ?></td>
                  <td><?php echo $baris['diubah_pada'] ?></td>
                  <td><a href="admin-kota_ubah.php?uid=<?php print $baris['id']; ?>"><i class="fa fa-pencil"></i></a></td>
                </tr>
<?php
}
?>
              </tbody>
            </table>
          </div>

  </body>
</html>