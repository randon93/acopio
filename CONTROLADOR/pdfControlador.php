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

    public function pdfEntradas()    {
        $finca = $_POST['finca'];
       // echo $finca;
        $this->getCtrModel()->pdfEntradas($finca);
        $this->getCtrVista()->renderPDF();
       // print_r($_SESSION['REPORTE']);
    }

    public function pdfAlmacen()    {
        $finca = $_POST['finca'];
       // echo $finca;
        $this->getCtrModel()->pdfAlmacen($finca);
        $this->getCtrVista()->renderPDF();
       // print_r($_SESSION['REPORTE']);
    }
}

?>