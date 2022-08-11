<?php
/**
 * Created by PhpStorm.
 * User: SDeveloper
 * Date: 08/05/2019
 * Time: 03:45 PM
 */
require_once $_SERVER['DOCUMENT_ROOT'].'/resources/template/base.php';
?>

<?php //startblock('import-export') ?>
class = "active"
<?php //endblock() ?>

<?php //startblock('export') ?>
class = "active"
<?php //endblock() ?>

<?php //startblock('css-custom') ?>
<!--link type="text/css" rel="stylesheet" href="resources/css/export.css"  media="screen,projection"/-->
<?php //endblock() ?>

<?php //startblock('js-custom') ?>
<!--script type="text/javascript" src="resources/js/export.js"></script-->
<?php //endblock() ?>

<?php //startblock('container') ?>
<!--div class="row">
    <div class="col s12">
        <div class="card">
            <div class="progress purple lighten-4 wait">
                <div class="indeterminate purple lighten-1"></div>
            </div>
            <div class="card-content">
                <span class="card-title">Exportar información</span>
                <blockquote><b>El archivo que se descarga es de tipo ZIP (Archivo Comprimido), es un único archivo con toda la información.</b></blockquote>
                <blockquote><b>Debes tener una conexión a Internet estable, para no interrumpir la descarga.</b></blockquote>
                <blockquote><b>Al descargar la información automáticamente te vuelves RESPONSABLE de la misma.</b></blockquote>
                <blockquote><b>La descarga puede tardar varios minutos, dependiendo de la cantidad de información pendiente por exportar.</b></blockquote>
            </div>
            <div class="card-action center-align">
                <a id="download" class="btn waves-effect waves-light purple darken-1"><i class="material-icons left">cloud_download</i>Descargar</a>
            </div>
        </div>
    </div>
</div-->
<?php //endblock() ?>
