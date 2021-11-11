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

    <h3>Detail Pegawai
        <ul>
            <!-- ambil key yg dikirim dari latihan7.php melalui url ditangkap dg $_GET -->
            <li>Nama: <?php echo $_GET["nama"]; ?></li>
            <li>NIP: <?php echo $_GET["nip"]; ?></li>
            <li>Jabatan: <?php echo $_GET["jabatan"]; ?></li>
        </ul>
    </h3>
    <?php

    ?>

</body>

</html>