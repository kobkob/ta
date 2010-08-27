<html>
<head>
<title>TAnoBrasil.com.br</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>

<link type="text/css" href="css/custom-theme/jquery-ui-1.8.4.custom.css" rel="stylesheet" />    
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.4.custom.min.js"></script>
<script type="text/javascript">
$(function(){
   // Dialog                       
   $('#janela').dialog({
       autoOpen: false,
       width: 600,
   });
});
////////////////////////////////////////////////////////
/** inicia o site TAnoBrasil.com/taonde
  ajax carrega os resultados nos divs ''
*/
function ondeQueTa(coisa)
{
  //console.log (coisa + "- onde?");
  if (!coisa) coisa = 'brasil'; 
  $('#tacumfome').load('?/taonde/restaurantes/'+coisa);
  $('#taqui').load('?/taonde/taqui/'+coisa);
  fechaJanela();
  console.log($('#tacumfome'));
}

function pleaseOnde()
{
    var coisa = escape($('#taonde').val());
    //console.log (coisa);
    ondeQueTa(coisa);
}

var janelaAberta=0;
function abreJanela(){
   if (!janelaAberta){
       $('#janela').dialog('open');
       janelaAberta++;
       setTimeout("fechaJanela()",9000);
   }
}

function fechaJanela(){
   janelaAberta = 0;
   $('#janela').dialog('close');
}

//////////////////////////////////////////////////////////
</script>
</head>
<body onmousemove="abreJanela();">
<div id='tanobrasil'>TAnoBrasil.com.br</div>
<?php
?>
<div id='janela'>
<p align='center'>Taonde? <input id='taonde' onchange='//pleaseOnde();'><button onclick='pleaseOnde();'>:)</button>
</div>
<div id='taqui'>Resultados</div>
<div id='tacumfome'>Restaurantes</div>
</body>
</html>
