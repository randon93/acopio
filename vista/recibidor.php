<script language="javascript">
		function doSearch()
		{
			var tableReg = document.getElementById('datos');
			var searchText = document.getElementById('searchTerm').value.toLowerCase();
			var cellsOfRow="";
			var found=false;
			var compareWith="";

			// Recorremos todas las filas con contenido de la tabla
			for (var i = 1; i < tableReg.rows.length; i++)
			{
				cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
				found = false;
				// Recorremos todas las celdas
				for (var j = 0; j < cellsOfRow.length && !found; j++)
				{
					compareWith = cellsOfRow[j].innerHTML.toLowerCase();
					// Buscamos el texto en el contenido de la celda
					if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
					{
						found = true;
					}
				}
				if(found)
				{
					tableReg.rows[i].style.display = '';
				} else {
					// si no ha encontrado ninguna coincidencia, esconde la
					// fila de la tabla
					tableReg.rows[i].style.display = 'none';
				}
			}
		}
	</script>

<div class="container">
  <div class="p-3 row container">
    <div class=" col-6 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Entrada de Producto</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Buscar Entrada</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Almacenar Producto</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
    <div class="tab-content  col-6" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class=" container border border-success" >
            <form action="<?php echo constant('URL');?>recibidor/registrarEntradaCafe" method="POST">
              <div class="form-group">
                <label for="formGroupExampleInput">Cantidad Cafe</label>
                <input type="text" class="form-control" name="cantidad" id="formGroupExampleInput" placeholder="Peso en Kilos (Kg)" onkeypress="return justNumbers(event);" >
              </div>
              <div class="form-group">
                <label >Fincas:  </label>
                <select class="form-control" name="proveedor">
                  <?php foreach ($this->fincas as $finc) {?>
                    <option value="<?php echo $finc->getId();?>"><?php echo $finc->getNombre(); ?></option>
                  <?php } ?>
                </select>
              </div>
              <input type="submit"  class="btn btn-primary" value="INGRESAR">
            </form>
          </div><br>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <div class="container ">
          <form>
            Buscar <input id="searchTerm" type="text" onkeyup="doSearch()" />
          </form>

          <table class="table table-striped" id="datos">
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
          </tbody>
        </table>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
        <div class=" container border border-success" >
          <form action="<?php echo constant('URL');?>recibidor/almacenar" method="POST">
            <div class="form-group">
              <label for="formGroupExampleInput">Cantidad Cafe</label>
              <input type="text" class="form-control" name="cantidad" id="formGroupExampleInput" placeholder="Peso en Kilos (Kg)" onkeypress="return justNumbers(event);" >
            </div>
            <div class="form-group">
              <label >Entrada:  </label>
              <select class="form-control" name="entrada">
                <?php foreach ($this->entradas as $entra) {?>
                  <option value="<?php echo $entra['id'];?>"><?php echo $entra['id']." - ".$entra['proveedor'] ." - ". $entra['cantidad']; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label >Calidad:  </label>
              <select class="form-control" name="calidad">
                <?php foreach ($this->calidades as $calidad) {?>
                  <option value="<?php echo $calidad['id'];?>"><?php echo $calidad['nombre']; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label >Tipo:  </label>
              <select class="form-control" name="cafe_tipo">
                <?php foreach ($this->cafes as $cafe) {?>
                  <option value="<?php echo $cafe['id'];?>"><?php echo $cafe['nombre']; ?></option>
                <?php } ?>
              </select>
            </div>
            <input type="submit"  class="btn btn-primary" value="INGRESAR">
          </form>
        </div><br>
      </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">prro</div>
    </div>
  </div>
</div>
