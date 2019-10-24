<?php
include('conexion.php');

$consulta = "SELECT codigo, nombre FROM lugar";
$resultado = mysqli_query($conexion, $consulta);

$paraBuscador = "";

echo "
        <div class='container buscador p-3 mb-3 border border-info'>
            <form action='resultadoDeLaBusqueda.php' class='needs-validation' method='post'>
                <div class='form-row'>
                    <div class='col-md-6 mb-3'>
                        <label class='font-weight-bold' for='validarOrigen'>Origen</label>
                        <select class='custom-select' name='validarOrigen'>
                            <option value='0' selected>Seleccione origen</option>
                            ";
                            
                            while($recorrer = mysqli_fetch_assoc($resultado)){
                                echo "<option value='". $recorrer["codigo"] ."'>". $recorrer["nombre"] ."</option>";
                            }
                            
echo                        "
                        </select>
                    </div>
                    
                    <div class='col-md-6 mb-3'>
                        <label class='font-weight-bold' for='validarDestino'>Destino</label>
                        <select class='custom-select' name='validarDestino'>
                            <option value='0' selected>Seleccione destino</option>
                            ";
                            
                            $resultado = mysqli_query($conexion, $consulta);
                            while($recorrer = mysqli_fetch_assoc($resultado)){
                                echo "<option value='". $recorrer["codigo"] ."'>". $recorrer["nombre"] ."</option>";
                            }
                            
echo                        "
                        </select>
                    </div>
                </div>
                
                
                
                
                
                <div class='form-row align-items-center'>
                    <div class='col-md-3 mb-3'>
                        <label class='font-weight-bold' for='validationTooltip03'>Pasajeros/as</label>
                        <select class='custom-select'>
                            <option value='1' selected>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                        </select>
                    </div>
              
                    <div class='col-md-3 mb-3'>
                        <label class='font-weight-bold' for='validationTooltip04'>Nivel de vuelo</label>
                        <select class='custom-select'>
                            <option value='1' selected>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                        </select>
                    </div>
              
                    <div class='col-md-3 mb-3'>
                        <label class='font-weight-bold' for='validationTooltip05'>Fecha</label>
                        <div class='input-group date' data-provide='datepicker'>
                            <input type='text' class='form-control'>
                        </div>
                    </div>
              
                    <div class='col-md-3 mt-3'>
                        <button class='btn btn-primary w-100' type='submit'>Buscar</button>
                    </div>
                </div>
            </form>
        </div>
     ";
?>
