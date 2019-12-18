<?php

namespace EASY;

class Utilities{

	public function removeAccent($string){

		$remove_separator = str_replace(" ", "_", $string);
		$name = strtolower(preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $remove_separator ) ));

		return utf8_encode($name);

	}

	public function randValue($value){

		$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMOPQRSTUVXWYZ0123456789+_-';
		$qtd_characters = strlen($characters);
		$hash=NULL;

		for($x=1;$x<=$value;$x++){

			$position = rand(0,$qtd_characters);
			$hash .= substr($characters,$position,1);

		}
		return $hash;
	}

	public function getUserIP(){

		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];

		if(filter_var($client, FILTER_VALIDATE_IP)){
			$ip = $client;
		}elseif(filter_var($forward, FILTER_VALIDATE_IP)){
			$ip = $forward;
		}else{
			$ip = $remote;
		}
		return $ip;
	}
}
