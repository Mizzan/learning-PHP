<?php 
  // Functions
  function sayHello($name = 'mizan', $fromType = 'function') {
    echo "Well,hello $name straight from the $fromType.";
  }

  sayHello('raju');
  
  function formatProduct($product) {
    // echo "{$product['name']} costs 💰{$product['price']} to buy <br>.";
    return "{$product['name']} costs 💰{$product['price']} to buy <br>.";
  }

  $formated = formatProduct(['name' => 'gold star', 'price' => '20']);
  // echo $formated;

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