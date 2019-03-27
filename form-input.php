<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Input Nilai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>

    <header>
        <h3>Input Nilai Mahasiswa<h3>
    </header>

    <form action="proses-input.php" method="POST">

        <fieldset>

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" />
            </p>

            <p>
                <label for="nilaiTugas">Nilai Tugas: </label>
                <input type="number" name="nilaiTugas" placeholder="0-100" />
            </p>

            <p>
                <label for="nilaiUts">Nilai UTS: </label>
                <input type="number" name="nilaiUts" placeholder="0-100" />
            </p>

            <p>
                <label for="nilaiUas">Nilai UAS: </label>
                <input type="number" name="nilaiUas" placeholder="0-100" />
            </p>

            <p>
                <label for="hasil">Hasil: </label>
                <input type="text" name="hasil" placeholder="Hasil" />
            </p>

            <p>
                <input type="submit" value="Masukan Nilai" name="input" />
                <input type="button" value="Cancle" onclick="window.location.href='list-nilai.php'" />
            </p>

        </fieldset>

    </form>

</body>

</html> 