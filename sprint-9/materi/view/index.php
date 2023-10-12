<?php
include_once "../controller/class.php";
use Data\{Laptop, Produk};
use function Data\SayHi;
use const Data\AUTHOR;

$produk = new Produk();
$index = $produk->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th></th>
        </thead>
        <tbody>
            <?php foreach ($index as $value): ?>
            <td><?= $value["name"] ?></td>
            <td><?= $value["brand"] ?></td>
            <td><?= $value["description"] ?></td>
            <td><?= $value["stock"] ?></td>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>