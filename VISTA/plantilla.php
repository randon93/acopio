<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">
  <link href="<?php echo constant('URL');?>PUBLICO/CSS/fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="<?php echo constant('URL');?>PUBLICO/css/style.css" />
  <link type="text/css" rel="stylesheet" href="<?php echo constant('URL');?>PUBLICO\CSS\estilosAdmin.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="<?php echo constant('URL');?>PUBLICO\JS\action.js">

  </script>

  <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
<?php
      $vista = constant('VISTA');
      $carpeta = constant('CARPETA');
      include "$carpeta/index$vista.php";
?>
</body>

</html>