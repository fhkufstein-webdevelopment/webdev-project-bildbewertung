<!DOCTYPE html>
<html lang="de">
<head>
	<title><?php echo $this->title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/login2.css" rel="stylesheet">
	<?php if($this->current == "login"): ?>
		<link href="css/login2.css" rel="stylesheet">
	<?php endif; ?>
		<link href="css/login2.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<?php if($this->current == "index"): ?>
		<script type="text/javascript" src="js/core.js"></script>
	<?php elseif($this->current == "register"): ?>
		<script type="text/javascript" src="js/register.js"></script>
	<?php elseif($this->current == "login"): ?>
		<script type="text/javascript" src="js/toastr.min.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
	<?php endif; ?>
</head>
<body>
    <div class="inner">
        <div class="logo">
            <div class="name">Show The World</div>
        </div>
            <?php if(LOGGED_IN == true): ?>
        <div class="abmeldenwrapper">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <a class="abmeldebutton" href="logout" style="text-decoration: none;">Abmelden</a>
                    <p class="angemeldetals">Angemeldet als: <strong class="username"><?php echo $this->username; ?></strong></p>
                </div>
            </div>
        </div>
            <?php endif; ?>
    </div>
</body>
</html>