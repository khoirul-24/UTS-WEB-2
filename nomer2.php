
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Belanja</title>
</head>
<body>
    <h2>Total Belanja</h2>

    <?php
    $barang = array(
        "Buku" => 5000,
        "Pulpen" => 3000,
        "Pensil" => 2000,
        "Penghapus" => 1500
    );
    ?>

    <form method="post">
        <h3>Pilih Barang dan Jumlahnya</h3>

        <?php
        foreach ($barang as $nama => $harga) {
            echo $nama . " - Rp " . $harga;
            echo " <input type='number' name='jumlah[$nama]' min='0' value='0'>";
            echo "<br><br>";
        }
        ?>

        <button type="submit" name="hitung">Hitung Total</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $total = 0;

        echo "<h3>Rincian Belanja</h3>";

        foreach ($barang as $nama => $harga) {
            $jumlah = (int) $_POST['jumlah'][$nama];

            if ($jumlah > 0) {
                $subtotal = $harga * $jumlah;
                $total = $total + $subtotal;

                echo $nama . " x " . $jumlah;
                echo " = Rp " . $subtotal . "<br>";
            }
        }

        echo "<h3>Total Belanja: Rp " . $total . "</h3>";
    }
    ?>
</body>
</html>
