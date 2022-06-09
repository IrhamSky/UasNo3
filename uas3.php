if(isset($_POST['tambahproduk'])){
    //deskripsi initial variabel
    $nama_produk = $_POST ['nama_produk'];
    $judul = $_POST ['deskripsi'];
    $harga = $_POST ['harga'];
    $stok = $_POST ['stock'];

    $insert= mysqli_query($koneksi, "INSERT INTO produk (nama_produk, deskripsi, harga, stock) 
    VALUES ('$nama_produk', '$deskripsi', '$harga', '$stock')");

    if ($insert_produk) {
        header('location:stock.php');
    } else {
        echo'
        <script>
        alert("Gagal Tambah Produk")
        windows.location.href="stock.php"
        </script>';
    }    
}