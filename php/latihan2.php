<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan PHP</title>
</head>

<body>
    <!-- MEMBUAT TABEL MENGGUNAKAN PERULANGAN PHP -->
    <h1>MEMBUAT TABEL MENGGUNAKAN PERULANGAN PHP</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <caption>table dg html biasa</caption>
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>

        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
        </tr>

        <table border="1" cellpadding="10" cellspacing="0">
            <caption>table dg PHP</caption>
            <?php
            // buat barisnya (2 baris)
            for ($i = 1; $i <= 2; $i++) {
                echo "<tr>";
                // buat kolom (3 kolom)
                for ($j = 1; $j <= 3; $j++) {
                    echo "<td> php table $i,$j </td>";
                }
                echo "</tr>";
            }
            ?>

            <table border="1" cellpadding="10" cellspacing="0">
                <caption>table dg PHP template</caption>
                <!-- buat template php hanya untuk kode php, dan keluarkan tag html dari tag php -->

                <!-- kurung kurawal buka disini dapat diganti dengan tanda ":" , kurung kurawal tutup jg diubah (bukan }) -->
                <?php for ($i = 1; $i <= 2; $i++) : ?>
                    <tr>
                        <!-- kurung kurawal buka disini dapat diganti dengan tanda ":", kurung kurawal tutup jg diubah (bukan }) -->
                        <?php for ($j = 1; $j <= 3; $j++) : ?>

                            <!-- echo jg dapat diganti seperti contoh dibawah -->
                            <td> <?= "$i,$j"; ?> </td>
                            <!-- kurung kurawal tutup diganti dengan endfor, karena kurung kurawal buka diganti dg : , artinya jika dimulai dengan foreach, maka diganti dengan endforeach" -->
                        <?php endfor; ?>
                    </tr>
                    <!-- kurung kurawal tutup diganti dengan endfor, karena kurung kurawal buka diganti dg : , artinya jika dimulai dengan foreach, maka diganti dengan endforeach"  -->
                <?php endfor; ?>

            </table>
</body>

</html>