<!DOCTYPE html>
<html>
<head>
	<title>Daftar SISWA</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
 
<body>
  <title>Form Pendaftaran</title>
  </head>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <body>
    <div class="container col-md-6 mt-4">
      <h1>TABEL SISWA</h1>

          DAFTAR SISWA <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
        </div>

        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Warga Negara</th>
              <th>Alamat</th>
              <th>Email</th>
              <th>Nomor HP</th>
              <th>Asal SMP</th>
              <th>Nama Ayah</th>
              <th>Nama Ibu</th>
              <th>Penghasilan Ortu</th>
              <th>Foto Siswa</th>
              <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

						<?php
							include('koneksi.php');
							$datas = mysqli_query($koneksi, "select * from daftar_siswa") or die(mysqli_error($koneksi));
						

							$no = 1;

							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $no; ?></td>
						<td><?= $row['Nama']; ?></td>
						<td><?= $row['Tempat_Lahir']; ?></td>
            <td><?= $row['Tanggal_Lahir']; ?></td>
            <td><?= $row['Warga_Negara']; ?></td>
            <td><?= $row['Alamat']; ?></td>
            <td><?= $row['Email']; ?></td>
            <td><?= $row['Nomor_HP']; ?></td>
            <td><?= $row['Asal_SMP']; ?></td>
            <td><?= $row['Nama_Ayah']; ?></td>
            <td><?= $row['Nama_Ibu']; ?></td>
            <td><?= $row['Penghasilan_Ortu']; ?></td>
            <td><?= $row['Foto_Siswa']; ?></td>
						<td></td>
            <td><a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
								<a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
						</td>
					</tr>

						<?php $no++; } ?>
					</tbody>
  
          </table>
        </div>
      </div>
    </div>

  <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 
</body>
</html>

