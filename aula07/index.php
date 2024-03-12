<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  require_once './Lutador.php';
  $l = array();
  $l[0] = new Lutador('Gilmar', 'BR', 26, 1.80, 70);
  $l[1] = new Lutador('Gustavo', 'US', 23, 1.80, 81);
  $l[2] = new Lutador('Antonio', 'EN', 56, 1.90, 81);
  $l[3] = new Lutador('Billy', 'UK', 18, 1.30, 55);


  $l[3]->ganharLuta();
  $l[1]->ganharLuta();
  $l[2]->perderLuta();
  $l[3]->empatarLuta();
  $l[3]->ganharLuta();
  $l[1]->apresentar();
  echo "<pre>";
  print_r($l);
  echo "</pre>";
  ?>
</body>

</html>