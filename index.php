<?php

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni iusto, earum perferendis consequatur ullam nam necessitatibus ad. Cumque, voluptate similique.";

var_dump($_GET);
$censured = $_GET['censured'];

$censuredText = str_ireplace($censured, '***', $text);


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

  <h1><?php echo $text ?></h1>
  <h1><?php echo strlen($text) ?></h1>

  <h1><?php echo $censuredText ?></h1>
  <h1><?php echo strlen($censuredText) ?></h1>


</body>

</html>