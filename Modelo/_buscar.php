<?php
include('conexion.php');

$consulta = "SELECT DISTINCT v.origen, l.nombre FROM viaje as v inner join lugar as l on v.origen = l.codigo";
$resultado = mysqli_query($conexion, $consulta);

echo "
        <div class='container buscador p-3 mb-3 border border-info'>
            <form class='needs-validation'>
                <div class='form-row'>
                    <div class='col-md-6 mb-3'>
                        <label class='font-weight-bold' for='validationTooltip01'>Origen</label>
                        <select class='custom-select'>
                            <option selected>Seleccione origen</option>
                            ";
                            
                            while($recorrer = mysqli_fetch_assoc($resultado)){
                                echo "
                                        <option value='". $recorrer["v.origen"] ."'>". $recorrer["l.nombre"] ."</option>
                                     ";
                            }
                            
echo                        "
                        </select>
                    </div>
                    
                    <div class='col-md-6 mb-3'>
                        <label class='font-weight-bold' for='validationTooltip02'>Destino</label>
                        <select class='custom-select'>
                            <option selected>Seleccione destino</option>
                            <option value='Buenos Aires'>Buenos Aires</option>
                            <option value='Ankara'>Ankara</option>
                            <option value='EEI'>EEI</option>
                            <option value='Orbiter Hotel'>Orbiter Hotel</option>
                            <option value='Luna'>Luna</option>
                            <option value='Marte'>Marte</option>
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
