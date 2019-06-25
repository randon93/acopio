<?php 

class pdfModel extends Modelo {
    
    function __construct()  { 

        parent::__construct();

    }

    public function pdfinca($finca)  {
        $_SESSION['REPORTE'] = NULL;
        $_SESSION['TITULO'] = NULL;
        $con = $this->bd->conectar();
        $consultar = null;
        $fincas = [];
        if ($finca == 0) {
            $sql =  "SELECT * FROM finca";
            $consultar = $con -> prepare($sql);
            $consultar -> execute();  
                      
            }else{ 
                $sql =  "SELECT * FROM finca WHERE id = :id"; 
                $consultar = $con -> prepare($sql);
                $consultar -> execute( array(":id"=>$finca) );
                  
        }       
        
        foreach ($consultar as $value) {
           array_push($fincas, $value);
        }
        $con = $this->cerrarCon();

            require_once "./VISTA/registros.php";
            $pdf = new PDF();         
            $_SESSION['NOMBRES'] = ['nombre','direccion', 'propietario'];
            $_SESSION['TITULO'] = "REPORTE FINCA (S)";
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Times','',12);
            
           foreach ($fincas as $value) {
               $pdf->Cell(65,10,utf8_decode($value['nombre']),1,0,'C',0);
                $pdf->Cell(65,10,utf8_decode($value['direccion']),1,0,'C',0);
                 $pdf->Cell(63,10,utf8_decode($value['propietario']),1,1,'C',0);
           }
            $pdf->Output();
    }

    public function pdfEntradas($finca)  {
        $_SESSION['REPORTE'] = NULL;
        $_SESSION['TITULO'] = NULL;
        $con = $this->bd->conectar();
        $consultar = null;
        $fincas = [];
        if ($finca == 0) {
            $sql =  "SELECT f.nombre, e.fecha_ingreso, e.cant_cafe FROM finca f INNER JOIN entrada_cafe e ON f.id = e.procedencia";
            $consultar = $con -> prepare($sql);
            $consultar -> execute();  
                      
            }else{ 
                $sql =  "SELECT f.nombre, e.fecha_ingreso, e.cant_cafe FROM finca f INNER JOIN entrada_cafe e ON f.id = e.procedencia WHERE f.id = :id"; 
                $consultar = $con -> prepare($sql);
                $consultar -> execute( array(":id"=>$finca) );
                  
        }       
        
        foreach ($consultar as $value) {
           array_push($fincas, $value);
        }
        //print_r($_SESSION['REPORTE']);
        $_SESSION['TITULO'] = "REPORTE ENTRADAS DE CAFE";
       $con = $this->cerrarCon();

            require_once "./VISTA/registros.php";
            $pdf = new PDF();         
            $_SESSION['NOMBRES'] = ['nombre','Fecha', 'Cantidad (Kg)'];
            $_SESSION['TITULO'] = "REPORTE FINCA (S)";
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Times','',12);
            
           foreach ($fincas as $value) {
               $pdf->Cell(65,10,utf8_decode($value['nombre']),1,0,'C',0);
                $pdf->Cell(65,10,utf8_decode($value['fecha_ingreso']),1,0,'C',0);
                 $pdf->Cell(63,10,utf8_decode($value['cant_cafe']),1,1,'C',0);
           }
            $pdf->Output();
    }

    public function pdfEntradas($finca)  {
        $_SESSION['REPORTE'] = NULL;
        $_SESSION['TITULO'] = NULL;
        $con = $this->bd->conectar();
        $consultar = null;
        $fincas = [];
        if ($finca == 0) {
            $sql =  "SELECT f.nombre, e.fecha_ingreso, e.cant_cafe FROM finca f INNER JOIN entrada_cafe e ON f.id = e.procedencia";
            $consultar = $con -> prepare($sql);
            $consultar -> execute();  
                      
            }else{ 
                $sql =  "SELECT f.nombre, e.fecha_ingreso, e.cant_cafe FROM finca f INNER JOIN entrada_cafe e ON f.id = e.procedencia WHERE f.id = :id"; 
                $consultar = $con -> prepare($sql);
                $consultar -> execute( array(":id"=>$finca) );
                  
        }       
        
        foreach ($consultar as $value) {
           array_push($fincas, $value);
        }
        //print_r($_SESSION['REPORTE']);
        $_SESSION['TITULO'] = "REPORTE ENTRADAS DE CAFE";
       $con = $this->cerrarCon();

            require_once "./VISTA/registros.php";
            $pdf = new PDF();         
            $_SESSION['NOMBRES'] = ['nombre','Fecha', 'Cantidad (Kg)'];
            $_SESSION['TITULO'] = "REPORTE FINCA (S)";
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Times','',12);
            
           foreach ($fincas as $value) {
               $pdf->Cell(65,10,utf8_decode($value['nombre']),1,0,'C',0);
                $pdf->Cell(65,10,utf8_decode($value['fecha_ingreso']),1,0,'C',0);
                 $pdf->Cell(63,10,utf8_decode($value['cant_cafe']),1,1,'C',0);
           }
            $pdf->Output();
    }

}


?>