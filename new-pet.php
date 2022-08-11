<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/resources/template/base.php';
require_once ($_SERVER['DOCUMENT_ROOT'].'/app/classes/Species.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/app/classes/TrainingLevels.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/app/classes/StatusPet.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/app/classes/Neighborhoods.php');
?>

<?php startblock('my-records-active') ?>
    class = "active"
<?php endblock() ?>

<?php startblock('new-pet-active') ?>
    class = "active"
<?php endblock() ?>

<?php startblock('css-core') ?>
    <link type="text/css" rel="stylesheet" href="resources/core/dropify/css/dropify.min.css"  media="screen,projection"/>
<?php endblock() ?>

<?php startblock('css-custom') ?>
    <link type="text/css" rel="stylesheet" href="resources/css/new-pet.css"  media="screen,projection"/>
<?php endblock() ?>

<?php startblock('js-core') ?>
    <script type="text/javascript" src="resources/core/dropify/js/dropify.min.js"></script>
<?php endblock() ?>

<?php startblock('js-custom') ?>
    <script type="text/javascript" src="resources/js/new-pet.js"></script>
<?php endblock() ?>

<?php startblock('container') ?>
    <form id="pr" name="pr" method="post" action="" enctype="multipart/form-data" autocomplete="off">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="progress purple lighten-4 wait">
                        <div class="indeterminate purple lighten-1"></div>
                    </div>
                    <div class="card-content">
                        <span class="card-title">Mascota</span>
                        <div class="row">
                            <div class="input-field col s12 m4">
                                <input id="ppl" name="ppl" type="file" data-allowed-file-extensions="png jpg jpeg" accept="image/*"/>
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="ppf" name="ppf" type="file" data-allowed-file-extensions="png jpg jpeg" accept="image/*"/>
                            </div>
                            <div class="input-field col s12 m4">
                                <input id="ppr" name="ppr" type="file" data-allowed-file-extensions="png jpg jpeg" accept="image/*"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m4">
                                <i class="material-icons prefix">loyalty</i>
                                <input id="pn" name="pn" type="text">
                                <label for="pn">Mascota</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m2 center-align">
                                <?
                                $species = new Species();
                                if($species = $species->getSpeciesAll()){
                                    foreach ($species as $specie => $sp){
                                        echo '<p><label><input class="with-gap" name="ps" type="radio" value="'.$sp->value.'"><span>'.$sp->specie_name.'</span></label></span></p>';
                                    }
                                }else{
                                    echo '<p><label><input class="with-gap" name="ps" type="radio" disabled><span>No hay Especies para mostrar</span></label></p>';
                                }
                                unset($species);
                                ?>
                            </div>
                            <div class="input-field col s12 m4">
                                <i class="material-icons prefix">pets</i>
                                <select id="pb" name="pb">
                                </select>
                                <label>Raza</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                                <div class="progress purple lighten-4" id="progress-pb">
                                    <div class="indeterminate purple lighten-1"></div>
                                </div>
                            </div>
                            <div class="input-field col s12 m2 center-align">
                                <p>
                                    <label>
                                        <input class="with-gap" id="psxm" name="psx" type="radio" value="M"/>
                                        <span>Macho</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input class="with-gap" id="psxf" name="psx" type="radio" value="F"/>
                                        <span>Hembra</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m3">
                                <i class="material-icons prefix">pets</i>
                                <input id="pw" name="pw" type="text">
                                <label for="pw">Peso (kg)</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m3">
                                <i class="material-icons prefix">pets</i>
                                <input id="ph" name="ph" type="text">
                                <label for="ph">Altura (cm)</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m3 center-align">
                                <p>
                                    <label>
                                        <input id="pst" name="pst" type="checkbox" class="filled-in"/>
                                        <span>Esterilizado(a)</span>
                                    </label>
                                </p>
                            </div>
                            <div class="input-field col s12 m3">
                                <i class="material-icons prefix">pets</i>
                                <select id="phr" name="phr">
                                    <option value="" selected>Selecciona una opción</option>
                                    <option value="S">Corto</option>
                                    <option value="M">Mediano</option>
                                    <option value="L">Largo</option>
                                </select>
                                <label>Pelo</label>
                                <span class="helper-text" data-error="" data-success=""></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">color_lens</i>
                                <textarea id="pc" name="pc" class="materialize-textarea"></textarea>
                                <label for="pc">Color</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">border_color</i>
                                <textarea id="psp" name="psp" class="materialize-textarea"></textarea>
                                <label for="psp">Señas Particulares</label>
                                <span class="helper-text" data-error="" data-success=""></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m3">
                                <i class="material-icons prefix">today</i>
                                <input id="pbd" name="pbd" type="text">
                                <label for="pbd">Nacimiento</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m3">
                                <i class="material-icons prefix">pets</i>
                                <select id="ptl" name="ptl">
                                    <option value="" selected>Sin Entrenamiento</option>
                                    <?
                                    $levels = new TrainingLevels();
                                    if($levels = $levels->getTrainingLevelsAll()){
                                        foreach ($levels as $level => $lv){
                                            echo '<option value="'.$lv->value.'">'.$lv->trainingLevel.'</option>';
                                        }
                                    }else{
                                        echo '<option value="" selected>No hay información disponible</option>';
                                    }
                                    unset($levels);
                                    ?>
                                </select>
                                <label for="ptl">Entrenamiento</label>
                                <span class="helper-text" data-error="" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m3">
                                <i class="material-icons prefix">today</i>
                                <input id="pvd" name="pvd" type="text">
                                <label for="pvd">Ult. Vacuna</label>
                                <span class="helper-text" data-error="Fecha no valida (Ej. 99/99/9999)" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m3">
                                <i class="material-icons prefix">person</i>
                                <select id="psts" name="psts">
                                    <?
                                    $status = new StatusPet();
                                    if($status = $status->getStatusPetAll()){
                                        foreach ($status as $statu => $st){
                                            echo '<option value="'.$st->value.'">'.$st->statusPet.'</option>';
                                        }
                                    }else{
                                        echo '<option value="" selected>No hay información disponible</option>';
                                    }
                                    unset($status);
                                    ?>
                                </select>
                                <label for="psts">Estatus</label>
                                <span class="helper-text" data-error="" data-success=""></span>
                            </div>
                            <div class="input-field col s12 right-align">
                                <a class="waves-effect waves-purple btn-flat modal-trigger" href="#!"><i class="material-icons right">person_add</i>Veterinario</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="progress purple lighten-4 wait">
                        <div class="indeterminate purple lighten-1"></div>
                    </div>
                    <div class="card-content">
                        <span class="card-title">Propietario</span>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">chrome_reader_mode</i>
                                <input id="oc" name="oc" type="text">
                                <label for="oc">CURP</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                                <div class="progress purple lighten-4" id="progress-oc">
                                    <div class="indeterminate purple lighten-1"></div>
                                </div>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">recent_actors</i>
                                <input id="oi" name="oi" type="text">
                                <label for="oi">Folio INE</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">person</i>
                                <input id="ona" name="ona" type="text">
                                <label for="ona">Nombre</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m3">
                                <i class="material-icons prefix">person</i>
                                <input id="ofs" name="ofs" type="text">
                                <label for="ofs">A. Paterno</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m3">
                                <i class="material-icons prefix">person</i>
                                <input id="oss" name="oss" type="text">
                                <label for="oss">A. Materno</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m7">
                                <i class="material-icons prefix">email</i>
                                <input id="om" name="om" type="email">
                                <label for="om">Correo electrónico</label>
                                <span class="helper-text" data-error="Este no es un correo electrónico" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m5">
                                <i class="material-icons prefix">phone</i>
                                <input id="op" name="op" type="text">
                                <label for="op">Teléfono</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m4">
                            <i class="material-icons prefix">today</i>
                            <input id="obd" name="obd" type="text" readonly>
                            <label for="obd">Nacimiento</label>
                            <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                        </div>
                        <div class="input-field col s12 m4">
                            <p>
                                <label>
                                    <input class="with-gap" id="ogm" name="og" type="radio" value="M" onclick="javascript: return false;"/>
                                    <span>Hombre</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input class="with-gap" id="ogf" name="og" type="radio" value="F" onclick="javascript: return false;"/>
                                    <span>Mujer</span>
                                </label>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="progress purple lighten-4 wait">
                        <div class="indeterminate purple lighten-1"></div>
                    </div>
                    <div class="card-content">
                        <span class="card-title">Domicilio</span>
                        <div class="row">
                            <div class="input-field col s12 m4">
                                <i class="material-icons prefix">account_balance</i>
                                <input id="as" name="as" type="text" value="Hidalgo" readonly>
                                <label for="as">Estado</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m4">
                                <i class="material-icons prefix">domain</i>
                                <input id="at" name="at" type="text" value="Tulancingo de Bravo" readonly>
                                <label for="at">Municipio</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m4">
                                <i class="material-icons prefix">location_city</i>
                                <select id="an" name="an">
                                    <option value="" selected>Selecciona una opción</option>
                                    <?
                                    $neighborhoods = new Neighborhoods();
                                    $neighborhoods->setStateKey(13);
                                    $neighborhoods->setTownKey(77);
                                    if($neighborhoods = $neighborhoods->getNeighborhoodsByStateAndTown()){
                                        foreach ($neighborhoods as $neighborhood => $nei){
                                            echo '<option value="'.$nei->value.'">'.$nei->neiName.'</option>';
                                        }
                                    }else{
                                        echo '<option value="" selected>No hay información disponible</option>';
                                    }
                                    unset($neighborhoods);
                                    ?>
                                </select>
                                <label for="ptl">Colonia</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">my_location</i>
                                <input id="ast" name="ast" type="text">
                                <label for="ast">Calle</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m3">
                                <i class="material-icons prefix">streetview</i>
                                <input id="ane" name="ane" type="text">
                                <label for="ane">No. Ext</label>
                                <span class="helper-text" data-error="¡Ups! Algo anda mal" data-success=""></span>
                            </div>
                            <div class="input-field col s12 m3">
                                <i class="material-icons prefix">place</i>
                                <input id="acp" name="acp" type="text">
                                <label for="acp">C.P.</label>
                                <span class="helper-text" data-error="Obligatorio" data-success=""></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-action-btn">
            <button type="submit" class="waves-effect waves-light btn-floating btn-large purple darken-1 center" id="btn-register">
                <i class="large material-icons">pets</i>
            </button>
        </div>
    </form>
<?php endblock() ?>