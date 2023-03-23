<?php 
        
    // indexed arrays

    $peopleOne = ['shaun', 'gordon', 'eric'];
    // echo $peopleone[1];
    $peopleTwo = array('ken', 'chun-li');
    // echo $peopleTwo[1];

    $ages = [20, 30, 40, 50];
    //print_r($ages);
    $ages[1] = 25;
    //print_r($ages);
    $ages[] = 60;
    //print_r($ages);

    array_push($ages, 70);
    //print_r($ages);

    //echo count($ages);

    $peopleThree = array_merge($peopleOne, $peopleTwo);
    //print_r($peopleThree);

    // associative arrays (key and value pairs)
    $broOne = ['shaun' => 'black', 'casper' => 'orange', 'marto' => 'black'];
    // echo $broOne['casper'];
    //print_r($broOne);

    $broTwo = array('jj' => 'green', 'ab' => 'red', 'jay' => 'yellow');
    //print_r($broTwo);

    $broTwo['peach'] = 'pink';
    //print_r($broTwo);

    //echo count ($broTwo);

    $broThree = array_merge($broOne, $broTwo);
    print_r($broThree);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
