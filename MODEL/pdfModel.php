<?php 

class pdfModel extends Modelo {
    
    function __construct()  { 

        parent::__construct();

    }

    public function pdfinca($finca)  {
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
        //print_r($_SESSION['REPORTE']);
        $_SESSION['REPORTE'] = $fincas;
    }

}


?>