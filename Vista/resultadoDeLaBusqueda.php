<!DOCTYPE html>
<html>
    <?php
    session_start();
    
    include('head.php');
    include('navbar.php');
    include('iniciarSesion.php');
    include('../Modelo/conexion.php');
    
    $origen = $_POST["validarOrigen"];
    $destino = $_POST["validarDestino"];
    
    $consultaBusqueda = "";
    
    if($origen == 0 || $destino == 0){
        echo "<br><br><br><br><br>NO SE ELIGIERON PARÁMETROS";
    }else{
        echo "<br><br><br><br><br>";
        $consultaBusqueda = "select * from viaje where origen = " .$origen. " and destino = " .$destino;
        $resultado = mysqli_query($conexion, $consultaBusqueda);
        
        echo "USTED TIENE DISPONIBLE LOS SIGUIENTES VIAJES:<br>";
        while($recorrer = mysqli_fetch_assoc($resultado)){
            echo "
                    Origen: ". $recorrer["origen"] ."<br>
                    Destino: ". $recorrer["destino"] ."<br>
                    Codigo de viaje: ". $recorrer["codigo"] ."<br>
                    Duracion: ". $recorrer["duracion"] ." hs.<br>
                    Tipo de viaje: ". $recorrer["tipoDeViaje"] ."<br>
                    Equipo: ". $recorrer["codigoEquipo"] ."<br><br><br>
                 ";
        }
    }
    ?>
    
    
    
</html>
