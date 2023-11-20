<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
    <title>Tabel Harga Barang</title>
</head>
<body>

<?php
// Tabel Harga Barang Data
$data = [
    [1, 'Pepsodent', 30, 10000],
    [2, 'Sunlight', 15, 11000],
    [3, 'Baygon', 10, 16000],
    [4, 'Dove', 20, 22000],
    [5, 'Rinso', 20, 20000],
    [6, 'Downy', 15, 12000],
    [7, 'Le Mineral', 25, 5000]
];

// Calculate and update 'Jumlah' column
foreach ($data as &$row) {
    $row[] = $row[2] * $row[3];
}
unset($row); // Unset reference

// Calculate total amount
$totalAmount = array_sum(array_column($data, 4));
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) : ?>
            <tr>
                <?php foreach ($row as $index => $cell) : ?>
                    <?php if ($index == 3 || $index == 4) : ?>
                        <td>Rp<?= number_format($cell, 0, ',', '.') ?></td>
                    <?php else : ?>
                        <td><?= $cell ?></td>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4" style="text-align: right;">Total Amount:</td>
            <td>Rp<?= number_format($totalAmount, 0, ',', '.') ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>