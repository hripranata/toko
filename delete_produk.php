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
    if(isset($_GET['id_produk'])){
        $id_produk = $_GET['id_produk'];
    }
    // sql to delete a record
    $sql = "DELETE FROM produk WHERE id_produk = '$id_produk'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo '<script language="javascript">
        alert("Maaf Data tidak dapat dihapus !!")
        window.location.href = "index.php"
        </script>';
    }

    $conn->close();
?>