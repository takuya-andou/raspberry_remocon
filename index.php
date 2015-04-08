<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<?php 


if($_GET["aircon"]=='on'){
	exec('irsend SEND_ONCE AIRCON airconON ');
}elseif ($_GET["aircon"]=='off') {
	exec('irsend SEND_ONCE AIRCON airconOFF ');
}
if($_GET["light"]=='on'){
	exec('irsend SEND_ONCE AIRCON lightMAX ');
}elseif ($_GET["light"]=='off') {
	exec('irsend SEND_ONCE AIRCON lightOFF ');
}

?>


<a href="/?aircon=on"><button type="button" class="btn btn-lg btn-danger">エアコンON</button></a>
<a href="/?aircon=off"><button type="button" class="btn btn-lg btn-success">エアコンOFF</button></a><BR><BR>
<a href="/?light=on"><button type="button" class="btn btn-lg btn-danger">照明ON</button></a>
<a href="/?light=off"><button type="button" class="btn btn-lg btn-success">照明OFF</button></a>

