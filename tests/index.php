<?php
include_once './vendor/autoload.php';

$vindi = new Codemaxbr\Vindi\Vindi();
$customers = $vindi->customers();
$products = $vindi->products();

$customer = $customers->create([
    'name' => 'Cliente teste',
    'email' => 'lucas.codemax@gmail.com'
]);

echo "Novo cliente criado com o id '{$customer->id}'\n";

$product = $products->create([
    'name' => 'Teste produto',
    'pricing_schema' => [
        'price' => 100,
        'schema_type' => 'flat'
    ]
]);

echo "Novo produto criado com o id '{$product->id}'.\n";