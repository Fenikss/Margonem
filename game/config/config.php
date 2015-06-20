<?php
$host = 'localhost';
$player = 'root';
$pass = '';
$db = 'margonem';

$connect = @mysql_connect($host, $player, $pass) or die('socket error - no connect');
@mysql_select_db($db, $connect) or die('socket error - no db');
@mysql_query("SET NAMES 'utf8-polish-ci'");

session_start();

$player = @mysql_fetch_array(@mysql_query("select * from player where id = '".$_SESSION['player']."' limit 1"));
$mapa = @mysql_fetch_array(@mysql_query("select * from mapa where id = ".$player['mapa']." limit 1"));
?>