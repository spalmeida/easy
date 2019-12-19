<?php

function view($dir){
	$caminho = BASE.DS.'public'.DS.'themes'.DS.CONFIG['themedir'].DS.str_replace('.', DS, $dir).'.php';
	file_exists($caminho)? require_once $caminho : '';
}