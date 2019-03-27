<?php

include("config.php");

// Cek tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-nilai.php');
}

// Mengambil id dari query string
$id = $_GET['id'];

// Membuat query untuk mengambil data dari database
$sql = "SELECT * FROM tb_nilai WHERE id=$id";
$query = mysqli_query($db, $sql);
$nilai = mysqli_fetch_assoc($query);

// Jika data yang di edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Edit Nilai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>

    <header>
        <h3>Form Edit Nilai<h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $nilai['id'] ?>" />

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" value="<?php echo $nilai['nama'] ?>" placeholder="Nama Lengkap" />
            </p>

            <p>
                <label for="nilaiTugas">Nilai Tugas: </label>
                <input type="number" name="nilaiTugas" value="<?php echo $nilai['nilaiTugas'] ?>" placeholder="0-100" />
            </p>

            <p>
                <label for="nilaiUts">Nilai UTS: </label>
                <input type="number" name="nilaiUts" value="<?php echo $nilai['nilaiUts'] ?>" placeholder="0-100" />
            </p>

            <p>
                <label for="nilaiUas">Nilai UAS: </label>
                <input type="number" name="nilaiUas" value="<?php echo $nilai['nilaiUas'] ?>" placeholder="0-100" />
            </p>

            <p>
                <label for="hasil">Hasil: </label>
                <input type="text" name="hasil" value="<?php echo $nilai['hasil'] ?>" placeholder="Hasil" />
            </p>

            <p>
                <input type="submit" value="Edit Nilai" name="input" />
                <input type="button" value="Cancle" onclick="window.location.href='list-nilai.php'" />
            </p>

        </fieldset>

    </form>


</body>

</html> 