

<div class="col-md-3">
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Fincas Registradas</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="callout callout-info">
                <h4>Reportes de Fincas Registradas</h4>
                <p>Tenga en cuenta que si no selecciona ninguna finca en especifico se genera un reporte de todas las
                    fincas
                    registradas</p>
            </div>
            <form method="post" action="<?php  echo constant('URL');?>pdf/pdfinca">
                <select name="finca" id="finca">
                    <option value="0">seleccione la finca</option>
                    <?php   foreach ($this->fincas as $value) {
                  echo  "<option value='".$value->getId()."' >".$value->getNombre()."</option>";
               } ?>
                </select>
                <input type="submit" value="GENERAR">
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
<!-- /.col -->

<div class="col-md-3">
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Entradas</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="callout callout-info">
                <h4>Reportes de Entradas de Cafe</h4>
                <p>Tenga en cuenta que si no selecciona ninguna finca en especifico se genera un reporte de todas las
                    fincas
                    registradas</p>
            </div>
            <form method="post" action="<?php  echo constant('URL');?>pdf/pdfEntradas">
                <select name="finca" id="finc">
                    <option value="0">seleccione la finca</option>
                    <?php   foreach ($this->fincas as $value) {
                  echo  "<option value='".$value->getId()."' >".$value->getNombre()."</option>";
               } ?>
                </select>
                <input type="submit" value="GENERAR">
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>
<!-- /.col -->