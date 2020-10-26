<?php 
  // string 
  $stringOne = 'my email is ';
  $stringTwo = 'noobinphp@gmail.com';

  // concatinate the string
  // echo $stringOne .  $stringTwo;


  // concatinate with string
  $name = 'Mizan';

  // echo 'Hey, my name is ' . $name;
  
  // double qoute for puting var into string
  // echo "Hey, my name is $name";
  

  // double quoute for skipping use.
  // echo "What's your name , \"dude\" ? ";

  // finding certain char into string 
  // echo $name[0] // start index char 0

  // string function
  // echo strlen($name);
  
  // string function
  // echo strtoupper($name);
  
  // echo strtolower($name);
  
  echo str_replace('M', 's', $name);
  
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
  <h1>PHP String</h1>
</body>
</html>