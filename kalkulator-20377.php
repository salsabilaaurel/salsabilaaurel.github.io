<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFE4C4;
        }

        .container {
            width: 400px;
            padding: 20px;
            margin: 50px auto;
            text-align: center;
        }

        h2 {
            margin-bottom: 10px;
        }

        input, select, button {
            width: 90%;
            padding: 8px;
            margin: 5px 0;
        }

        .hasil {
            margin-top: 15px;
            padding: 10px;
            background: #FFE4C4;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Tugas PHP - Switch Case</h2>

    <!-- identitas -->
    <p>Nama : Salsabila Aurellia</p>
    <p>NIS : 20377</p>
    <p>Kelas : X PPLG 1</p>

    <hr>

    <h3>Program Kalkulator Sederhana</h3>
    <p>dibuat dengan 💓 oleh Aurel</p>

    <hr>

    <!-- FORM INPUT -->
    <form method="post">

        <input type="number" name="angka1" placeholder="Masukkan Angka 1">

        <input type="number" name="angka2" placeholder="Masukkan Angka 2">

        <select name="operasi" required>
            <option value=""> Pilih Operasi </option>
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
            <option value="kuadrat">Kuadrat</option>
            <option value="exit">Exit</option>
        </select>

        <button type="submit" name="hitung">Proses</button>

    </form>

    <!-- PHP PROSES -->
    <?php

    if (isset($_POST['hitung'])) {

        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];

        switch ($operasi) {

            case "tambah":
                $hasil = $angka1 + $angka2;
                echo "<div class='hasil'>Hasil Tambah = $hasil</div>";
                break;

            case "kurang":
                $hasil = $angka1 - $angka2;
                echo "<div class='hasil'>Hasil Kurang = $hasil</div>";
                break;

            case "kali":
                $hasil = $angka1 * $angka2;
                echo "<div class='hasil'>Hasil Kali = $hasil</div>";
                break;

            case "bagi":

                if ($angka2 == 0) {
                    echo "<div class='hasil'>Tidak bisa dibagi dengan 0</div>";
                } else {
                    $hasil = $angka1 / $angka2;
                    echo "<div class='hasil'>Hasil Bagi = $hasil</div>";
                }

                break;

            case "kuadrat":
                $hasil = $angka1 * $angka1;
                echo "<div class='hasil'>Hasil Kuadrat = $hasil</div>";
                break;

            case "exit":
                header("Location: kalkulator-20377.php");
                exit();
                break;

            default:
                echo "<div class='hasil'>Pilih operasi terlebih dahulu</div>";
                break;
        }
    }

    ?>

</div>

</body>
</html>