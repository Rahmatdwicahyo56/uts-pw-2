<?php
// Soal A: Lengkapi tabel dengan perhitungan dan tampilkan total pembelian
$products = array(
    array("Pepsodent", 30, 10000),
    array("Sunlight", 15, 11000),
    array("Baygon", 10, 16000),
    array("Dove", 20, 22000),
    array("Rinso", 20, 20000),
    array("Downy", 15, 12000),
    array("Le Mineral", 25, 5000),
);

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
    $jumlah = $product[1] * $product[2];
    $totalPurchase += $jumlah;
    echo "<tr>
            <td>" . ($id + 1) . "</td>
            <td>{$product[0]}</td>
            <td>{$product[1]}</td>
            <td>{$product[2]}</td>
            <td>$jumlah</td>
          </tr>";
}
echo "</table>";

// Soal B: Hitung diskon dan total pembayaran
$date = "08 November 2023"; // Ganti dengan tanggal transaksi yang diinginkan
$discount = 0;

$productsPurchased = array(
    array("Pepsodent", 7, 10000),
    array("Rinso", 5, 20000),
    array("Downy", 2, 12000),
    array("Dove", 2, 22000),
);

echo "<p>Tanggal Transaksi: $date</p>";
echo "<p>Produk:</p>";
foreach ($productsPurchased as $product) {
    $productName = $product[0];
    $quantity = $product[1];
    $price = $product[2];
    $subtotal = $quantity * $price;
    echo "$productName ($quantity X $price): $subtotal<br>";
}

$totalAfterDiscount = $totalPurchase * (1 - $discount / 100);

echo "<p>Total: $totalPurchase</p>";
echo "<p>Diskon: $discount%</p>";
echo "<p>Total Pembayaran: $totalAfterDiscount</p>";
?>