<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Todo</title>
</head>
<body>
<h2>Pengemnangan WEB "To Do List"</h2>
    <form method="post" action="index.php">
        <input type="text" name="task" placeholder="Enter your task">
        <button type="submit" name="addTask">Tambahkan data</button>
    </form>
</h2>
<?php
include "todo.php";
?>
</body>
</html>
