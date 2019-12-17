<?php

require_once '../vendor/autoload.php';

echo '<pre>';
print_r(query()::selectAll('assinante'));
echo '</pre>';