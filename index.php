<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>

    <header>
    <h1>SKKNI BPPTIK<h1>
        <h3>Input Nilai Mahasiswa<h3>
               
    </header>

    <h4>Menu<h4>
            <nav>
                <ul>
                    <li><a href="form-input.php">Input Nilai</a></li>
                    <li><a href="list-nilai.php">List Nilai</a></li>
            </nav>
            <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if ($_GET['status'] == 'sukses') {
                    echo "Input Nilai Berhasil!";
                } else {
                    echo "Input Nilai Gagal!";
                }
                ?>
            </p>
            <?php endif; ?>

</body>

</html> 