<?php 
  // Conditional Statements
  // $price = 20;

  // if($price < 10) {
  //   echo 'the condition is met';
  // } else if($price < 30) {
  //   echo 'the else if condition is met';
  // } else {
  //   echo 'condition not met';
  // }



  $products = [
    ['name' => 'red shell', 'price' => 5],
    ['name' => 'shiny star', 'price' => 24],
    ['name' => 'bronze star', 'price' => 21],
    ['name' => 'silver palate', 'price' => 3],
    ['name' => 'skeleton', 'price' => 10],
    ['name' => 'golden rod', 'price' => 2],
  ];
  
  // foreach($products as $product) {
    // if($product['price'] < 10 && $product['price'] > 2) {
    //   echo $product['name'] . " - " . $product['price'] . '<br>';
    // }
    // if($product['price'] > 30 || $product['price'] < 10) {
    //   echo $product['name'] . " - " . $product['price'] . '<br>';
    // }
  // }

  // echo use to print out code 
  // echo "My first PHP code in the browser.";
  // // always use semicolon;
  // echo "My first PHP code in the browser.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String</title>
</head>
<body>
  <h1>Conditional Statements</h1>
    
    <div>
    <h3>Price less than 15</h3>
      <ul>
        <?php foreach($products as $product) { ?>
          <?php if($product['price'] < 15) { ?>
            <li><?php echo $product['name'] . ' - ' . $product['price'] ?></li>
          <?php } ?>
        <?php } ?>
      </ul>
    </div>

</body>
</html>