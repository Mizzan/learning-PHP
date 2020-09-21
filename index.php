<?php 

  $products = [
    ['name' => 'red shell', 'price' => 5],
    ['name' => 'shiny star', 'price' => 24],
    ['name' => 'bronze star', 'price' => 21],
    ['name' => 'silver palate', 'price' => 3],
    ['name' => 'skeleton', 'price' => 10],
    ['name' => 'golden rod', 'price' => 2],
  ];
  
  foreach($products as $product) {
    if($product['name'] === 'silver palate') {
      break;
    }
    if($product['price'] > 10) {
      continue;
    }
    echo $product['name'] . '<br>';
  }

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
  <h1>Continue & Break</h1>
    
   

</body>
</html>