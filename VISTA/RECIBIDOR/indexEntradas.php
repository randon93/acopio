<!-- Main content -->

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