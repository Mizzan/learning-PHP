<?php 
  // variable scope

  // local vars 
  function myFunc() {
    $price = 10;
    echo $price;
  }

  // myFunc();

  function myFunc2($age) {
    echo $age;
  }
  
  // myFunc2(23);

  // global variable 

  // we access global variable using the global word putting it in first.

  $name = "mario";
  // function sayHello() {
  //   global $name;
  //   $name = 'yoshi';
  //   echo "hello $name"; // it will print the "yoshi" because it sees the local variable first.
  // }

  // sayHello();
  // echo $name; // it will print the yoshi as we have changed the value inside the function.

  function sayBye(&$name) { // using & we are referencing the global vars
    $name = 'wario'; // changing the vars value
    echo "hello $name";
  }

  sayBye($name);
  echo $name;


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