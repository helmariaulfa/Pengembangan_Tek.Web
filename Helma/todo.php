<?php
// Inisialisasi daftar tugas kosong
$tasks = [];

// Mengecek apakah ada data POST yang dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengecek apakah tombol "Add Task" ditekan
    if (isset($_POST["addTask"])) {
        // Mengecek apakah input tugas tidak kosong
        if (!empty($_POST["task"])) {
            // Menambahkan tugas baru ke dalam daftar tugas
            $tasks[] = $_POST["task"];
        }
    }
}

// Menampilkan daftar tugas
if (!empty($tasks)) {
    echo "<h3>Tasks:</h3>";
    echo "<ul>";
    foreach ($tasks as $task) {
        echo "<li>$task</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No tasks yet.</p>";
}
?>
