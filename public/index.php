<?php

$uri = $_SERVER['REQUEST_URI'] ?? '/';

if ($uri === '/up') {
    http_response_code(200);
    echo 'ok';
    exit;
}

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture(),
    $app->make(Illuminate\Contracts\Container\Container::class)
);

$response->send();
$kernel->terminate($request, $response);
