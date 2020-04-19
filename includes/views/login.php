<?php

echo $this->header;
/*des is für den text*/
?>
<div id="main">
    <div class="loginhintergrund">
        <div class="row">
            <div class="logo">
                <div id="zumanfang"class="name">Show The World</div>
            </div>
                <p class="col-xs-13">
                    Melden Sie sich bitte an um den Dienst nutzen zu können. <br><br> Sie besitzen noch keinen Account? Dann können Sie
                    sich <a href="#registerModalLabel" class="registerOverlay"> hier</a>  registrieren.
                </p>
                <form method="post" action="login" class="form-horizontal col-xs-12">
                    <?php if($this->errorPasswd == true): ?>
                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4>Benutzername und/oder Passwort sind falsch</h4>
                            <p>Prüfen Sie bitte ob Sie sich nicht vertippt haben und versuchen Sie es erneut!</p>
                        </div>
                    <?php endif; ?>
                    <!--Benutzername Eingabefled-->
                    <div class="form-group">
                        <label for="username" class="benutzername">Benutzername:</label>
                        <div class="col-xs-12 col-md-10">
                            <input type="text" name="username" id="username" class="benutzername1" value="" placeholder="Benutzername">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="passwort">Passwort:</label>
                        <div class="col-xs-12 col-md-10">
                            <input type="password" name="password" id="password" class="passwort1" value="" placeholder="Passwort">
                        </div>
                    </div>
                    <div class="deranmeldebutton">
                        <button type="submit" class="deranmeldebutton1">Anmelden</button>
                        <input type="hidden" name="action" value="login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br>
    <div class="modal fade <?php if($registerError):?> in<?php endif; ?>" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!--Überschrift-->
                <h4 class="registerüberschrift" id="registerModalLabel">Registrierung</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form method="post" action="login" class="col-xs-12">
                        <div class="form-group">
                            <label class="rbenutzername" for="name">Benutzername:</label>
                            <div class="random123">
                                <input type="text" class="rbenutzername1" name="name" id="name" placeholder="Benutzernamen eingeben">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="rpasswort" for="pwd">Passwort:</label>
                            <div class="random234">
                                <input type="password" name="pwd" class="rpasswort1" id="pwd" placeholder="mind. 8 Zeichen">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="rpasswort2" for="pwd2">Passwort wiederholen:</label>
                            <div class="random345">
                                <input type="password" name="pwd2" class="rpasswort21" id="pwd2" placeholder="Passwort wiederholen">
                            </div>
                        </div>
                        <input type="hidden" name="action" value="register">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"><a  style="text-decoration: none; color: black; font-size: 25px" href="#nummer1"> Registrieren</a></button>
            </div>
            <!--alte buttons-->
            <!--<button type="button" class="btn btn-primary">Registrieren</button>-->
        </div>
    </div>
</div>
<?php

echo $this->footer;

?>


