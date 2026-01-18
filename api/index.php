<?php

// Carga Composer autoload (obligatorio)
require __DIR__ . '/../vendor/autoload.php';

// Opcional: fuerza production
$_ENV['APP_ENV'] = $_ENV['APP_ENV'] ?? 'production';
$_SERVER['APP_ENV'] = 'production';

// Forward directo a Laravel
require __DIR__ . '/../public/index.php';
