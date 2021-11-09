<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian PHP</title>
    <style>
        .warna {
            background-color: salmon;
        }
    </style>
</head>

<body>
    <!-- PENGKONDISIAN/PERCABANGAN PHP -->
    <?php
    // Pengkondisian/percabangan PHP terdiri dari
    // #1 if else
    // #2 if else if else
    // #3 ternary
    // #4 switch



    ?>
    <h1>PENGKONDISIAN/PERCABANGAN PHP</h1>

    <?php
    $i = 20;
    if ($i < 20) {
        echo "benar";
    } else if ($i == 20) {
        echo "bingo!";
    } else {
        echo "salah";
    }
    ?>

    <table border="1" cellpadding="10" cellspacing="0">
        <caption>table dg PHP template</caption>
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <!-- warnai baris yg genap dengan pengkondisian -->
            <?php if ($i % 2 == 0) : ?>
                <tr class="warna">
                <?php else : ?>
                <tr>
                <?php endif ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td> <?= "$i,$j"; ?> </td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
</body>

</html>