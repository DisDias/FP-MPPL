<?php
include('db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $u_name = $conn->real_escape_string($_POST['nama']);
    $u_email = $conn->real_escape_string($_POST['email']);
    $u_jeniskel = $conn->real_escape_string($_POST['Gender']);
    $u_password = $conn->real_escape_string($_POST['password']);
    $u_telpon = $conn->real_escape_string($_POST['phone']);
	$u_tanggal_lahir = $conn->real_escape_string($_POST['dob']);
    $u_alamat = $conn->real_escape_string($_POST['alamat']);


    $q =$conn->query(sprintf("INSERT INTO user ('email', 'nama', 'password', 'telpon', 'tanggal_lahir', 'jenis_kelamin', 'alamat')
                VALUES ('%s', '%s', '%s', '%s', '%s')", $u_name, $u_alamat, $u_jeniskel, $u_agama, $u_sekolah));


    
    header("Location: list_siswa.php") ;
}
// include("db.php");

// // cek apakah tombol daftar sudah diklik atau blum?
// if(isset($_POST['daftar'])){
	
// 	// ambil data dari formulir
// 	$nama = $_POST['nama'];
// 	$email = $_POST['email'];
// 	$password = $_POST['password'];
// 	$telpon = $_POST['phone'];
// 	$tanggal_lahir = $_POST['dob'];
// 	$alamat = $_POST['alamat'];
// 	$jk = $_POST['Gender'];
	
// 	// buat query
// 	$sql = "INSERT INTO user (email, nama, password, telpon, tanggal_lahir, jenis_kelamin, alamat) VALUE ('$email', $nama', '$password', '$telpon', '$tanggal_lahir', '$jk', '$alamat')";
// 	$query = mysqli_query($db, $sql);
	
// 	// apakah query simpan berhasil?
// 	if( $query ) {
// 		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
// 		header('Location: login.html?status=sukses');
// 	} else {
// 		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
// 		header('Location: login.html?status=gagal');
// 	}
	
	
// } else {
// 	die("Akses dilarang...");
// }

?>
