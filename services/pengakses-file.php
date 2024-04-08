<?php
// Cek apakah form untuk mengunggah file TXT sudah disubmit
if (isset($_POST['submit'])) {
  // Tentukan direktori untuk menyimpan upload
  $target_dir = dirname(__DIR__) . '/public/uploads/';
  // Tentukan jalur file untuk file yang diunggah
  $target_file = $target_dir . basename($_FILES['file']['name']);
  // Dapatkan ekstensi file
  $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // untuk memeriksa apakah jenis filenya txt
  if ($file_type !== 'txt') {
    echo 'Hanya file txt yang diperbolehkan! ';
    return;
  }

  if (file_exists($target_file)) {
    echo 'File sudah ada! Coba unggah file lain!';
    return;
  }

  // Periksa apakah ukuran file tidak lebih besar dari 1MB
  if ($_FILES['file']['size'] >= 1000000) {
    echo 'File tidak boleh lebih dari 1mb!';
    return;
  }

  // Pindahkan file yang diunggah ke direktori target
  if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
    // Baca konten dari file tersebut dan tampilkan
    $converted_html = file_get_contents($target_file);
    echo $converted_html;
  } else {
    echo 'Gagal mengonversi file txt!';
  }
}