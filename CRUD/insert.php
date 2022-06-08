<?php

include('dbconnect.php');

$judul = $_POST['judul_bk'];
$penerbit = $_POST['terbit_bk'];
$genre = $_POST['genre_bk'];
$harga = $_POST['harga_bk'];

$query =  "INSERT INTO buku(judul_buku , penerbit_buku , genre_buku , harga_buku) VALUES('$judul' , '$penerbit' , '$genre' , '$harga')";

if (mysqli_query($conn , $query)) {
 header("location:index.php");
}
else{
 echo "ERROR, something went wrong". mysqli_error($conn);
}

mysqli_close($conn);
?>