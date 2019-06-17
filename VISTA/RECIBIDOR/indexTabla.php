<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Entradas Realizadas</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="prueba" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Fecha</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($this->entradas as $entra) { ?>
              <tr>
                <th scope="row"><?php echo $entra['id']; ?></th>
                <td><?php echo $entra['cantidad']; ?></td>
                <td><?php echo $entra['proveedor']; ?></td>
                <td><?php echo $entra['fecha']; ?></td>
              </tr>
              <?php } ?>
              </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Fincas Registradas</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="prueba2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Encargado</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($this->fincas as $finca) { ?>
              <tr>
                <th scope="row"><?php echo $finca->getId(); ?></th>
                <td><?php echo $finca->getNombre(); ?></td>
                <td><?php echo $finca->getDireccion(); ?></td>
                <td><?php echo $finca->getPropietario(); ?></td>
              </tr>
              <?php } ?>
              </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <div class="box">
        <div class="box-header">
          <h3 class="box-title">Almacen </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="prueba" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Proveedor</th>
                <th scope="col">calidad</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($this->almacen as $entra) { ?>
              <tr>
                <th scope="row"><?php echo $entra['id']; ?></th>
                <td><?php echo $entra['cantidad']; ?></td>
                <td><?php echo $entra['procedencia']; ?></td>
                <td><?php switch ($entra['calidad']) {
                      case 1:
                          echo "<h3><span class='label label-success'>Buena <i
							class='fa fa-smile-o'></i></span></h3>";
                          break;
                      case 2: 
                          echo "<h3><span class='label label-danger'>Mala <i
							class='fa fa-frown-o'></i></span></h3>";
                          break;                      
                  } ?></td>
              </tr>
              <?php } ?>
              </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
</section>

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Proceso en que se Encuentra determinado Lote de Cafe</h3>

        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>Id</th>
            <th>Proceso</th>
            <th>Cantidad</th>
            <th>Stock de Almacen</th>

          </tr>
          <?php foreach ($this->proceso as $pro) { ?>
          <tr>
            <th scope="row"><?php echo $pro['id']; ?></th>
            <td> <?php switch ($pro['tipo']) {
                      case 1:
                          echo "<h3><span class='label label-success'>Secado al Aire  <i class='fa  fa-pagelines'></i></span></h3>";
                          break;
                      case 2:
                          echo "<h3><span class='label label-danger'>Secado al Sol <i class='fa  fa-sun-o'></i></span></h3>";
                          break;
                      case 3:
                          echo "<h3><span class='label label-info'>Esta en Lavado <i class='fa fa-tty'></i></span></h3>";
                          break;
                  }  ?></td>
            <td><?php echo $pro['cantidad']; ?></td>
            <td><?php echo $pro['entrada']; ?></td>

          </tr>
          <?php } ?>

        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>