<?php
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
    $Nama               = $_POST['Nama'];
    $Tempat_Lahir       = $_POST['TempatLahir'];
    $Tanggal_Lahir      = $_POST['TanggalLahir'];
    $Warga_Negara       = $_POST['WargaNegara'];
    $Alamat             = $_POST['Alamat'];
    $Email              = $_POST['Email'];
    $Nomor_HP           = $_POST['Nomor_HP'];
    $Asal_SMP           = $_POST['AsalSMP'];
    $Nama_Ayah          = $_POST['Nama_Ayah'];
    $Nama_Ibu           = $_POST['NamaIbu'];
    $Penghasilan_Ortu   = $_POST['PenghasilanOrtu'];
    $Foto_Siswa         = $_POST['FotoSiswa'];



if($Foto_Siswa != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); 
  $x = explode('.', $gambar_produk); 
  $file_tmp = $_FILES['Foto Siswa']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_produk; 
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 


                  $query = "INSERT INTO daftar_siswa (Nama,Tempat_Lahir,Tanggal_Lahir,Warga_Negara,Alamat,Email,Nomor_HP,Asal_SMP,Nama_Ayah,Nama_Ibu,Penghasilan_Ortu,Foto_Siswa) VALUES ('$Nama', '$Tempat_Lahir', '$Tanggal_Lahir', '$Warga_Negara', '$Alamat', '$Email', '$Nomor_HP', '$Asal_SMP', '$Nama_Ayah', '$Nama_Ibu', '$Penghasilan_Ortu', '$Foto_Siswa')";
                  $result = mysqli_query($koneksi, $query);
                  
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    // echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

            } else {     
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='index.php';</script>";
            }
    } else {
    $query = "INSERT INTO daftar_siswa (Nama,Tempat_Lahir,Tanggal_Lahir,Warga_Negara,Alamat,Email,Nomor_HP,Asal_SMP,     Nama_Ayah,Nama_Ibu,Penghasilan_Ortu,Foto_Siswa) VALUES ('$Nama', '$Tempat_Lahir', '$Tanggal_Lahir', '$Warga_Negara', '$Alamat', '$Email', '$Nomor_HP', '$Asal_SMP', '$Nama_Ayah', '$Nama_Ibu', '$Penghasilan_Ortu', '$Foto_Siswa', null)";
     $result = mysqli_query($koneksi, $query);
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                   
                  }
                }

?>