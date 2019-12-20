<?php

$route->get(['', 'home', 'index', 'teste/teste'], function(){

	return view('home', $param ='apenas um teste');
});
