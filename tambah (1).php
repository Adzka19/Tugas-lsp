<!DOCTYPE html>
<html>

<head>
	<title>PROSES DAFTAR SISWA</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>Form Daftar</h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Tambah Data
			</div>
			<div class="card-body">
				<form action="prosestambah.php" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="Nama" class="form-control">
					</div>
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input type="text" name="TempatLahir" class="form-control">
					</div>

					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" class="form-control" name="TanggalLahir"></input>
					</div>

					<div class="form-group">
						<label>Warga Negara</label>
						<input class="form-control" name="WargaNegara"></input>
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<input class="form-control" name="Alamat"></input>
					</div>

					<div class="form-group">
						<label>Email</label>
						<input class="form-control" name="Email"></input>
					</div>

					<div class="form-group">
						<label>Nomor HP</label>
						<input class="form-control" name="Nomor_HP"></input>
					</div>

					<div class="form-group">
						<label>Asal SMP</label>
						<input class="form-control" name="AsalSMP"></input>
					</div>

					<div class="form-group">
						<label>Nama Ayah</label>
						<input class="form-control" name="NamaAyah"></input>
					</div>

					<div class="form-group">
						<label>Nama Ibu</label>
						<input class="form-control" name="NamaIbu"></input>
					</div>

					<div class="form-group">
						<label>Penghasilan Ortu</label>
						<input class="form-control" name="PenghasilanOrtu"></input>
					</div>
					
					<div class="form-group">
						<label>Foto Siswa</label><br>
						<input type="file" name="FotoSiswa">
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>

			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>