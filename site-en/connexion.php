<?php
require_once ('header.php');

if(isset($_SESSION['auth'])){
    echo '<script type="text/javascript">window.location="index.php";</script>';
}
?>
    <div class="container">
        <div class="card card-container">
           <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="login.php" method="post">

                <span id="reauth-email" class="reauth-email"></span>
                <input class="form-control" id="pseudo" name="pseudo" type="text" placeholder="Pseudo" />

                <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                <div id="remember" class="checkbox">
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Connection</button>
            </form>
        </div>
    </div>

<?php
require_once 'footer.php';
?>