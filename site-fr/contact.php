<?php
require_once ('header.php');
?>


    <div class="full-width-container block-2">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <header>
                        <h2><span>Contact</span></h2>
                    </header>

                 <p>Pour nous contacter, veuillez remplir le formulaire ci-dessous :</p>
            </div>
            <div class="article">
                <h2><span>Formulaire</span></h2>
                <div class="clr"></div>
                <form action="#" method="post" id="sendemail">
                    <ol>
                        <li>
                            <label for="name">Nom (obligatoire)</label>
                            <input id="name" name="name" class="text" />
                        </li>
                        <li>
                            <label for="email">Addresse Email (obligatoire)</label>
                            <input id="email" name="email" class="text" />
                        </li>
                        <li>
                            <label for="website">Site web</label>
                            <input id="website" name="website" class="text" />
                        </li>
                        <li>
                            <label for="message">Votre Message</label>
                            <textarea id="message" name="message" rows="8" cols="50"></textarea>
                        </li>
                        <li>
                            <input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
                            <div class="clr"></div>
                        </li>
                    </ol>
                </form>
            </div>
        </div>

        <div class="clr"></div>
    </div>
</div>
<?php
require_once 'footer.php';
?>