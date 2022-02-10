<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = $_POST['id'];
  $Nama = $_POST['Nama'];
  $Tempat_Lahir = $_POST['Tempat_Lahir'];
  $Tanggal_Lahir = $_POST['Tanggal_Lahir'];
  $Warga_Negara = $_POST['Warga_Negara'];
  $Alamat = $_POST['Alamat'];
  $Email = $_POST['Email'];
  $Nomor_HP = $_POST['Nomor_HP'];
  $Asal_SMP = $_POST['Asal_SMP'];
  $Nama_Ayah = $_POST['Nama_Ayah'];
  $Nama_Ibu = $_POST['Nama_Ibu'];
  $Penghasilan_Ortu = $_POST['Penghasilan_Ortu'];
  $Foto_Siswa = $_FILES['Foto_Siswa'];

  

  if($gambar_produk != "") {
    $ekstensi_diperbolehkan = array('png','jpg');  
    $x = explode('.', $gambar_produk); 
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['Foto_Siswa']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_produk; 
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 
                      
                   
                   $query  = "UPDATE daftar_siswa SET Nama = '$Nama', Tempat_Lahir = '$Tempat_Lahir', Tanggal_Lahir = '$Tanggal_Lahir', Warga_Negara = '$Warga_Negara', Alamat = '$Alamat', Email = '$Email', Nomor_HP = '$Nomor_HP', Asal_SMP = '$Asal_SMP', Nama_Ayah = '$Nama_Ayah', Nama_Ibu = '$Nama_Ibu', Penghasilan_Ortu = '$Penghasilan_Ortu', Foto_Siswa = '$Foto_Siswa'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    
                      echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                    }
              } else {     
               
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah.php';</script>";
              }
    } else {

      $query  = "UPDATE daftar_siswa SET Nama = '$Nama', Tempat_Lahir = '$Tempat_Lahir', Tanggal_Lahir = '$Tanggal_Lahir', Warga_Negara = '$Warga_Negara', Alamat = '$Alamat', Email = '$Email', Nomor_HP = '$Nomor_HP', Asal_SMP = '$Asal_SMP', Nama_Ayah = '$Nama_Ayah', Nama_Ibu = '$Nama_Ibu', Penghasilan_Ortu = '$Penghasilan_Ortu', Foto_Siswa = '$Foto_Siswa'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
    
      if(!$result){
             ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
       
          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
    }