<?php
include 'koneksi.php';
  if (isset($_GET['id'])) {
    
    $id = ($_GET["id"]);

    $query = "SELECT * FROM daftar_siswa WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
     
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
   
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Produk dengan gambar - Gilacoding</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
      <form method="POST" action="prosesedit.php" enctype="multipart/form-data" >
      <section class="base">
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama</label>
          <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>" autofocus="" required="" />
        </div>
        <label>Tempat Lahir</label>
          <input type="text" name="Tanggal_Lahir" value="<?php echo $data['Tempat_Lahir']; ?>" autofocus="" required="" />
        </div>
        <label>Tanggal Lahir</label>
          <input type="text" name="Tanggal_Lahir" value="<?php echo $data['Tanggal_Lahir']; ?>" autofocus="" required="" />
        </div>
        <label>Warga Negara</label>
          <input type="text" name="Warga_Negara" value="<?php echo $data['Warga_Negara']; ?>" autofocus="" required="" />
        </div>
        <label>Alamat</label>
          <input type="text" name="Alamat" value="<?php echo $data['Alamat']; ?>" autofocus="" required="" />
        </div>
        </div>
        <label>Email</label>
          <input type="text" name="Email" value="<?php echo $data['Email']; ?>" autofocus="" required="" />
        </div>
        </div>
        <label>Nomor HP</label>
          <input type="text" name="Nomor_HP" value="<?php echo $data['Nomor_HP']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Asal SMP</label>
         <input type="text" name="Asal_SMP" required=""value="<?php echo $data['Asal_SMP']; ?>" />
        </div>
        <label>Nama Ayah</label>
         <input type="text" name="Nama_Ayah" required=""value="<?php echo $data['Nama_Ayah']; ?>" />
        </div>
        <label>Nama Ibu</label>
         <input type="text" name="Nama_Ibu" required=""value="<?php echo $data['Nama_Ibu']; ?>" />
        </div>
        <label>Penghasilan Ortu</label>
         <input type="text" name="Penghasilan_Ortu" required=""value="<?php echo $data['Penghasilan_Ortu']; ?>" />
        </div>
        <div>
          <label>Foto Siswa</label>
          <img src="gambar/<?php echo $data['Foto_Siswa']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="Foto_Siswa" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        
        </section>
      </form>
  </body>
</html>