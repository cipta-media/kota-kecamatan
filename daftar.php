<?php

require_once('konfigurasi.php');

$message = '';

if ($_POST) {
    if ($_POST['email'] != '') {
        
        $username = $_POST['username'];
        $sth = $koneksidb->prepare("SELECT * FROM pengguna WHERE username='$username'");
        $sth->execute();
        $baris = $sth->rowCount(); //untuk mendapatkan jumlah baris hasil query

        if ($baris > 0) { 
            
            /*
            *   jika jumlah baris yang username nya dari $_POST lebih
            *   tampilkan pesan bahwa username telah digunakan/ada
            *
            */
            echo "username sudah digunakan silahkan coba yang lain."; 
            exit;

        } else {

            $ip = $_SERVER["REMOTE_ADDR"];
            $email = $_POST['email'];
            $kode = md5(rand());
            $query = "INSERT INTO `pengguna` (`nama`, `username`, `password`, `email`, `alamat`, `remote_ip`, `kode_konfirmasi`) VALUES ('{$_POST['nama']}', '{$_POST['username']}', '{$_POST['password']}', '$email', '{$_POST['alamat']}', '$ip', '$kode')";
            $koneksidb->exec($query);

            $body             = "<!DOCTYPE html>
                                    <html>
                                    <head>
                                        <title>Aktifkan akun anda!</title>
                                    </head>
                                    <body>
                                        <div class='container'>
                        
                                          <div class='jumbotron'>
                                            <h1>Aktifkan akun anda!</h1>
                                            <p class='lead'>Hi $username, Tinggal satu langkah lagi anda melengkapi pendaftaran ini.!</p>
                                            <p><a class='btn btn-lg btn-success' href='$url/konfirmasi_user.php?kode=$kode' role='button'>Aktifkan Sekarang!</a></p>
                                          </div>
                        
                                          <div class='footer'>
                                            <p>&copy; Kota Kecamatan 2014</p>
                                          </div>
                        
                                        </div> <!-- /container -->
                                      </body>
                                    </html>";

            $mail->IsSMTP(); 
            $mail->Host       = "localhost";
            $mail->SMTPAuth   = true;                  
            $mail->SMTPSecure = "tls";                 
            $mail->Host       = "smtp.gmail.com";      
            $mail->Port       = 587;                   
            $mail->Username   = "kotakecamatan@gmail.com";
            $mail->Password   = "kota-kecamatan";

            $mail->SetFrom('kotakecamatan', 'Kota Kecamatan');

            $mail->Subject    = "Aktifkan akun anda!";

            $mail->MsgHTML($body);

            $address = "$email";
            $mail->AddAddress($address, "");
            $mail->Send();

            $_SESSION['info_berhasildaftar'] = "Registrasi berhasil dilakukan. Email konfirmasi telah dikirim kepada $email.\nSilahkan konfirmasi email anda";

            header('Location: daftar.berhasil.php');
            exit;
        }   
    }
}


header('Location: index.php');
