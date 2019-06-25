<div>
    <div class="callout callout-info">
        <h4>Reportes de Fincas Registradas</h4>
        <p>Tenga en cuenta que si no selecciona ninguna finca en especifico se genera un reporte de todas las fincas
            registradas</p>        
    </div>
    <form  method="post" action="<?php  echo constant('URL');?>pdf/pdfinca">
            <select name="finca" id = "finca">
                <option value="0" >seleccione la finca</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <input type="submit" value="GENERAR">
        </form>
</div>