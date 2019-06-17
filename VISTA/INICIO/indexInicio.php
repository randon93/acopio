<button type="button" class="btn btn-outline-light botonSesion" data-toggle="modal" data-target="#modalSesion">Iniciar
    Sesion</button>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <!-- <span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span> -->
    <span class="site-heading-lower">Acopio B<sub>3</sub>L<sup>2</sup></span>
  </h1>

  <div class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="#home">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="#produc">Productos</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="#Contac">Contactanos</a>
          </li>
          <!-- <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store.html">Store</a>
            </li> -->
        </ul>
      </div>
    </div>
  </div>
  <section class="page-section clearfix" id="home">
    <div class="container">
      <div class="intro">
        <img style="height: 600px;" class="intro-img img-fluid mb-3 mb-lg-0 rounded"
          src="<?php echo constant('URL');?>PUBLICO/IMAGENES/CAFE6.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Cafe Fresco?</span>
            <span class="section-heading-lower">Trabaja con Nosotros</span>
          </h2>
          <p class="mb-3">
            Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try
            it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="page-section" id="produc">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Productos 100% Nacionales</span>
              <span class="section-heading-lower">Apoyando lo Nuestro</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
          src="<?php echo constant('URL');?>PUBLICO/IMAGENES/products-03.jpg" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Travelling the world for the very best quality coffee is something take pride in. When you
              visit us, you'll always find new blends from around the world, mainly from regions in Central and South
              America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more
              details.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="page-section cta" id="Contac">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Contactanos</span>
              <span class="section-heading-lower">Para mas Informacion</span>
            </h2>
            <p class="mb-0">E-mail: centroServicio@acopiobl.co</p>
            <p class="mb-0">Telefonos: (5)951352 - Ext.125</p>
            <p class="mb-0">Direccion: Cuarto (4) Piso Aula Sur (AS) UFPS </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2019</p>
    </div>
  </footer>
  <div class="modal fade" id="modalSesion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
          <div class="modal-content">
            <div class="col-12 user-img">
              <img src="<?php echo constant('URL');?>PUBLICO/IMAGENES/user.png" th:src="@{/img/user.png}" />
            </div>
            <form class="col-12" method="post" action="<?php echo constant('URL');?>LOGIN/login">
              <div class="form-group" id="user-group">
                <input type="text" class="form-control" placeholder="Nombre de usuario" name="user" />
              </div>
              <div class="form-group" id="contrasena-group">
                <input type="password" class="form-control" placeholder="Contrasena" name="password" />
              </div>
              <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Ingresar </button>
            </form>
            <div class="col-12 forgot">
              <a href="#">Recordar contrasena?</a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
  </script>
  <script>
    (function () {

      var nav = $('nav'),
        menu = $('nav h1'),
        main = $('main'),
        open = false,
        hover = false;

      menu.on('click', function () {
        open = !open ? true : false;
        nav.toggleClass('menu-active');
        main.toggleClass('menu-active');
        nav.removeClass('menu-hover');
        main.removeClass('menu-hover');
        console.log(open);
      });
      menu.hover(
        function () {
          if (!open) {
            nav.addClass('menu-hover');
            main.addClass('menu-hover');
          }
        },
        function () {
          nav.removeClass('menu-hover');
          main.removeClass('menu-hover');
        }
      );

    })();

    function justNumbers(e) {
      var keynum = window.event ? window.event.keyCode : e.which;
      if ((keynum == 8) || (keynum == 46))
        return true;

      return /\d/.test(String.fromCharCode(keynum));
    }

    $(document).ready(function () {
      $('#prueba').DataTable();
      $('#prueba2').DataTable();
    });
  </script>