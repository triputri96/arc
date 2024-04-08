<?php
session_start();
$dummy_username = 'putri';
$dummy_password = '123';

if (isset($_POST['btnLogin'])) {
	$username = $_POST['username'];
	$password = $_POST['pass'];

	// Inisialisasi counter jika belum ada atau reset jika sudah melebihi 3 kali
	if (!isset($_SESSION['failed_login']) || $_SESSION['failed_login'] >= 3) {
		$_SESSION['failed_login'] = 0;
	}

	// Memeriksa username dan password
	if ($username === $dummy_username && $password === $dummy_password) {
		// Reset counter
		$_SESSION['failed_login'] = 0;
		$_SESSION['username'] = $username;
		echo "<script>alert('Anda Berhasil Login'); window.location.href='../index.php'</script>";
	} else {
		// Increment counter
		$_SESSION['failed_login']++;

		// Menyusun pesan yang sesuai
		$remaining_attempts = 3 - $_SESSION['failed_login'];
		$warning_message = "Anda memiliki $remaining_attempts kesempatan untuk login";

		// Redirect dengan pesan yang sesuai
		if ($remaining_attempts > 0) {
			header("Location: ../login.php?pesan=$warning_message");
		} else {
			// Jika sudah melebihi 3 kali, tampilkan pesan expired
			header('Location: ../login.php');
		}
	}
} elseif (isset($_POST['btnBatal'])) {
	// Redirect untuk pembatalan atau tindakan lainnya
	header('Location: ../index.php');
	exit();
}