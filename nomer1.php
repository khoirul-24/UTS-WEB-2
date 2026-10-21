
<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>

    <form method="post">
        <label>Masukan nilai 1</label>
        <input type="number" name="angka1" step="any" required>
        <br><br>

        <label>Masukan nilai 2</label>
        <input type="number" name="angka2" step="any" required>
        <br><br>

        <label>Operator:</label>
        <select name="operator">
            <option value="+">Penjumlahan (+)</option>
            <option value="-">Pengurangan (-)</option>
            <option value="">Perkalian ()</option>
            <option value="/">Pembagian (/)</option>
        </select>
        <br><br>
        <input type="submit" name="hitung">
    </form>

    <?php
    function kalkulator($a, $b, $operator) {
        switch ($operator) {
            case "+":
                return $a + $b;
            case "-":
                return $a - $b;
            case "*":
                return $a * $b;
            case "/":
                if ($b == 0) {
                    return "Tidak bisa dibagi dengan nol";
                }
                return $a / $b;
            default:
                return $a * $b;
        }
    }

    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];

        $hasil = kalkulator($angka1, $angka2, $operator);

        echo "<h3>hasil: $hasil</h3>";
    }
    ?>
</body>
</html>