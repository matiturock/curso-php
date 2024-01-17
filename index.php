<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <h1>Hola, este es un curso de PHP</h1>
  <!-- Esto es un comentario en HTML -->

  <?php
  // ARRAY
  $frutas = array("manzana", "pera", "uva", "naranja");

  for ($i = 1; $i <= 10; $i++) {
    echo $frutas[$i];
  }

  ?>

  <footer>
    Esto es un footer
  </footer>

</body>

</html>