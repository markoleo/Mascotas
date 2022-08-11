<?php

?>

<link type="text/css" rel="stylesheet" href="resources/core/materialize/css/materialize.min.css"  media="screen,projection"/>
<div class="row">
    <h4 class=" center with-header">REGISTRO DE MASCOTAS</h4>
    <div class="col s12">
        <div class="card">
            <div class="card-content">
                <table class="striped">
                    <thead>
                    <tr>
                        <th>Folio de Registro</th>
                        <th>Mascota</th>
                        <th>Nombre del Propietario</th>
                        <th>Veterinario</th>
                        <th>fecha de creacion</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php
                    require_once($_SERVER['DOCUMENT_ROOT'].'/app/classes/Excel.php');

                    $reg = new Excel();
                    $dat = $reg -> queryExcel();

                    foreach($dat as $pet){
                        ?>
                        <tr>
                            <td><?php echo $pet['Pet_Folio']?></td>
                            <td><?php echo $pet['Pet_Name']?></td>
                            <td><?php echo $pet['Own_Name']," ",
                                $pet['Own_FirstSurname']," ",
                                $pet['Own_SecondSurname']?></td>
                            <td><?php echo $pet['Vet_Name']?></td>
                            <td><?php echo $pet['Pet_DateCreated']?></td>

                        </tr>
                        <?php
                    }

                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>





