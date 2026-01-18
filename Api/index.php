<?php

// Carga el autoload de Composer (necesario para Laravel)
require __DIR__ . '/../vendor/autoload.php';

// Opcional: fuerza entorno production
if (!isset($_SERVER['APP_ENV'])) {
    $_SERVER['APP_ENV'] = 'production';
}

// Redirige todo el tráfico al entry point real de Laravel
require __DIR__ . '/../public/index.php';
