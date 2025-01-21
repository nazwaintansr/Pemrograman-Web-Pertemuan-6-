<?php
include 'koneksi.php';

$id = $_GET['id'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];

$query = "UPDATE biodata SET npm='$npm', nama='$nama', prodi='$prodi' where id='$id'";
$mysqli->query($query);

header('location:index.php');
?>