<?php

// panggil autoload agar semua class dapat di load secara otomatis
require_once __DIR__ . '/../vendor/autoload.php';

use AMCC\MVC\Controller\HomeController;
use AMCC\MVC\Route\Router;

// buat route
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/about', HomeController::class, 'about');
Router::add('GET', '/mahasiswa', HomeController::class, 'listMahasiswa');

// jalankan route
Router::run();
