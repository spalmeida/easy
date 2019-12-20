<?php

function view($dir, $param){
	$caminho = BASE.DS.'public'.DS.'themes'.DS.CONFIG['themedir'].DS.str_replace('.', DS, $dir).'.php';
	get_header();
	file_exists($caminho)? require_once $caminho : '';
	get_footer();
}