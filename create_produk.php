<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "toko";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $nama_produk = $_POST['nama_produk'];
    $warna = $_POST['warna_produk'];
    $jumlah = $_POST['jumlah_produk'];
    $id_merk = $_POST['merk'];
    $id_kategori = $_POST['kategori'];

    $sql = "INSERT INTO produk (nama_produk,warna,jumlah,id_merk,id_kategori)
    VALUES ('$nama_produk', '$warna', '$jumlah', '$id_merk', '$id_kategori')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>