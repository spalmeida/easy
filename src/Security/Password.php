<?php

namespace EASY;

class Security{

 /*
 criptografar senha de acesso
 */
 public function hashPass($pass){

 	$options = [
 		'cost' => 10,
 	];

 	return password_hash($pass, PASSWORD_BCRYPT, $options);
 }

 public function encryptPass($input, $key1, $key2){

 	$first_key 	= $key1;
 	$second_key = $key2;
 	$method = "aes-256-cbc";

 	$iv_length = openssl_cipher_iv_length($method);
 	$iv = openssl_random_pseudo_bytes($iv_length);

 	$first_encrypted = openssl_encrypt($input,$method,$first_key, OPENSSL_RAW_DATA ,$iv);
 	$second_encrypted = hash_hmac('sha3-512', $first_encrypted, $second_key, TRUE);
 	$output = base64_encode($iv.$second_encrypted.$first_encrypted);

 	return $output;

 }


 public function Decrypt($output, $key1, $key2){

 	$first_key 	= $key1;
 	$second_key = $key2;
 	$mix = base64_decode($output);
 	$method = "aes-256-cbc";
 	$iv_length = openssl_cipher_iv_length($method);

 	$iv = substr($mix,0,$iv_length);
 	$second_encrypted = substr($mix,$iv_length,64);
 	$first_encrypted = substr($mix,$iv_length+64);

 	$data = openssl_decrypt($first_encrypted,$method,$first_key,OPENSSL_RAW_DATA,$iv);
 	$second_encrypted_new = hash_hmac('sha3-512', $first_encrypted, $second_key, TRUE);


 	if (hash_equals($second_encrypted,$second_encrypted_new)){
 		return $data;
 	}else{
 		return false;
 	}

 }

}
