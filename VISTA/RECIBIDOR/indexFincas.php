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