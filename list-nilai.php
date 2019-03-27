<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List Nilai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>

    <header>
        <h3>List Nilai Mahasiswa</h3>
    </header>

    <nav>
        <a href="form-input.php">[+] Input Nilai</a>||<a href="index.php"> Home</a>
    </nav>


    <br>

    <table border="1">
        <thead>
            <tr>
                <!-- <th>No</th> -->
                <th>Nama</th>
                <th>Nilai Tugas</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Hasil</th>
                <th>Aksi</th>
            </tr>

        </thead>



        <tbody>

            <?php
            $sql = "SELECT * FROM tb_nilai";
            $query = mysqli_query($db, $sql);

            while ($nilai = mysqli_fetch_array($query)) {
                echo "<tr>";

                // echo "<td>".$nilai['id']."</td>";
                echo "<td>" . $nilai['nama'] . "</td>";
                echo "<td>" . $nilai['nilaiTugas'] . "</td>";
                echo "<td>" . $nilai['nilaiUts'] . "</td>";
                echo "<td>" . $nilai['nilaiUas'] . "</td>";
                echo "<td>" . $nilai['hasil'] . "</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id=" . $nilai['id'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?id=" . $nilai['id'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html> 