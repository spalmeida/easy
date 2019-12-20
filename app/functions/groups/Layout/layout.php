<?php 

function assets($asset){
	return CONFIG['protocol'].CONFIG['sitename'].'/resources/'.CONFIG['resource'].'/'.$asset.'?v='.CONFIG['versionAssets'];
}

function get_part($part){
	require_once get_template().$part.'.php';
}

function get_header(){
	require_once get_template().'master_header.php';
	get_part('header');
	get_part('menu');
	get_part('header_page');
}

function get_footer(){
	get_part('footer_page');
	get_part('footer');
	require_once get_template().'master_footer.php';
}

function get_template(){
	return BASE.DS.'public'.DS.'__templates'.DS.CONFIG['template'].DS;
}

function filter_page(){
	foreach (explode('/',app('request')->server['REQUEST_URI']) as $value) {

		if($value != ""){
			$page[] = $value;
		}
	}
	return '<b>'.strtoupper(end($page)).'</b>';
}