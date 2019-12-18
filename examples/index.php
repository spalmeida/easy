<?php

require_once '../vendor/autoload.php';

use EASY\Connect;
use EASY\Query;

$connect  = new Connect();
$conn = $connect->conn('localhost','root', '','intermez_system');

$query = new Query($conn);

//listar todos os registro de uma determinada tabela
//echo '<pre>';
//print_r($query->selectAll('table'));
//echo '</pre>';

//listar registro com condição
//echo '<pre>';
//print_r($query->selectWhere('table', 'id=1'));
//echo '</pre>';

//o retorno da lista não se repete
//echo '<pre>';
//print_r($query->selectWhere('column1, column2', 'table', 'id=1'));
//echo '</pre>';

//retorno por id
//echo '<pre>';
//print_r($query->selectById('table', '1'));
//echo '</pre>';

//inserir informações no banco
//echo '<pre>';
//print_r($query->Query('table', $array, 'insert'));
//echo '</pre>';

//Atualizar informações do banco
//echo '<pre>';
//print_r($query->Query('table', $array, 'update', 'id=1'));
//echo '</pre>';