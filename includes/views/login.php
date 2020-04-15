<?php

echo $this->header;
/*des is für den text*/
?>
<div id="main">
        <div class="row">
            <p class="col-xs-13">
                Melden Sie sich bitte an um den Dienst nutzen zu können. <br><br> Sie besitzen noch keinen Account? Dann können Sie
                sich <a href="login#registrierung" class="registerOverlay"> hier</a>  registrieren.
            </p>
            <div class="desishintergrundbild"></div>
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
                    <label for="username" class="col-md-2">Benutzername</label>
                    <input type="text" name="username" id="username" class="benutzername" value="" placeholder=""
                </div>
                </div>
                <!--(alte benutzername eingabe)<div class="form-group">
                    <label for="username" class="col-xs-12 col-md-2">Benutzername</label>
                    <div class="col-xs-12 col-md-10">
                        <input type="text" name="username" id="username" class="text form-control" value="" placeholder="Benutzername">
                    </div>
                </div>-->
                <br>
                <!--Passwort Eingabefeld-->
                <div class="form-group">
                    <label for="password" class="col-md-3">Passwort</label>
                    <div class="passwort">
                        <input type="password" name="password" id="password" class="passwort" value="" placeholder="">
                    </div>
                </div>
                <!--(alte passworteingabe)<div class="form-group">
                    <label for="password" class="col-xs-12 col-md-2">Passwort</label>
                    <div class="col-xs-12 col-md-10">
                        <input type="password" name="password" id="password" class="text form-control" value="" placeholder="Passwort">
                    </div>
                </div>-->
                <div class="wrapper">
                    <button type="submit" class="button">Anmelden</button>
                    !--<input type="hidden" name="action" value="login">
                    <!--(alter anmeldebutton)<button type="submit" class="btn btn-default">Anmelden</button>
                <input type="hidden" name="action" value="login">-->
                    <!--des is für den Anmeldebutton-->
                </div>
            </form>
        </div>
</div>
<br><br>
<div class="modal fade<?php if($registerError):?> in<?php endif; ?>" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="registerModalLabel">Registrierung</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <p class="col-xs-12">
                        Wir benötigen folgende Angaben um Sie für unseren Dienst registrieren zu können:
                    </p>
                    <form method="post" action="login" class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Benutzername:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Benutzernamen eingeben">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Passwort (mindestens 8 Zeichen):</label>
                            <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Bitte Passwort eingeben (mind. 8 Zeichen)">
                        </div>
                        <div class="form-group">
                            <label for="pwd2">Passwort (wiederholen):</label>
                            <input type="password" name="pwd2" class="form-control" id="pwd2" placeholder="Bitte das Passwort wiederholen">
                        </div>
                        <input type="hidden" name="action" value="register">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Abbraechen</button>
                <button type="button" class="btn btn-primary">Registrieren</button>
            </div>
        </div>
    </div>
</div>
</div>
<?php

echo $this->footer;

?>


