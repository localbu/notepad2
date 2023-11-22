<?php
$host= 'localhost';
$user= 'root';
$pass= '';
$db= 'note_book';

$conn= mysqli_connect($host,$user,$pass,$db);
if($conn){
    // echo'koneksi berhasil';
}else{
    // echo'keneksi gagal';
};

mysqli_select_db($conn,$db);
?>