<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_siswa	= $_POST['id_siswa'];
  $nama		= $_POST['nama'];
  $nisn		= $_POST['nisn'];
  $kelas	= $_POST['kelas'];
  $alamat	= $_POST['alamat'];
  $photo	= $_FILES['photo']['name'];
  //cek dulu jika merubah gambar siswa jalankan coding ini
  if($photo != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $photo); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['photo']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$photo; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang siswanya kita edit
                   $query  = "UPDATE datasiswa SET nama = '$nama', nisn = '$nisn', kelas = '$kelas', alamat = '$alamat', photo = '$nama_gambar_baru'";
                    $query .= "WHERE id_siswa = '$id_siswa'";
                    $result = mysqli_query($koneksi, $query);
                    // periksa query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman home.php
                      //silahkan ganti home.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='home.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='home.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang siswanya kita edit
      $query  = "UPDATE datasiswa SET nama = '$nama', nisn = '$nisn', kelas = '$kelas', alamat = '$alamat'";
      $query .= "WHERE id_siswa = '$id_siswa'";
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
        //tampil alert dan akan redirect ke halaman home.php
        //silahkan ganti home.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='home.php';</script>";
      }
    }

 

