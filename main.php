<h2>Aplikasi Data Mahasiswa</h2>
<hr>
<form action="tambah.php" method="POST">
<input type="submit" name"tambah" value="tambah data">
</form>
<?php
include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data sukses!";
}

$qry="select * from data_mahasiswa";
$data = $koneksi->query($qry);
 ?>

<table rules="all" border="2"  cellpadding="3">
  <tr>
    <th width= "15%" bgcolor="#ddd">NIM</th>
    <th width="35%" bgcolor="#ddd">NAMA</th>
    <th width="35%" bgcolor="#ddd">JURUSAN</th>
	<th colspan="2" bgcolor="#ddd">OPSI</th>
  </tr>
  <?php

  if ($data -> num_rows <= 0){
    echo "<tr><td>";
    echo "DATA NIHIL";
    echo "</td></tr>";
  }else {
    while ($row = $data -> fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row['nim']."</td>";
      echo "<td>".$row['nama']."</td>";
      echo "<td>".$row['jurusan']."</td>";
      echo '<td> <a href ="edit-form.php?nim='.
        $row["nim"].'">EDIT</a>';
		echo '<td> <a href ="hapus.php?nim='.
        $row["nim"].'">HAPUS</a>';
      echo "</tr>";
    }
  }
    ?>

</table>
==