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
    <!-- ARRAY MULTIDIMENSI PHP -->
    <h1>ARRAY PHP</h1>
    <!-- Array => variabel yg dapat memiliki banyak nilai -->
    <!-- Array multidimensi => Array di dalam array -->


    <?php 
        // ini adalah array numerik
        $pgw = [
            ["Edho Paradnya Parisudha", "Bagian Umum", "III/b"],
            ["Wahyu Ari", "Bagian PBJ", "III/b"],
            ["Nurul Prasetyo", "Bagian Umum", "III/a"]
        ];
        echo $pgw[1];
    ?>

<ul>
    <?php
    // ini untuk mencetak array numerik
    for ($i=0; $i < count($pgw); $i++) { ?>
        <li> Nama: <?php echo $pgw[$i][0]; ?> </li>
        <li> Bagian: <?php echo $pgw[$i][1]; ?> </li>
        <li> Pangkat: <?php echo $pgw[$i][2]; ?> </li>
        <br>
    <?php } ?>
</ul>
</body>

</html>