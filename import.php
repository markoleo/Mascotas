<?php
/**
 * Created by PhpStorm.
 * User: SDeveloper
 * Date: 13/05/2019
 * Time: 03:05 PM
 */

require_once $_SERVER['DOCUMENT_ROOT'].'/resources/template/base.php';
?>

<?php startblock('import-export') ?>
class = "active"
<?php endblock() ?>

<?php startblock('import') ?>
class = "active"
<?php endblock() ?>

<?php startblock('css-core') ?>
<link type="text/css" rel="stylesheet" href="resources/core/dropify/css/dropify.min.css"  media="screen,projection"/>
<?php endblock() ?>

<?php startblock('css-custom') ?>
<link type="text/css" rel="stylesheet" href="resources/css/import.css"  media="screen,projection"/>
<?php endblock() ?>

<?php startblock('js-core') ?>
<script type="text/javascript" src="resources/core/dropify/js/dropify.min.js"></script>
<?php endblock() ?>

<?php startblock('js-custom') ?>
<script type="text/javascript" src="resources/js/import.js"></script>
<?php endblock() ?>

<?php startblock('container') ?>
<div class="row">
    <div class="col s12">
        <div class="card">
            <div class="progress purple lighten-4 wait">
                <div class="indeterminate purple lighten-1"></div>
            </div>
            <div class="card-content">
                <span class="card-title">Importar información</span>
                <blockquote><b>El archivo para cargar debe ser de tipo ZIP (Archivo Comprimido), descargado desde el módulo de Exportación de este sistema.</b></blockquote>
                <blockquote><b>Debes tener una conexión a Internet estable, para no interrumpir la carga.</b></blockquote>
                <blockquote><b>La carga de información puede tardar varios minutos, dependiendo del tamaño de los archivos.</b></blockquote>
                <blockquote><b>La carga del archivo empieza automáticamente al seleccionar el archivo.</b></blockquote>
                <div class="row">
                    <div class="col s12 m4 offset-m4">
                        <form id="import-form" method="post" action="" enctype="multipart/form-data">
                            <input id="importFile" name="importFile" type="file" data-allowed-file-extensions="zip" accept="application/zip"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endblock() ?>
