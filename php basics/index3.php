<?php

// multi-dimensional arrays
$blogs = [
    ['title' => 'nairobigossip', 'author' => 'krg', 'content' => 'ghafla', 'likes' => 100],
    ['title' => 'ghafla', 'author' => 'nganuthia', 'content' => 'punitics', 'likes' => 10],
    ['title' => 'soccerbro', 'author' => 'dizzo', 'content' => 'EPl', 'likes' => 1500],
];

$blogs[] = ['title' => 'sherehe', 'author' => 'kifee', 'content' => 'party', 'likes' => 230];

//print_r($blogs);
$popped = array_pop($blogs);
print_r($popped);

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


