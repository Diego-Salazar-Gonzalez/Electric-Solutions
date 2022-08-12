<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/build/css/app.css">
   <link rel="icon" href="/build/img/ag-icon.png"> 
  <title>Electric Solutions</title>
</head>
<body>

    <?php echo $contenido; ?>

    <?php if($titulo === '') {?>
    <script src="/build/js/app.js"></script>
    <?php }else {?>
    <script src="/build/js/barra2.js"></script>
    <?php }?>
    
</body>
</html>