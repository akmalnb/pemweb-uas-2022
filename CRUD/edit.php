<?php
include('dbconnect.php');

$id = $_GET['id_bk'];
$judul = $_GET['judul_bk'];
$penerbit = $_GET['terbit_bk'];
$genre = $_GET['genre_bk'];
$harga = $_GET['harga_bk'];
$query = "UPDATE buku SET judul_buku='$judul' , penerbit_buku='$penerbit' , genre_buku='$genre' , harga_buku='$harga' WHERE id_buku='$id' ";

if (mysqli_query($conn, $query)) {
 header("location:index.php");
}else{
 echo "ERROR, something went wrong". mysqli_error($conn);
}
mysqli_close($conn);
?>