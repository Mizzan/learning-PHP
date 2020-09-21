<?php 
  // var can not start with number and special char 
  // can be start with letter and _ (underscore), camelCase, Capital Letter

  $aSimpleVar = 'Hello World by PHP';
  $aNumber = 40;
  
  // Constant 
  define('NAME', "Mizan");

  // echo use to print out code 
  echo "My first PHP code in the browser.";
  // always use semicolon;
  echo "My first PHP code in the browser.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My First PHP file</title>
</head>
<body>
  <h1><?php echo $aSimpleVar; ?></h1>
  <h3><?php echo $aNumber; ?></h3>
  <p><?php echo NAME; ?></p>
</body>
</html>