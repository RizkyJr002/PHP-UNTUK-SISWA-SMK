<form action="" method = "get">

    nama :
    <input type="text" name = "nama"><br>
    alamat : 
    <input type="text" name = "alamat"><br>
    <input type="submit" name = "kirim" value = "simpan">

</form>

<?php 

    if ( isset($_GET['kirim']) ) {
        $nama = $_GET['nama'];
        $alamat = $_GET['alamat'];

        echo $nama;
        echo "<br>";
        echo $alamat;
    }

?>

<br>

<form action="" method="post">
    bilangan 1 : 
    <input type="number" name="bil1"><br>
    bilangan 2 : 
    <input type="number" name="bil2"><br>
    <input type="submit" name="kirim" value="tambah">
    <input type="submit" name="kirim" value="kali">
</form>

<?php 

    if (isset($_POST['kirim'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST{'bil2'};
        $hasil = $bil1 + $bil2;
        $hasil = $bil1 * $bil2;

        echo $hasil;
    }

?>