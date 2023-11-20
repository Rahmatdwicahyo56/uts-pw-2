<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Pembelian</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<?php
$products = array(
    array("nama" => "Pepsodent", "stok" => 30, "harga" => 10000),
    array("nama" => "Sunlight", "stok" => 15, "harga" => 11000),
    array("nama" => "Baygon", "stok" => 10, "harga" => 16000),
    array("nama" => "Dove", "stok" => 20, "harga" => 22000),
    array("nama" => "Rinso", "stok" => 20, "harga" => 20000),
    array("nama" => "Downy", "stok" => 15, "harga" => 12000),
    array("nama" => "Le Mineral", "stok" => 25, "harga" => 5000),
);

usort($products, function ($a, $b) {
    return strcmp($a['nama'], $b['nama']);
});

echo "<table>
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>";
$totalPurchase = 0;
foreach ($products as $id => $product) {
    $jumlah = $product['stok'] * $product['harga'];
    $totalPurchase += $jumlah;
    echo "<tr>
            <td>" . ($id + 1) . "</td>
            <td>{$product['nama']}</td>
            <td>{$product['stok']}</td>
            <td>Rp " . number_format($product['harga'], 0, ',', '.') . "</td>
            <td>Rp " . number_format($jumlah, 0, ',', '.') . "</td>
          </tr>";
}
echo "</table>";

echo "<p>Total Pembelian: Rp " . number_format($totalPurchase, 0, ',', '.') . "</p>";
?>

</body>
</html>