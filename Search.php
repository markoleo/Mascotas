<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 07/06/2019
 * Time: 12:26 PM
 */
require_once $_SERVER['DOCUMENT_ROOT'].'/resources/template/base.php';

?>
<?php startblock('container') ?>

    <div class="row">
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
                        require_once($_SERVER['DOCUMENT_ROOT'].'/app/classes/Search.php');

                        $reg = new Search();
                        $dat = $reg -> query();


                        foreach($dat as $pet){
                            ?>
                            <tr>
                                <td><?php echo $pet['Pet_Folio']?></td>
                                <td><?php echo $pet['Pet_Name']?></td>
                                <td><?php echo $pet['Own_Name']?></td>
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



<?php endblock() ?>