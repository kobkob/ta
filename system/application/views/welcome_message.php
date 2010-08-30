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

#tacumfome {
  visibility: hidden;
}
#taqui {
  visibility: hidden;
}

#tanobrasil {
  position: absolute;
  z-index: 99;
  bottom:  0px;
  width:   100%;
  height:  180px;
  background: #1a1a1a ;
  color: #ffffff;
  font: 90px  "Arial" , sans-serif;
  text-align: center;        
  filter:alpha(opacity=30); 
  -moz-opacity:0.3;
  opacity:0.3;
  left: 0px
}

#bodyContainer{
  z-index: 2;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0px;
  overflow: hidden;
  /*border: 2px solid  #68a91c;*/
  left: 0px
}


</style>

<link type="text/css" href="css/custom-theme/jquery-ui-1.8.4.custom.css" rel="stylesheet" />    
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.4.custom.min.js"></script>
<script type="text/javascript" src="http://www.panoramio.com/wapi/wapi.js?v=1&amp;hl=fr"></script>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAeQvcoXjifuXSGje-QnnCdBQUYnmzp9KQ61b_SwfTbZ1X7ZRusxSKYFdRWVjhwCgcCdzFIcPA34L_6A" type="text/javascript"></script>

<!-- Script tanobrasil.js -->
<script type="text/javascript">
$(function(){
   // Dialog                       
   $('#janela').dialog({
       autoOpen: false,
       width: 400,
   });
   var frW = pageWidth();
   var frH = pageHeight();
   $('#bodyFrame').attr('src', "http://www.panoramio.com/wapi/template/slideshow.html?width="+frW+"&amp;height="+frH+"&amp;tag=brasil");

/*
   $('#fotos').load("http://www.panoramio.com/wapi/template/slideshow.html?width=1024&amp;height=768&amp;tag=brasil");
 */

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
    if (janelaAberta){
   janelaAberta = 0;
   $('#janela').dialog('close');
    }
}

function pageWidth() {
    return window.innerWidth != null? window.innerWidth : document.documentElement && document.documentElement.clientWidth ? document.documentElement.clientWidth : document.body != null ? document.body.clientWidth : null;
} 

function pageHeight() {
    return  window.innerHeight != null? window.innerHeight : document.documentElement && document.documentElement.clientHeight ?  document.documentElement.clientHeight : document.body != null? document.body.clientHeight : null;
} 

function posLeft() {
    return typeof window.pageXOffset != 'undefined' ? window.pageXOffset :document.documentElement && document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft ? document.body.scrollLeft : 0;
} 

function posTop() {return typeof window.pageYOffset != 'undefined' ?  window.pageYOffset : document.documentElement && document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop ? document.body.scrollTop : 0;
} 

function posRight() {
    return posLeft()+pageWidth();
} 

function posBottom() {
    return posTop()+pageHeight();
}



//////////////////////////////////////////////////////////
</script>
<!-- fim tanobrasil.js -->

</head>
<body onmousemove="abreJanela();">
<div id='bodyContainer'>
<center>
<iframe id='bodyFrame'
   src="http://www.panoramio.com/wapi/template/slideshow.html?width=640&amp;height=480&amp;tag=brasil"
   frameborder="0" width="100%" height="100%" scrolling="no" marginwidth="0" marginheight="0" align="center">
</iframe>
</center>
</div>
<div id='tanobrasil'>TAnoBrasil.com.br</div>
<?php
?>
<div id='janela'>
<p align='center'>Taonde? <input id='taonde' onfocus='janelaAberta=0;' onblur='janelaAberta=1;' onChange='pleaseOnde();'><button onclick='pleaseOnde();'>:)</button>
</div>
<div id='taqui'>Resultados</div>
<div id='tacumfome'>Restaurantes</div>
<div id='fotos'></div>
<div id='mapa'></div>
<!--
-->
</body>
</html>
