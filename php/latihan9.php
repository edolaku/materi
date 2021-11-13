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
    <!-- akan mengambil data dg method POST -->
    <form action="latihan10.php" method="POST">
        <!-- name akan menjadi key pada saat button di submit -->
        <input type="text" name="nama">
        <button type="submit" name="submit">KIRIM DENGAN POST</button>
    </form>
    <!-- akan mengambil data dg method GET -->
    <!-- jika action-nya dikosongkan, maka dia akan mengarah ke halaman ini lagi, atau kita bisa tanpa menggunakan action untuk mengarah ke halaman ini sendiri -->
    <!-- dan jika tidak mendefinisikan method-nya, defaultnya akan berupa method get -->
    <form action="latihan10.php" method="GET">
        <!-- name akan menjadi key pada saat button di submit -->
        <input type="text" name="nama">
        <button type="submit" name="submit">KIRIM DENGAN GET</button>
    </form>

</body>

</html>