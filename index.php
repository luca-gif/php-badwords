<?php
var_dump($_GET);
$censured = $_GET['censured'];

$text = "Lorem ipsum dolor sit amet $censured adipisicing elit. Magni iusto, earum perferendis $censured ullam nam necessitatibus ad. Cumque, voluptate similique.";


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

  <h1><?php  ?></h1>


</body>

</html>