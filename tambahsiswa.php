<?php
//panggil connection database
include 'koneksi.php';

//uji jika tombol simpan di klik
if(isset($_POST['bsimpan'])) {

    //persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO datasiswa (nama, nisn, kelas, alamat)
                                      VALUES ('$_POST[nama]',
											'$_POST[nisn]',
											'$_POST[kelas]',
											'$_POST[alamat]'
                                      )");
		
    //jika simpan sukses
    if($simpan){
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='home.php';
             </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='home.php';
              </script>";
    }
}

//uji jika tombol ubah di klik
if(isset($_POST['bubah'])) {

    //persiapan ubah data
    $ubah = mysqli_query($koneksi, "UPDATE datasiswa SET
									id_siswa 	= '$_POST[id_siswa]',
									nama 		= '$_POST[nama]',
									nisn 		= '$_POST[nisn]',
									kelas 		= '$_POST[kelas]',
									alamat 		= '$_POST[alamat]'
                                    WHERE id_siswa 	= '$_POST[id_siswa]'
                                    ");
    //jika ubah sukses
    if($ubah){
        echo "<script>
                alert('Ubah Data Sukses!');
                document.location='home.php';
             </script>";
    } else {
        echo "<script>
                alert('Ubah Data Gagal!');
                document.location='home.php';
              </script>";
    }
}

//uji jika tombol hapus di klik
if(isset($_POST['bhapus'])) {

    //persiapan hapus data
    $hapus = mysqli_query($koneksi, "DELETE FROM datasiswa WHERE id_siswa = '$_POST[id_siswa]' ");
    
    //jika hapus sukses
    if($hapus){
        echo "<script>
                alert('Hapus Data Sukses!');
                document.location='home.php';
             </script>";
    } else {
        echo "<script>
                alert('Hapus Data Gagal!');
                document.location='home.php';
              </script>";
    }
}


?>