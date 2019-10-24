<?php
    include('../Vista/busquedaVista.php');
    include('conexion.php');
    
    if(isset($_POST["buscar"])){
       
        $origen = $_POST["origen"];
        $destino = $_POST["destino"];
        $pasajeros = $_POST["pasajeros"];
        $nivel = $_POST["nivel"];
        $fecha = $_POST["fecha"];
        
/* ======================================== */
    
        $query = "SELECT * FROM viaje";
        $criterio = "";

        if(!empty($origen) || $origen != 0){
            $criterio = " where origen = ".$origen;
        }

        if(!empty($destino) || $destino != 0){
            if($criterio == ""){
                $criterio = " where destino = ".$destino;
            }else{
                $criterio .= " and destino = ".$destino;
            }
        }

        if(!empty($fecha) || $fecha=""){
            if($criterio == ""){
                $criterio = " where fecha = ".$fecha;
            }else{
                $criterio .= " and fecha = ".$fecha;
            }
        }

        $query .= $criterio;

/* ======================================== */
    
        $resultado = mysqli_query($conexion, $query);
        
        if(mysqli_num_rows($resultado) >= 1) {
            
            include("../Vista/cards.php");
            
        }else{
            echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    No se encontró ningún viaje!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </div>";
            $query = "SELECT * FROM viaje GROUP BY nombre";

            $resultado = mysqli_query($conexion, $query);
        include("../Vista/cards.php");
        }
    }else {
        $query = "SELECT * FROM viaje GROUP BY nombre";
                        
        $resultado = mysqli_query($conexion, $query);
        include("../Vista/cards.php");
    }


?>
