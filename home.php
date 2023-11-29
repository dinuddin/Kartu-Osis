<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>!Project</title>
    <link rel="icon" href="../image/icon.png" />
    <link href="assets/cdn.jsdelivr.net_npm_bootstrap@5.0.2_dist_css_bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/style.css" />
	
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>
	
	<script src="assets/ajax.googleapis.com_ajax_libs_jquery_3.6.3_jquery.min.js" type="text/javascript"></script>
	<script src='assets/cdnjs.cloudflare.com_ajax_libs_font-awesome_6.4.0_js_all.min.js'></script>
		
	<style>
	@media print {
  body * {
   visibility: hidden;
  }
  .modal-content * {
   visibility: visible;
   overflow: visible;
  }
  .main-page * {
   display: none;
  }
  .modal {
   position: absolute;
   left: 0;
   top: 0;
   margin: 0;
   padding: 0;
   min-height: 550px;
   visibility: visible;
   overflow: visible !important; /* Remove scrollbar for printing. */
  }
  .modal-dialog {
   visibility: visible !important;
   overflow: visible !important; /* Remove scrollbar for printing. */
  }
 }
		a {
		  text-decoration: none;
		}
	</style>
    </head>
    <body>
        <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-primary main-navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">LOGO</a>
                <button class="navbar-toggler" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="overlay d-flex d-lg-none"></div>
                <div class="order-lg-2 bg-primary d-lg-flex w-100 sidebar pb-3 pb-lg-0">
                    <ul class="navbar-nav ms-lg-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-3 px-lg-2 active" aria-current="page" href="#">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                &nbsp;Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 px-lg-2" href="#">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                &nbsp;Travel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3 px-lg-2 disabled" href="#">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                &nbsp;Disabled
                            </a>
                        </li>
						<li class="nav-item dropdown">
                            <a class="nav-link px-3 px-lg-2 dropdown-toggle" href="#" id="dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                                &nbsp;Login
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./registrasi">Guru</a></li>
                                <li><a class="dropdown-item" href="./registrasi">Siswa</a></li>
								<li><a class="dropdown-item" href="./registrasi">Tendik</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main style="margin-top: 20px">
            <section class="blog">
                <div class="container-fluid p-3 bg-light">
					<div class="container">
						<h2>DATA SISWA</h2>
						<div align="right">
						<button type="button" class="btn btn-primary mb-3 btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Tambah Data</button>
						</div>
						<div class="table-responsive">
							<table id="myTable" class="table table-hover" style="width:100%">
								<thead>
								<tr>
									<th>NO</th>
									<th>Photo</th>
									<th>NISN</th>
									<th>Nama</th>
									<th>Kelas</th>
									<th>Alamat</th>
									<th>OPSI</th>
								</tr>
								</thead>
								
								<tbody>
								<?php 
								include 'koneksi.php';
								$no = 1;
								$data = mysqli_query($koneksi,"select * from datasiswa");
								while($d = mysqli_fetch_array($data)){
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><img src="gambar/<?php echo $d['photo']; ?>" style="width: 40px;float: left;margin-bottom: 5px;"></td>
										<td><?php echo $d['nisn']; ?></td>
										<td><?php echo strtoupper($d['nama']); ?></td>
										<td><?php echo strtoupper($d['kelas']); ?></td>
										<td><?php echo strtoupper($d['alamat']); ?></td>
										<td><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop2<?php echo $no; ?>"><i class='fas fa-edit' style='font-size:16px;color:green'></i></a> &nbsp;&nbsp;<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop3<?php echo $no; ?>"><i class="fa fa-trash" style="font-size:16px;color:red"></i></a> &nbsp;&nbsp;<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop4<?php echo $no; ?>"><i class="fa fa-eye" style="font-size:16px;color:blue"></i></a></td>
									</tr>
									<!-- MODAL DETAILS -->

								<div class="modal fade" id="staticBackdrop4<?php echo $no; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header d-print-none">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Detail Siswa</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>	
											<div class="modal-body">
												<div class="card border-primary">
												<div class="card-header"><img src="image/kop-surat.png" class="img-responsive center-block d-block mx-auto" style="width: 400px;margin-bottom: 5px;"></div>
												<div class="card-body">
													<div class="container">
														<div class="row">								  
														  <div class="col-8">
															 NISN:<br>
															 <strong><?php echo $d['nisn']; ?></strong><br>
															 Nama:<br>
															 <strong><?php echo strtoupper($d['nama']); ?></strong><br>
															 Alamat:<br>
															 <strong><?php echo strtoupper($d['alamat']); ?></strong>
														  </div>
														  <div class="col-4">
															<img src="gambar/<?php echo $d['photo']; ?>" class="img-responsive center-block d-block mx-auto" style="width: 80px;">
															<p class="text-center" style="font-size: 12px"><?php echo date("d F Y"); ?></p>
														  </div>
														</div>
													</div>
												</div>
												</div>
											</div>
											<div class="modal-footer d-print-none">
												<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
												<a href="javascript:window.print()" class="btn btn-primary pull-right">Print</a>
											</div>
										</div>
									</div>
								</div>

								<!-- END MODAL DETAILS -->

									<!-- MODAL UPDATE -->

								<div class="modal fade" id="staticBackdrop2<?php echo $no; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Siswa</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
									
											<form method="POST" action="editsiswa.php" enctype="multipart/form-data" >
										
										
											<div class="modal-body">

												<div class="mb-3">
													<label class="form-label">NISN</label>
													<input type="hidden" name="id_siswa" value="<?php echo $d['id_siswa']; ?>" required>
													<input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" name="nisn" value="<?php echo $d['nisn']; ?>" required>
												</div>
										
												<div class="mb-3">
													<label class="form-label">Nama</label>
													<input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" name="nama" value="<?php echo $d['nama']; ?>" required>
												</div>
												
												<div class="mb-3">
													<label class="form-label">Kelas</label>
													<input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" name="kelas" value="<?php echo $d['kelas']; ?>" required>
												</div>
												
												<div class="mb-3">
													<label class="form-label">Alamat</label>
													<input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" name="alamat" value="<?php echo $d['alamat']; ?>" required>
												</div>
												
												<div class="mb-3">
													<label class="form-label">Photo</label></br>
													<img src="gambar/<?php echo $d['photo']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
													<input type="file" name="photo" class="form-control"/>
													<i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah photo</i>
												</div>
										
											</div>
									
											<div class="modal-footer">
												<button type="submit" class="btn btn-warning text-white" name="bubah">Ubah</button>
												<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
											</div>
											</form>

										</div>
									</div>
								</div>

								<!-- END MODAL UPDATE -->
									
								<!-- MODAL DELETE -->

								<div class="modal fade" id="staticBackdrop3<?php echo $no; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5 " id="staticBackdropLabel">Hapus Siswa</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
										
										<form method="POST" action="tambahsiswa.php">
											<input type="hidden" name="id_siswa" value="<?php echo $d['id_siswa']; ?>">
											<div class="modal-body">
												<h6 class="text-center">Apakah Anda Yakin Akan Menghapus Siswa ini?</br><span class="text-danger"><?php echo $d['nama']; ?></span></h6>
											</div>
								
											<div class="modal-footer">
												<button type="submit" class="btn btn-danger text-white" name="bhapus">Hapus</button>
												<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
											</div>
										</form>

										</div>
									</div>
								</div>

								<!-- END MODAL DELETE -->
									<?php               
									  } 
									?>
									<!-- MODAL ADD -->
								<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Siswa</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
												<form method="POST" action="addsiswa.php" enctype="multipart/form-data">
													<div class="modal-body">
													
														<div class="mb-3">
															<label class="form-label">NISN</label>
															<input type="text" class="form-control"  onkeyup="this.value = this.value.toUpperCase()" name="nisn" placeholder="NISN" required>
														</div>

														<div class="mb-3">
															<label class="form-label">Nama</label>
															<input type="text" class="form-control"  onkeyup="this.value = this.value.toUpperCase()" name="nama" placeholder="Nama Lengkap" required>
														</div>
														
														<div class="mb-3">
															<label class="form-label">Kelas</label>
															<input type="text" class="form-control"  onkeyup="this.value = this.value.toUpperCase()" name="kelas" placeholder="Rombel Sekarang" required>
														</div>
														
														<div class="mb-3">
															<label class="form-label">Alamat</label>
															<input type="text" class="form-control"  onkeyup="this.value = this.value.toUpperCase()" name="alamat" placeholder="Alamat Sekarang" required>
														</div>
														
														<div class="mb-3">
															<label class="form-label">Photo</label></br>
															<input type="file" name="photo"/>
														</div>
														
											  
													</div>
													<div class="modal-footer">
															<button type="submit" class="btn btn-primary" name="bsimpan">Tambah</button>
															<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Tutup</button>
													</div>
												</form>
												
										</div>
									</div>
								</div>
									<!-- END MODAL ADD -->
							</tbody>
							</table>  
						</div>	
					</div>
				</div>
            </section>
        </main>

<script src="assets/cdn.jsdelivr.net_npm_bootstrap@5.0.2_dist_js_bootstrap.bundle.min.js"></script>
<script src="assets/script.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>

<!-- Footer -->
<footer class="page-footer font-small blue pt-4">
<!-- Copyright -->
<div class="footer-copyright text-center py-3"><?php echo "Copyright © 2023 - " . (int)date('Y'). " <a href=#>IProject</a>" ?>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->	

<script>  
 $(document).ready(function(){  
      $('#myTable').DataTable();  
 }); 
</script>

</body>
</html>
