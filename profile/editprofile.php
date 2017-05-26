<fieldset>
  <legend><b>Edit Profile</b></legend>
  <!-- belum ada koneksi dengan db -->
  <?php
    // if ($_SESSION['admin(lihat db)']) {
    //     $sesi = $_SESSION['admin(lihat db)'];
    //   } elseif ($_SESSION['user_lain(lihat db)']) {
    //     $sesi = $_SESSION['user_lain(lihat db)'];
    //   }
    //
    // $sql_profile = mysqli_query("SELECT * FROM nama_db WHERE level_user = '$sesi'") or die(mysqli_error());
    // $data = mysqli_fetch_array($sql_profile);
  ?>

  <form class="" action="" method="post">
      <table>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><input type="text" name="nama" value="<?php //echo $data['nama']; ?>" required></td>
        </tr>
        <tr>
          <td>E-mail</td>
          <td>:</td>
          <td><input type="email" name="email" value="<?php //echo $data['email']; ?>" required></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>
            <label><input type="radio" name="jk" value="L" required <?php //if($data['jenis_kelamin'] == 'laki-laki') echo "checked"; ?>>Laki-laki</label>
            <label><input type="radio" name="jk" value="P" required <?php //if($data['jenis_kelamin'] == 'perempuan') echo "checked"; ?>>Perempuan</label>
          </td>
        </tr>
        <!-- Menggunakan date picker -->
        <tr>
          <td>Tanggal Lahir</td>
          <td>:</td>
          <td><input type="date" name="tgllahir" value="<?php //echo $data['tgllahir']; ?>" required></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><textarea name="alamat" rows="8" cols="80" value="<?php //echo $data['alamat']; ?>" required></textarea></td>
        </tr>
        <tr>
          <td>Nomor Telepon</td>
          <td>:</td>
          <td><input type="text" pattern="[0-9]*" name="notelp" value="<?php //echo $data['notelp']; ?>" required></td>
        </tr>
        <tr>
          <td>Golongan Darah</td>
          <td>:</td>
          <td>
            <label><input type="radio" name="goldar" value="A" required <?php //if($data['goldar'] == 'A') echo "checked"; ?>>A</label>
            <label><input type="radio" name="goldar" value="B" required <?php //if($data['goldar'] == 'B') echo "checked"; ?>>B</label>
            <label><input type="radio" name="goldar" value="AB" required <?php //if($data['goldar'] == 'AB') echo "checked"; ?>>AB</label>
            <label><input type="radio" name="goldar" value="O" required <?php //if($data['goldar'] == 'O') echo "checked"; ?>>O</label>
          </td>
        </tr>
        <tr>
          <td>Username</td>
          <td>:</td>
          <td><input type="text" name="user" value="<?php //echo $data['username']; ?>" required> </td>
        </tr>
        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="pass" value="<?php //echo $data['pass']; ?>" required></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" name="edit" value="Edit"> <input type="reset" value="Batal"></td>
        </tr>
      </table>
  </form>
  <?php
    // if ($_POST('edit')) {
    //   $nama     = mysqli_real_escape_string($_POST['nama']);
    //   $email    = mysqli_real_escape_string($_POST['email']);
    //   $jk       = mysqli_real_escape_string($_POST['jk']);
    //   $tgllahir = mysqli_real_escape_string($_POST['tgllahir']);
    //   $alamat   = mysqli_real_escape_string($_POST['alamat']);
    //   $notelp   = mysqli_real_escape_string($_POST['notelp']);
    //   $goldar   = mysqli_real_escape_string($_POST['goldar']);
    //   $user     = mysqli_real_escape_string($_POST['user']);
    //   $pass     = mysqli_real_escape_string($_POST['pass']);
    //
    //   mysqli_query("UPDATE nama_tabel SET field1 = '$nama', field2 = '$email', field1 = '$jk', field1 = '$tgllahir', field1 = '$alamat', field1 = '$notelp', field1 = '$goldar', field1 = '$user', field1 = '$pass'")
    // }
  ?>
</fieldset>
