<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function PHP</title>
    <style>
    </style>
</head>

<body>
    <!-- FUNCTION PHP -->
    <?php
// Function PHP:
// #1 built-in function => function yg disediakan oleh php
// #2 user-defined function =>
?>
        <h1>FUNCTION PHP</h1>
        <h2>Built-in Function</h2>

    <?php // time function menghasilkan UNIX timestamp/EPOCH time
    // detik yg sudah berlalu sejak 1 januari 1970
    echo time();
    ?>
<br>
    <?php
    // tampilkan hari dari saat ini, ditambah detik 172700 (2 hari)
    echo "tampil kan 2 hari lagi dari hari sekarang: ";
    echo date("l", time() + 172800);
    ?>
<br>
    <?php
    // tampilkan hari dari saat ini, ditambah 100 hari 60 detik * 60 menit * 24 jam * 100 hari
    echo "tampil kan 100 hari lagi dari hari sekarang: ";
    echo date("l", time() + 60 * 60 * 24 * 100);
    ?>
<br>
    <?php
    // tampilkan hari sebelum saat ini, dikurangi 100 hari 60 detik * 60 menit * 24 jam * 100 hari
    echo "tampil kan 100 hari yg lalu dari hari sekarang: ";
    echo date("l", time() - 60 * 60 * 24 * 100);
    ?>
<br>
    <?php
    // membuat detik sendiri dari 1 jan 1970 sampai detik yg kita inginkan
    // urutan dari mktime(jam, menit, detik, bulan, tanggal, tahun)
    echo "tampil kan hari pada tanggal 22 apr 1991: ";
    // detik yg sudah berlalu dari 1 jan 1970 hingga 22 apr 1991
    // fungsi dibawah ini dibaca "tampilkan hari, dari mktime 22 apr 1991
    echo date("l", mktime(0,0,0,4,22,1991));
    ?>
    <h2>User-defined Function</h2>
    <?php
    // memberikan parameter default pada function
    function salam ($waktu = "pagi", $nama = "Admin"){
        return "Selamat $waktu, $nama!";
    }
    echo salam();
    ?>
    <br>
    <?php
    // tp ketika argumen dimasukkan, parameter default tentu akan diganti dg argumen yg diinput
    echo salam("malam", "Wapek");
    ?>
</body>

</html>