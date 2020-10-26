<?php 
  // For loops
  
  
  // for($i = 0; $i < 5; $i++) {
  // echo 'some code';
  // }

  $players = ['messi', 'suarez', 'neymar'];

  // for($i = 0; $i < count($players); $i++) {
  //   echo $players[$i] . '<br />';
  // }

  // using foreach
  // foreach($players as $player) {
  //   echo $player . '<br />';
  // }

  $products = [
    ['name' => 'shiny star', 'price' => 11],
    ['name' => 'green shell', 'price' => 33],
    ['name' => 'red shell', 'price' => 21],
    ['name' => 'gold coin', 'price' => 45],
    ['name' => 'lightning bolt', 'price' => 35],
    ['name' => 'banana skin', 'price' => 16],
  ];

  // foreach ( array looping)
  // foreach($blogs as $blog) {
    // echo 'some template';
  //   // }
  // foreach($products as $product) {
  //   echo $product['name'] ." - ". $product['price'] . '<br>';
  // }

  // while loop

  // $i = 0;

  // while($i < count($products)) {
  //   echo $products[$i]['name'] . " - " . $products[$i]['price'];
  //   echo '<br>';
  //   $i++;
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
  <h1>Products</h1>
    
    
    <ul>
    <!-- this is a php template  -->
      <?php foreach($products as $product) { ?>
        <h3><?php echo $product['name']; ?></h3>
        <p>💰 <?php echo $product['price']; ?></p>
      <?php } ?>
    </ul>

</body>
</html>