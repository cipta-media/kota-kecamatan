<?php
require_once('konfigurasi.php');

$sql = 'select * from pengguna order by email asc' ;
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
  	<link href="css/font-awesome.min.css" rel="stylesheet">

     <!-- Custom styles for this template -->


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
                  <th>Username</th>
                  <th>Email</th>
                  <th>Nama</th>
                  <th>Aktif</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
<?php
foreach($koneksidb->query($sql) as $baris) {
?>
                <tr>
                  <td><!-- loop --></td>
                  <td><?php echo $baris['username'] ?></td>
                  <td><?php echo $baris['email'] ?></td>
                  <td><?php echo $baris['nama'] ?></td>
                  <td><?php echo $baris['aktif'] ?></td>
                  <td><a href="admin-user_ubah.php?uid=<?php print $baris['id']; ?>"><i class="fa fa-pencil"></i></a>
                  <a href="admin-user_hapus.php?uid=<?php print $baris['id']; ?>"><i class="fa fa-eraser"></i></a>
                  <a href="admin-user_detail.php?uid=<?php print $baris['id']; ?>"><i class="fa fa-list-alt"></i></a></td>
                </tr>
<?php
}
?>
              </tbody>
            </table>
          </div>

  </body>
</html>

