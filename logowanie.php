<?php require_once('game/config/config.php'); ?>
<?php

$db_player = @mysql_num_rows(@mysql_query("select * from player"));
$code = @mysql_query("select * from player order by id asc");
if(!empty($_POST['login'])){
if(!empty($_POST['haslo'])){ 
if(!empty($_POST['player'])){
$db_player_dane = @mysql_fetch_array(@mysql_query("select * from player where id = '".$_POST['player']."' and login = '".$_POST['login']."' and haslo = '".$_POST['haslo']."' limit 1"));
if(!empty($db_player_dane)){
$_SESSION['player'] = $_POST['player'];
header('Location: game/game.php');
} else {
echo "<span style='color: red; font-weight: bold;'>Bledny Login</span><hr>";
}
} else {
echo "<span style='color: red; font-weight: bold;'>Bledne Haslo</span><hr>";

}
}
}
?>


<center>
<form action='logowanie.php' method='post'>
<select name="player">
<?php
while($wczytuje = @mysql_fetch_array($code)){
echo "<option value='".$wczytuje['id']."'>".$wczytuje['nazwa']."(".$wczytuje['poziom'].")(".$wczytuje['profesja'].")</option>";
}
?>
</select>
<html>
	<head>
	<style type="text/css">
		#submit{
		background-image: url(submit.png);
		width: 110px;
		height: 30px;
		border: 0;
		}
	</style>
	</head>
	<body>
	<form action="" method="post">
		<fieldset>
		<legend>Logowanie</legend>
		<label for="login">Login: </label><input type="text" name="login" id="login"/><br />
		<label for="haslo">Hasło: </label><input type="password" name="haslo" id="haslo"/><br />
		<input type="submit" value="" id="submit"/>
		</fieldset>
	</form>
	</body>
</html>