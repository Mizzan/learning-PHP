<?php 
  // Array ( indexed array )
  
  $peopleOne = ['mizan', 'messi', 'ryu', 'saitama'];
  $peopleTwo = array('goku','vageta', 'kensye');
  
  // echo $peopleOne[2];
  // echo $peopleTwo[1];

  // echo array using print_r
  $ages = [20, 30, 23, 50];
  // print_r($ages);
  
  // overwriting value
  $ages[1] = 99;
  // print_r($ages);


  // adding value
  $ages[] = 999;
  // print_r($ages);

  // adding value
  array_push($ages, 444);
  // print_r($ages);
  
  
  // count value
  // echo count($ages);
  

  // removing value
  array_pop($ages);
  // print_r($ages);
  
  // merging array
  $peopleThree = array_merge($peopleOne, $peopleTwo);
  // print_r($peopleThree);



  // Array ( associative array ) other name key value pair

  $ufcPlayer = ['khabib' => 'lightweight', 'tony ferguson' => 'lightweight', 'khamzat' => "middleweight"];
  // print_r($ufcPlayer);
  // echo $ufcPlayer['khamzat'];
  
  
  // adding new value pair
  $ufcPlayer['stipe'] = 'heavyweight';
  // print_r($ufcPlayer);

  // overwriting  value pair
  $ufcPlayer['stipe'] = 'bantamweight';
  // print_r($ufcPlayer);
  
  // echo count($ufcPlayer);

  
  // merging array
  $arrayMerge = array_merge($peopleTwo, $ufcPlayer);
  print_r($arrayMerge);


  
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