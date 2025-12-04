<!--Bermas, Estella Mae E.
    CYB-201
    December 4, 2025 -->
<?php
$user = 'Estella'; // Step 1: variable holding the user's name
$greet = 'Hello'; // Step 2: variable storing the message "Hello"
if (!empty($user)) { // Steps 3-4: if-statement to check if $user is not empty, updates to concatenate the user's name otherwise
    $greet = 'Hello, ' . $user . '!';
}

$product = 'Potted Succulent'; // Step 5: name of the product 

$cost = 10; // Modified Step 6: set cost to 10

$totals = [];
// Modified Step 7: loop up to 15 packs
for ($i = 1; $i <= 15; $i++) {
    $subtotal = $cost * $i; // Step 8: holds price of an individual pack of the product * i
    // Step 9: discount is percentage of the subtotal (4% per pack)
    $discount = $subtotal * (($i * 4) / 100);
    $totals[$i] = $subtotal - $discount; // Step 10: holds an array (subtotal-discount) with the key as the current value in the counter
} // Step 11: closed loop
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product - <?= $product; ?></title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php require __DIR__ . '/header.php'; ?> <!-- Step 12-: header for the page using the require keyword-->
  <div class="container">
    <h1><?= $greet; ?></h1> <!-- Step 13: greeting is written on the page -->
    <h2><?= $product; ?></h2> <!-- Step 14: name of the product is written on the page -->

    <div class="card">
      <table class="stock-table">
        <thead> <!-- Step 15: HTML table is created -->
          <tr> 
            <th>Quantity</th>
            <th>Price (after discount)</th>
          </tr>
        </thead>
        <tbody> <!-- Step 16: foreach loop used to display the data that was stored in the array -->
          <?php foreach ($totals as $quantity => $price): ?> <!-- Step 17: number of packs of product is written out (key for element of the array) -->
            <tr>
              <td><?= $quantity; ?> <?= $quantity === 1 ? 'pack' : 'packs'; ?></td> <!-- Step 18: text pack/packs is written out -->
              <td>₱<?= number_format($price, 2); ?></td> <!-- Step 19: the price for quantity of the product is handed out -->
            </tr>
          <?php endforeach; ?> <!-- Step 20: foreach loop is closed-->
        </tbody>
      </table>
    </div>
    <!-- Step 21: footer of the page is included using the keyword include-->
    <?php include __DIR__ . '/footer.php'; ?>
  </div>
</body>
</html>
