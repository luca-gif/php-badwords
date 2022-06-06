<?php

#Preparo il testo originale

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni iusto, earum perferendis consequatur ullam nam consectetur necessitatibus ad. Cumque, consectetur voluptate similique.";

#Controllo che l'Array non sia vuoto

if (!empty($_GET)) {

  #Assegno alla variabile il valore della query string

  $censuredWord = $_GET['censured'];
};

#Creo contatore per le parole censurate

$parolecensurate = 0;

#Rimpiazzo le badwords con gli asterischi

$censuredText = str_ireplace($censuredWord, '***', $text, $parolecensurate);

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
  <h1>Parole censurate: <?php echo $parolecensurate ?></h1>


</body>

</html>