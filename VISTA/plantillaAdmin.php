<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link href="<?php echo constant('URL');?>PUBLICO/CSS/fontawesome-free-5.8.2-web/css/all.css" rel="stylesheet">

  	<!-- Custom stlylesheet -->
  	<link type="text/css" rel="stylesheet" href="<?php echo constant('URL');?>PUBLICO/css/style.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo constant('URL');?>PUBLICO\CSS\estilosAdmin.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="<?php echo constant('URL');?>PUBLICO\JS\action.js">

    </script>

    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="">
      <?php
      include "encabezado.php";
      $vista = constant('VISTA');
      include "ADMINISTRADOR/$vista/$vista.php";
      ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      (function() {

        var nav = $('nav'),
          menu = $('nav h1'),
          main = $('main'),
          open = false,
          hover = false;

        menu.on('click', function() {
          open = !open ? true : false;
          nav.toggleClass('menu-active');
          main.toggleClass('menu-active');
          nav.removeClass('menu-hover');
          main.removeClass('menu-hover');
          console.log(open);
        });
        menu.hover(
          function() {
            if (!open) {
              nav.addClass('menu-hover');
              main.addClass('menu-hover');
            }
          },
          function() {
            nav.removeClass('menu-hover');
            main.removeClass('menu-hover');
          }
        );

      })();
      function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;

        return /\d/.test(String.fromCharCode(keynum));
        }

        $(document).ready( function () {
          $('#table_id').DataTable();
        } );

    </script>

  </body>
</html>
