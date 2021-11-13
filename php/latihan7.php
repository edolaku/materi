<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get & Post PHP</title>
    <style></style>
</head>

<body>
    <!-- GET & POST PHP -->
    <h1>GET & POST PHP</h1>

    <?php
    // semua tipe superglobal ini adalah array associattive. array associattive tidak dapat dicetak begitu saja menggunakan echo, karena terdapat indeks didalamnya. untuk mengeceknya dapat menggunakan var_dump() atau print_r(). Superglobal:
    // #1 $_GET => metode pengiriman data melalui URL, dan data tersebut ditangkap oleh superglobal $_GET
    // #2 $_POST
    // #3 $_REQUEST
    // #4 $_SESSION
    // #5 $_COOKIE
    // #6 $_SERVER
    // #7 $_ENV

    // perintah ini akan berisi array kosong jika dijalankan
    // namunhttp://localhost/materi/php/latihan7.php?nama=edho&jabatan=staf
    // var_dump($_GET);

    $pegawai = [
        [
            "nama" => "Maskur, A.Md",
            "nip" => "198001142011011006",
            "jabatan" => "Bendahara Pengeluaran"
        ],
        [
            "nama" => "Anton Sutriyono",
            "nip" => "198009162005011011",
            "jabatan" => "Bendahara Pengeluaran Pembantu"
        ],
        [
            "nama" => "Anita Yuliatin",
            "nip" => "198807112015022001",
            "jabatan" => "Bendahara Pengeluaran Pembantu"
        ]
    ];
    ?>


    <h2>Daftar Pegawai</h2>
    <ul>
        <?php
        foreach ($pegawai as $peg) { ?>
            <li>
                <!-- mengirimkan data pd url dan akan ditangkap oleh $_GET pd latihan8.php -->
                <a href="latihan8.php?nama=<?php echo $peg['nama']; ?>&nip=<?php echo $peg['nip']; ?>&jabatan=<?php echo $peg['jabatan']; ?>"> <?php echo $peg["nama"]; ?></a>
            </li>
        <?php } ?>
    </ul>

</body>

</html>