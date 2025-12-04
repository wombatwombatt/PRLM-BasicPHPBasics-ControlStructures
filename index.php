<!--Bermas, Estella Mae E.
    CYB-201
    December 4, 2025 -->
<?php 
    $user = 'Estella'; //Step 1: variable holding visitor's username
    $pagbati = 'Hello, ' . $user; //Step 2: variable containing greeting using concatenation
    $offer = ['Potted Cacti', 3, 120, 95]; //Step 3: [item, quantity, normal price per pack, discounted price per pack]

    // Step 4: regular price (without discount) 
    // NOTE: Followed the first instruction instead of naming it $usual_price
    $reg_price = $offer[1] * $offer[2];

    // Step 5: offer price (with discount)
    $offer_price = $offer[1] * $offer[3];

    // Step 6: variable giving the total saving value of the customer
    $saving = $reg_price - $offer_price;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - Green Thumb Succulents</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php include __DIR__ . '/header.php'; ?>
  <div class="container">
    <h1>Green Thumb Succulents</h1>

    <div class="card">
      <h2><?= $pagbati; ?></h2> <!-- Step 7: greeting displayed using shorthand echo command -->

      <p class="muted">Special offer: Buy <?= $offer[1]; ?> packs of <?= $offer[0]; ?> and get the discounted price!
        Don't miss out on this limited-time offer!</p> <!-- Step 9: paragraph, shows quantity offer requirement -->
      
      <!-- Step 10: shows discounted price  -->
      <p class="box">Regular price: ₱<?= number_format($reg_price, 2); ?> — Offer price: ₱<?= number_format($offer_price, 2); ?></p>  
    </div>

    <?php include __DIR__ . '/footer.php'; ?>
  </div>

  <div class="saving-badge">Save ₱<?= number_format($saving, 2); ?></div> <!-- Step 8: shows a circle containing the total saving -->
</body>
</html>