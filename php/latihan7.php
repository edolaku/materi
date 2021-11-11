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
    // #1 $_GET
    // #2 $_POST
    // #3 $_REQUEST
    // #4 $_SESSION
    // #5 $_COOKIE
    // #6 $_SERVER
    // #7 $_ENV

    // perintah ini akan berisi array kosong jika dijalankan
    // namunhttp://localhost/materi/php/latihan7.php?nama=edho&jabatan=staf

    var_dump($_GET);
    ?>

</body>

</html>