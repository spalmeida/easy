
<h1 align="center"><b>EASY</b></h1>
<p align="center">Mini framework para facilitar a vida na criação de projetos.</p>

<p align="center">
 <img src="https://img.shields.io/github/stars/worldvisual/easy.svg" alt="Stars">
 <img src="https://img.shields.io/github/forks/worldvisual/easy.svg" alt="Forks">
 <img src="https://img.shields.io/github/tag/worldvisual/easy.svg" alt="Tag">
 <img src="https://img.shields.io/github/issues/worldvisual/easy.svg" alt="Issues"> 
 <img src="https://poser.pugx.org/worldvisual/easy/d/total.svg" alt="Total Downloads">
 <img src="https://poser.pugx.org/worldvisual/easy/v/stable.svg" alt="Latest Stable Version">
 <img src="https://poser.pugx.org/worldvisual/easy/license.svg" alt="License">
</p>

## INSTALL

##### Projeto
```
$ composer create-project --prefer-dist worldvisual/easy SEU_PROJETO
```
### GET STARTED
```php
// DIR -> (app/config.inc.php)

/**
 * DATABASE CONNECTION
 */

 'hostname' => 'localhost',
 'username' => 'root',
 'password' => '',
 'database' => 'easy',

 /**
 * SITENAME
 * -- host:  yoursite.com.br or yoursite.com.br/sub
 * -- local: localhost or localhost/sub
 */

 'sitename' => 'localhost',

 /**
 * PROTOCOL
 * http://
 * https://
 */

 'protocol' => 'http://',

 /**
 * THEME AND RESOURCES
 */

 'themedir' => 'default',
 'template' => 'default',
 'resource' => 'default'
```
## ROUTES
Você pode definir suas rotas em (routes/web.php) para mais informações você pode consultar em  **[NEZAMY](https://nezamy.com/route "nezamy")** - **[GIT](https://github.com/nezamy/route "GIT")**
## VIEWS
use em( public/themes/*SEU_TEMA*) | definido em config.inc
## LAYOUT
use em (public/__templates/*SEU_TEMPLATE*) | definido em config.inc 
## USING
##### - Listar todos os registro de uma determinada tabela
```php
$query->selectAll('table');
```
------------
##### - Listar registro com alguma condição
```php
$query->selectWhere('table', 'id=1');
```
------------
##### - O retorno da lista não se repete (DISTINCT)
```php
$query->selectWhere('column1, column2', 'table', 'id=1');
```
------------
##### - Retorno por id
```php
$query->selectById('table', '1');
```
------------

##### - Inserir Informações No Banco
```php
$query->Query('table', $array, 'insert');
```
------------
##### - Atualizar informações do banco
```php
$query->Query('table', $array, 'update', 'id=1');
```
