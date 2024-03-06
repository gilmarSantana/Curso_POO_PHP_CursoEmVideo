<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gilmar's Microwave</title>
</head>

<body>
  <?php
  require_once './Microwave.php';
  $m = new Microwave();
  $m->usePopcorn();

  $m->play();

  ?>
</body>

</html>