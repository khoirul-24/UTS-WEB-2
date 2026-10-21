
<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h2>To-Do List Sederhana</h2>

    <?php
    $file = "tugas.txt";

    if (!file_exists($file)) {
        file_put_contents($file, "");
    }

    if (isset($_POST['tambah'])) {
        $tugas = trim($_POST['tugas']);

        if ($tugas != "") {
            file_put_contents($file, $tugas . "\n", FILE_APPEND);
        }
    }

    if (isset($_POST['hapus'])) {
        file_put_contents($file, "");
    }
    ?>

    <form method="post">
        <label>Nama tugas:</label>
        <input type="text" name="tugas" required>
        <button type="submit" name="tambah">Tambah Tugas</button>
    </form>

    <h3>Daftar Tugas</h3>

    <?php
    $daftarTugas = file($file);

    if (count($daftarTugas) > 0) {
        echo "<ol>";

        foreach ($daftarTugas as $tugas) {
            echo "<li>" . trim($tugas) . "</li>";
        }

        echo "</ol>";
    } else {
        echo "Belum ada tugas sama sekali.";
    }
    ?>

    <form method="post"
        onsubmit="return confirm('Yakin mau menghapus semua tugas kamu?')">
        <button type="submit" name="hapus">Hapus Semua Tugas</button>
    </form>

</body>
</html>
