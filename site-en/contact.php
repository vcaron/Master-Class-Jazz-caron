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

                 <p>To contact us, please fill in the form below:</p>
            </div>
            <div class="article">
                <h2><span>Form</span></h2>
                <div class="clr"></div>
                <form action="#" method="post" id="sendemail">
                    <ol>
                        <li>
                            <label for="name">Name (required)/label>
                            <input id="name" name="name" class="text" />
                        </li>
                        <li>
                            <label for="email">Email Address (Required) </label>
                            <input id="email" name="email" class="text" />
                        </li>
                        <li>
                            <label for="website">Site web</label>
                            <input id="website" name="website" class="text" />
                        </li>
                        <li>
                            <label for="message">Your Message</label>
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