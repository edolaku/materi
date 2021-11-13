<?php
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        header("Locatian: latihan12.php");
        exit;
    } else {
        $error = true;
    }
}

?>

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
    <!-- HALAMAN LOGIN -->
    <h1>HALAMAN LOGIN</h1>

    <?php
    if (isset($error)) { ?>
        <p>Password salah</p>
    <?php } ?>

    <form action="" method="POST">
        <ul>
            <li>
                <!-- label digunakan agar ketika user klik username, kursor langsung masuk ke input box, merupakan UX utk user -->
                <!-- label jg harus berisi for yg didefinisikan dengan id dari box inputan -->
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <!-- type password agar text tidak terlihat -->
                <input type="text" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li>


        </ul>
    </form>


</body>

</html>