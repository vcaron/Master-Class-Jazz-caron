<?php
require_once ('header.php');
?>
<div class="full-width-container block-2">
    <div class="row">
        <div class="col-sm-6">

            <div class="accordion">

                <h2>Jams session</h2>

                <div id="one" class="section">
                    <h3>
                        <a href="#one">Lundi</a>
                    </h3>
                    <div>
                        <table class="table">
                             <thead>
                                <tr>
                                    <th>Prénom</th>
                                    <th>Instruement</th>
                                    <th>Morceau</th>
                                </tr>
                            </thead>
                            <tbody id="jams_Lundi">
                                 <!-- resultat requete ajax -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="two" class="section">
                    <h3>
                        <a href="#two">mardi</a>
                    </h3>
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Prénom</th>
                                    <th>Instruement</th>
                                    <th>Morceau</th>
                                </tr>
                            </thead>
                            <tbody id="jams_Mardi">
                                <!-- resultat requete ajax -->
                            </tbody>
                         </table>
                    </div>
                </div>
                <div id="three" class="section">
                    <h3>
                        <a href="#three">mercredi</a>
                    </h3>
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Prénom</th>
                                    <th>Instruement</th>
                                    <th>Morceau</th>
                                </tr>
                            </thead>
                            <tbody id="jams_Mercredi">
                                <!-- resultat requete ajax -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="four" class="section large">
                    <h3>
                        <a href="#four">jeudi</a>
                    </h3>
                <div>
                     <table class="table">
                         <thead>
                             <tr>
                               <th>Prénom</th>
                              <th>Instruement</th>
                              <th>Morceau</th>
                             </tr>
                         </thead>
                         <tbody id="jams_Jeudi">
                                <!-- resultat requete ajax -->
                         </tbody>
                     </table>
                </div>
        </div>
        <div id="five" class="section">
            <h3>
                <a href="#five">Vendredi</a>
            </h3>
            <div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Instruement</th>
                        <th>Morceau</th>
                    </tr>
                    </thead>
                    <tbody id="jams_Vendredi">
                    <!-- resultat requete ajax -->
                    </tbody>
                </table>
            </div>
        </div>
        <div id="six" class="section">
            <h3>
                <a href="#six">Samedi</a>
            </h3>
            <div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Instruement</th>
                        <th>Morceau</th>
                    </tr>
                    </thead>
                    <tbody id="jams_Samedi">
                    <!-- resultat requete ajax -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php if (isset($_SESSION['auth'])): ?>

<div class="col-sm-6">
         <form class="form-horizontal" action="inscription-jams.php" method="POST">
        <fieldset>

            <!-- Form Name -->
            <legend>Inscription session Jam</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="control-label" for="Ajouter morceau">Ajouter morceau</label>
                <div class="col-sm-8">
                    <input id="Ajouter morceau" name="morceau" placeholder="Morceau" class="form-control input-md" type="text" required/>
                </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <div class="form-group">
                <label class=" control-label" for="jour">Jour</label>
                <div class="">
                    <label class="radio-inline 2" for="jour-0">
                        <input name="jour" id="jour-0" value="Lundi" type="radio">
                        Lundi
                    </label>
                    <label class="radio-inline 2" for="jour-1">
                        <input name="jour" id="jour-1" value="Mardi" type="radio">
                        Mardi
                    </label>
                    <label class="radio-inline 2" for="jour-2">
                        <input name="jour" id="jour-2" value="Mercredi" type="radio">
                        Mercredi
                    </label>
                    <label class="radio-inline 2" for="jour-3">
                        <input name="jour" id="jour-3" value="Jeudi" type="radio">
                        Jeudi
                    </label>
                    <label class="radio-inline 2" for="jour-4">
                        <input name="jour" id="jour-4" value="Vendredi" type="radio">
                        Vendredi
                    </label>
                    <label class="radio-inline 2" for="jour-5">
                        <input name="jour" id="jour-5" value="Samedi" type="radio">
                        Samedi
                    </label>
                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class=" control-label" for="Instrument">Instruments</label>
                <div class="">
                    <label class="radio-inline" for="Instrument-0">
                        <input name="instrument" id="Instrument-0" value="Chant" type="radio">
                        Chant
                    </label>
                    <label class="radio-inline" for="Instrument-1">
                        <input name="instrument" id="Instrument-1" value="Guitare" type="radio">
                        Guitare
                    </label>
                    <label class="radio-inline" for="Instrument-2">
                        <input name="instrument" id="Instrument-2" value="Piano" type="radio">
                        Piano
                    </label>
                    <label class="radio-inline" for="Instrument-3">
                        <input name="instrument" id="Instrument-3" value="Contrebasse" type="radio">
                        Contrebasse
                    </label>
                    <label class="radio-inline" for="Instrument-4">
                        <input name="instrument" id="Instrument-4" value="Cuivre" type="radio">
                        Cuivre
                    </label>
                    <label class="radio-inline" for="Instrument-5">
                        <input name="instrument" id="Instrument-5" value="Batterie" type="radio">
                        Batterie
                    </label>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class=" control-label" for="Inscription"></label>
                <div class="">
                    <button id="Inscription" name="Inscription" class="btn btn-primary">Inscription</button>
                </div>
            </div>

        </fieldset>
             <input type="hidden" name="prenom" value="<?= $_SESSION['auth']->Prenom; ?>">
    </form>
</div>
    </div>
</div>

<?php endif; ?>
<?php
require_once 'footer.php';
?>