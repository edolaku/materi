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
    // ----- Associative Array -----
    // Associative Array => definisinya sama dg array numerik, namun key-nya kita buat sendiri
    $pgw = [
        [
            "nama" => "Edho Paradnya Parisudha",
            "bagian" => "Bagian Umum",
            "pangkat" => "III/b",
        ],
        [
            "nama" => "Wahyu Ari",
            "bagian" => "Bagian PBJ",
            "pangkat" => "III/b"
        ],
        [
            "nama" => "Nurul Prasetyo",
            "bagian" => "Bagian Umum",
            "pangkat" => "III/a"
        ]
    ];

    ?>

    <ul>
        <li>
            Nama: <?php
                    // cara memanggil associative array
                    echo $pgw[2]["nama"];
                    ?>
        </li>
    </ul>

    <div class="clear"></div>

    <ul>
        <?php foreach ($pgw as $key) {
            foreach ($key as $k) { ?>
                <li>
                    Nama: <?php
                            // cara memanggil associative array
                            echo $k;
                            ?>
                </li>
            <?php } ?>
            <br>
        <?php } ?>
    </ul>


    <ul>
        <?php foreach ($pgw as $key) { ?>

            <li>
                Nama: <?php
                        // cara memanggil associative array
                        echo $key["nama"];
                        ?>
            </li>

        <?php } ?>
    </ul>

    <br>

    <ul>
        <?php for ($a = 0; $a < count($pgw); $a++) { ?>
            <?php
            // cara memanggil associative array
            echo $pgw[$a]["nama"];
            // ini tidak bisa menggunakan for lagi, karena for mengembalikan indeks dalam bentuk angka, sedangkan ini key-nya sudah bukan angka lg, melainkan sudah ditentukan oleh pembuat
            foreach ($pgw[$a] as $res) { ?>
                <li>
                    <?php echo $res; ?>
                </li>

        <?php }
        }
        ?>
    </ul>


</body>

</html>