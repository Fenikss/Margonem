var loading = false;
$(document).ready(function(){

$("div#l").click(function(){
send('left',8,0,1);
});
$("div#p").click(function(){
send('right',-8,0,2);
});
$("div#g").click(function(){

send('up',0,8,3);
});
$("div#d").click(function(){
send('down',0,-8,0);
});
$("div#oHero").click(function(){
});

$(document).keydown(function (event) {
if(event.keyCode==65 && chatmode==0){send('left',8,0,1);}
if(event.keyCode==87 && chatmode==0){send('up',0,8,3);}
if(event.keyCode==68 && chatmode==0){send('right',-8,0,2);}
if(event.keyCode==83 && chatmode==0){send('down',0,-8,0);}	
});
});

function send(page,ox,oy,direction){
if(loading) return false;
loading = true;
$.ajax({
type: "POST",
url: "system/idz.php",
data:"move="+page,
success : function (msg){
loading = false;
if (msg){
$('#oMap').css("background-image","url("+msg+")");
setTimeout("map_poz(x+="+ox+",y+="+oy+");animation(0,"+direction+");",10);
setTimeout("map_poz(x+="+ox+",y+="+oy+");animation(1,"+direction+");",20);
setTimeout("map_poz(x+="+ox+",y+="+oy+");animation(2,"+direction+");",30);
setTimeout("map_poz(x+="+ox+",y+="+oy+");animation(3,"+direction+");",40);
setTimeout("animation(0,"+direction+");",50);
}

}
});
}

function map_poz(x,y){
$("#oMap").css("background-position", x+"px "+y+"px");
}
function animation(cage,direction){
$("#oHero").css("background-position",(-cage*32)+"px "+(-direction*48)+"px");
}