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