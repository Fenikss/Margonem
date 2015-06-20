// ENTERTAINMENT PRODUCTION BY FENNIKS ALL RIGHTS RESERVED
// COPYRIGHT @ 2014 ALL RIGHTS RESERVED
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
</select><br>
<input type='text' name='login' style='width: 100px;'><br>
<input type='password' name='haslo' style='width: 100px;'><br>
<input type='submit' value='Zaloguj'><br>
</form>
<hr>

// ENTERTAINMENT PRODUCTION BY FENNIKS ALL RIGHTS RESERVED
// COPYRIGHT @ 2014 ALL RIGHTS RESERVED