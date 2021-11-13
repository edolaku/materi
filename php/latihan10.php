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
    <!-- POST PHP -->
    <h1>POST PHP</h1>

    <?php
    // ini menggunakan method $_POST
    // cara baca, apakah $_POST dengan nama submit sudah dicommit? jika sudah, jalankan perintah di bawahnya, jika belum, kosongkan
    if (isset($_POST["submit"])) { ?>
        <h2> Selamat datang, <?php echo $_POST["nama"]; ?> </h2>
    <?php } ?>

    <?php
    // cara baca, apakah $_GET dengan nama submit sudah dicommit? jika sudah, jalankan perintah di bawahnya, jika belum, kosongkan
    if (isset($_GET["submit"])) { ?>
        <h2> Selamat datang, <?php echo $_GET["nama"]; ?> </h2>
    <?php } ?>


</body>

</html>