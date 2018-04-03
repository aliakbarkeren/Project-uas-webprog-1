<?php

include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data sukses!";
}
//echo "kode : ".$_POST["kode"] ;
//echo "nama barang : ".$_POST["namaBarang"];
//echo "harga : " .$_POST["harga"];

//insert into harga_barang(kode,nama_barang,harga)
//values(1,'gula',5000)

$query = "insert into data_mahasiswa (nim, nama, jurusan)
values('".$_POST['nim']."','".$_POST['nama']."','".$_POST['jurusan']."')";
//echo "<br><br>".$query;
if($koneksi->query($query)==true){
echo "<br>Data ".$_POST["nama"]." sudah tersimpan".
'<a href="main.php">klik disini</a>';


}else {
	echo "error : ".$query." -> ".$koneksi->error;
}
$koneksi->close();
?>
