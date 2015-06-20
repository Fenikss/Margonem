<?php require_once('config/config.php'); ?> 
<?php require_once('system/mapy.php'); ?>


		<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
		<script type="text/javascript" src="js/idz.js"></script>
		<script type="text/javascript" src="js/system.js"></script>


		
		
		
		
		<link rel="stylesheet" type="text/css" href="game.css">




<div id="bpanel"></div>
<div id="l"></div>
<div id="g"></div>
<div id="p"></div>
<div id="d"></div>


		
		
		
		
		
		
		
		

<div id="objects"><div style="background-position: <?php echo $poz_x; ?>px <?php echo $poz_y; ?>px; 
background-image: 
url('<?php echo $mapa['maps']; ?>');"
 id="oMap"></div>


<div id="status"><?php echo "".$mapa['nazwa']." (".$player['x'].",".$player['y'].")"; ?></div>











<div style="background-image: 
url(<?php echo $player['avatar']; ?>);
 display: block; width: 32px; height: 48px; left: 240px; top: 240px; 
background-position: 0px 0px; z-index: 29;" id="oHero"></div>















<script type='text/javascript'>
var pp = 0;
var shop = 0;
var chatmode = 0;
var x = <?php echo "".(($player['x'] * -32) + 240).""; ?>;
var y = <?php echo "".(($player['y'] * -32) + 240).""; ?>;
</script>