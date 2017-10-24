<?php

include "simple_html_dom.php";
include "pretty_json.php";

//$limit = $_GET["limit"]; 

$url = "http://www.horariodebrasilia.org/";
$html = file_get_html($url);

$content = $html->find('#relogio',0);

$info = array();

$teste = $content->plaintext;

echo $teste;

//array_push($info, 0) ;

$url = "https://www.dolarhoje.net.br/";
$html = file_get_html($url);

$content = $html->find('#divSpdInText',0);

$info = array();

$teste = $content->plaintext;

echo " <br />".$teste;

//infomoneytest
$url = "http://www.infomoney.com.br/";
$html = file_get_html($url);

$content = $html->find('.ticker',0);

$info = array();

$teste = $content->plaintext;

echo $teste;

/*
foreach($content->find('h2.title') as $elemento){
	$titulos = array();
	
	$a = $elemento->find('a',0);
	
	$titulo= $a->plaintext;
	
	$titulos["titulo"] = $titulo;
	
	array_push($info,$titulo);
}


foreach($content->find('h2.title') as $elemento){
	$titulos = array();
	
	$a = $elemento->find('a',0);
	
	$titulo= $a->plaintext;
	
	$titulos["titulo"] = $titulo;
	
	array_push($info,$titulo);
}

foreach($content->find('div.entry') as $elemento){

	$imgs = array();
	$textos = array();
	
	$img = $elemento->find('img',0);
	
	$urlImg = $img->src;
	
	$imgs["url"] = $urlImg;
	
	$texto = $elemento->plaintext;
	
	$textos["texto"] = $texto;
	
	array_push($info,$imgs);
	array_push($info,$textos);
}

print_r(pretty_json(json_encode($info)));

*/
?>

