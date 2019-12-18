# EASY
Mini framework para facilitar a vida na criação de projetos.
## INSTALL
``` composer require worldvisual/easy```
### GET STARTED
```php
// na index do seu projeto use
require_once 'vendor/autoload.php'

use EASY\Connect;
use EASY\Query;

//efetua a conexão com banco de dados
$connect  = new Connect();
$conn = $connect->conn('hostname','username', 'password','db_name');

//classe destinada a interação com banco de dados
$query = new Query($conn);
```
## USING
Listar todos os registro de uma determinada tabela
```php
$query->selectAll('table');
```
Listar registro com alguma condição
```php
$query->selectWhere('table', 'id=1');
```
O retorno da lista não se repete (DISTINCT)
```php
$query->selectWhere('column1, column2', 'table', 'id=1');
```
Retorno por id
```php
$query->selectById('table', '1');
```
Inserir informações no banco
```php
$query->Query('table', $array, 'insert');
```
Atualizar informações do banco
```php
$query->Query('table', $array, 'update', 'id=1');
```
