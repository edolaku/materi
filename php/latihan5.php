<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>
    <style>
        .kotak {
            width: 100px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <!-- ARRAY PHP -->
    <h1>ARRAY PHP</h1>
    <!-- Array => variabel yg dapat memiliki banyak nilai -->

    <?php 
        $bulan = ["januari", "pebruari", "maret"];
        echo $bulan[1];
    ?>

<br>

    <?php
        // cek apa saja yg ada di dalam array
        var_dump($bulan);

        // menambahkan element baru pada array
        $bulan[]="april";
        echo "<br>";
        var_dump($bulan);
    ?>

<br>

    <!-- melakukan pengulangan array dengan for -->
    <?php for ($i=0; $i < count($bulan) ; $i++) { ?>
        <div class="kotak">
            <?php echo $bulan[$i]; ?>
        </div>
    <?php } ?>

<div class="clear"></div>

    <!-- melakukan pengulangan array dengan foreach -->
    <?php foreach ($bulan as $a) { ?>
        <div class="kotak">
            <?php echo $a; ?>
        </div>
    <?php } ?>
 

</body>

</html>