

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/resources/template/base.php';
require_once($_SERVER['DOCUMENT_ROOT'].'/app/classes/Registry.php');
?>

<?php startblock('css-core') ?>
<!--Datatable.css-->
<link type="text/css" rel="stylesheet" href="resources/core/datatables/css/datatables.min.css"  media="screen,projection"/>
<?php endblock() ?>

<?php startblock('css-custom') ?>
<link type="text/css" rel="stylesheet" href="resources/css/datatables-list.css"  media="screen,projection"/>
<?php endblock() ?>

<?php startblock('js-core') ?>
<!--Datatable.js-->
<script type="text/javascript" src="resources/core/datatables/js/datatables.min.js"></script>
<?php endblock() ?>

<?php startblock('js-custom') ?>
<script type="text/javascript" src="resources/js/datatables-list.js"></script>
<?php endblock() ?>


<?php startblock('my-datatables-active') ?>
class = "active"
<?php endblock() ?>

<?php startblock('my-datatables-list-active') ?>
class = "active"
<?php endblock() ?>




<?php startblock('container') ?>
<div class="row">
  <div class="col s12">
      <div class="card">
          <a class="right-align waves-effect waves-light btn-large purple darken-1" href="excel.php">Exportar Excel</a>
         <div class="card-content">


<table id="datatable" class="cell-border stripe" >
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

    $reg = new Registry();
    $dat = $reg -> query();


     foreach($dat as $pet){
    ?>
    <tr>
        <td><a href="PDF.php<?php $pet['Pet_Folio'] ?>"><span class="materialize-red-text"><?php echo $pet['Pet_Folio']?></td>
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
<?php endblock() ?>