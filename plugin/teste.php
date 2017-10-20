<?php
		ini_set("memory_limit","100M");
		header('Content-type: application/json');

		include "simple_html_dom.php";
		include "pretty_json.php";

		//$limit = $_GET["limit"]; 

		$url = "http://www.horariodebrasilia.org/";
		$html = file_get_html($url);

		$content = $html->find('#relogio',0);

		$info = array();

		$teste = $content->plaintext;

		echo $teste;
		?>	