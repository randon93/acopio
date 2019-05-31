<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
			<h1><i class="fas fa-cog"></i> Administrar Almacen</h1>
			</div>
			<div class="col-md-2">
				<button type="button" class="btn btn-outline-light " data-toggle="modal" data-target="#modalSesion">Cerrar Sesion</button>
			</div>
		</div>
	</div>
</header>

<!-- VISTA RAPIDA -->
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="list-group">
				<h6 class="list-group-item">Nombre del Encargado de Almacen</h6>
				<h6 class="list-group-item">fecha actual</h6>
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading main-color-bg">
					<h3 class="panel-title">Vista Rápida</h3>
				</div>
				<div class="panel-body row">
					<div class="col-md-3">
						<div class="card card-body dash-box ">
							<a style="text-decoration:none;" data-toggle="collapse" href="#llegadas" role="button" aria-expanded="true" aria-controls="llegadas">
							<h2><i class="fas fa-truck"></i> <?php echo count($this->entradas); ?></h2>
							<h4>Entradas</h4>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card card-body dash-box">
							<a style="text-decoration:none;" data-toggle="collapse" href="#fincas" role="button" aria-expanded="true" aria-controls="fincas">
							<h2><i class="fas fa-city"></i> <?php echo count($this->fincas); ?></h2>
							<h4>Fincas</h4>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card card-body dash-box">
							<h2><i class="fas fa-cube"></i> 508</h2>
							<h5>Almacenado</h5>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card card-body dash-box">
								<h2><i class="fas fa-cubes"></i> 508</h2>
							<h4>Clasificado</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- TABLA DE LLEGADAS -->
<div class="container collapse mt-2 p-3" style=" background: #EEE8E2;" id="llegadas">
		<table class="display table table-striped" id="prueba">
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

<!-- TABLA DE Fincas -->
<div class="container collapse mt-2 p-3" style=" background: #EEE8E2;" id="fincas">
		<table class="display table table-striped" id="prueba2">
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
		</tbody>
		</table>
</div>

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
