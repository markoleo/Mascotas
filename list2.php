<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 06/06/2019
 * Time: 09:37 AM
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
                        require_once($_SERVER['DOCUMENT_ROOT'].'/app/classes/Registry.php');

                        $reg = new Registry();
                        $dat = $reg -> query2();


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
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <ul class="pagination center">
                        <li class="disabled"><a href="Registry.php"><i class="material-icons">chevron_left</i></a></li>
                        <li class="active"><a href="Registry.php">1</a></li>
                        <li class="waves-effect"><a href="list.php">2</a></li>
                        <li class="waves-effect"><a href="list2.php">3</a></li>
                        <li class="waves-effect"><a href="#!">4</a></li>
                        <li class="waves-effect"><a href="#!">5</a></li>
                        <li class="waves-effect"><a href="list2.php"><i class="material-icons">chevron_right</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<?php endblock() ?>