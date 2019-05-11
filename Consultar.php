<?php
include __DIR__ . '/vendor/autoload.php';

$pagarme = new PagarMe\Client('ak_test_A1cw4jp07eQWYTZCGKc6KJaT2e9TgF');

$transacao = $pagarme->transactions()->get([
    'id'=> '6337483'
]);

echo $transacao->status;
