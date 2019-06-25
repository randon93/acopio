<?php 

class pdfControlador extends Controlador{
    function __construct(){
        parent::__construct();
    }

    public function pdfinca()    {
        $finca = $_POST['finca'];
       // echo $finca;
        $this->getCtrModel()->pdfinca($finca);
        $this->getCtrVista()->renderPDF();
       // print_r($_SESSION['REPORTE']);
    }
}

?>