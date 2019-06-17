<section class="content">
	<div class="row">
		<div class=" col-6 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3><?php echo count($this->entradas); ?></h3>

						<p><a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalEntrada">Nueva
								Entrada <i class="fa fa-arrow-circle-right"></i></a></p>
					</div>
					<div class="icon">
						<i class="ion ion-bag"></i>
					</div>
					<a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalEntrada">More info <i
							class="fa fa-arrow-circle-right"></i></a>

				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?php $cant = 0; foreach ($this->almacen as $value) {
							$cant = $cant + $value['cantidad'];
						} echo $cant; ?><sup style="font-size: 20px"> Kg</sup></h3>

						<p>Almacen</p>
					</div>
					<div class="icon">
						<i class="ion ion-stats-bars"></i>
					</div>
					<a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalAlmacen">More info <i
							class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3><?php echo count($this->fincas); ?></h3>

						<p>Registrar Finca</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
					<a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalFinca">More info <i
							class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3>65</h3>

						<p>Unique Visitors</p>
					</div>
					<div class="icon">
						<i class="ion ion-pie-graph"></i>
					</div>
					<a href="#" class="small-box-footer" data-toggle="modal" data-target="#modalProceso">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
	</div>
</section>

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Entradas Por Fincas</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Line Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="lineChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Calidad de Producto por Finca</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>
<!--  
	|	        |
		MODALS
	|		   |    -->


<div class="modal modal-warning fade" id="modalFinca">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Success Modal</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo constant('URL');?>recibidor/aggFinca" method="POST">
					<div class="form-group">
						<h4><label for="formGroupExampleInput">Nombre</label></h4>
						<input type="text" class="form-control" name="nombre" id="formGroupExampleInput"
							placeholder="Nombre Finca">
					</div>
					<div class="form-group">
						<h4><label for="formGroupExampleInput">Direccion</label></h4>
						<input type="text" class="form-control" name="direccion" id="formGroupExampleInput"
							placeholder="Direccion Finca">
					</div>
					<div class="form-group">
						<h4><label for="formGroupExampleInput">Propietario</label></h4>
						<input type="text" class="form-control" name="propietario" id="formGroupExampleInput"
							placeholder="Propietario">
					</div>

					<input type="submit" class="btn btn-primary" value="INGRESAR">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-outline">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<div class="modal modal-info fade" id="modalEntrada">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Success Modal</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo constant('URL');?>recibidor/registrarEntradaCafe" method="POST">
					<div class="form-group">
						<label for="formGroupExampleInput">
							<h2>Cantidad Cafe</h2>
						</label>
						<input type="text" class="form-control" name="cantidad" id="formGroupExampleInput"
							placeholder="Peso en Kilos (Kg)" onkeypress="return justNumbers(event);">
					</div>
					<div class="form-group">
						<label>
							<h2>Fincas: </h2>
						</label>
						<select class="form-control" name="proveedor">
							<?php foreach ($this->fincas as $finc) {?>
							<option value="<?php echo $finc->getId();?>"><?php echo $finc->getNombre(); ?>
							</option>
							<?php } ?>
						</select>
					</div>
					<input type="submit" class="btn btn-primary" value="INGRESAR">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-outline">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal modal-success fade" id="modalAlmacen">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Success Modal</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo constant('URL');?>recibidor/almacenar" method="POST">
					<div class="form-group">
						<label for="formGroupExampleInput">Cantidad Cafe</label>
						<input type="text" class="form-control" name="cantidad" id="formGroupExampleInput"
							placeholder="Peso en Kilos (Kg)" onkeypress="return justNumbers(event);">
					</div>
					<div class="form-group">
						<label>Entrada: </label>
						<select class="form-control" name="entrada">
							<?php foreach ($this->entradas as $entra) {?>
							<option value="<?php echo $entra['id'];?>">
								<?php echo $entra['id']." - ".$entra['proveedor'] ." - ". $entra['cantidad']; ?>
							</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Calidad: </label>
						<select class="form-control" name="calidad">
							<?php foreach ($this->calidades as $calidad) {?>
							<option value="<?php echo $calidad['id'];?>"><?php echo $calidad['nombre']; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Tipo: </label>
						<select class="form-control" name="cafe_tipo">
							<?php foreach ($this->cafes as $cafe) {?>
							<option value="<?php echo $cafe['id'];?>"><?php echo $cafe['nombre']; ?></option>
							<?php } ?>
						</select>
					</div>
					<input type="submit" class="btn btn-primary" value="INGRESAR">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-outline">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal modal-danger fade" id="modalProceso">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Asignar Proceso a Cafe</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo constant('URL');?>recibidor/procesar" method="POST">
					<div class="form-group">
						<label for="formGroupExampleInput">Cantidad Cafe</label>
						<input type="text" class="form-control" name="cantidad" id="formGroupExampleInput"
							placeholder="Peso en Kilos (Kg)" onkeypress="return justNumbers(event);">
					</div>
					<div class="form-group">
						<label>Entrada: </label>
						<select class="form-control" name="entrada">
							<?php foreach ($this->almacenes as $alma) {?>
							<option value="<?php echo $alma['id'];?>"><?php echo $alma['entrada'] ." - ". $alma['cantidad']; ?>	</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Tipo: </label>
						<select class="form-control" name="tipoP">
							<?php foreach ($this->tipoP as $tipo) {?>
							<option value="<?php echo $tipo['id'];?>"><?php echo $tipo['nombre'] . " - " . $tipo['tiempo'] . " Horas";?></option>
							<?php } ?>
						</select>
					</div>
					<input type="submit" class="btn btn-primary" value="INGRESAR">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-outline">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->