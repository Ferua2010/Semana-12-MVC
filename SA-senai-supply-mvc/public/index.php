<?php
declare(strict_types=1);

//Ponto Unico de Entrada da Aplicação : Inicializa a sessão e o autoloader PSR-4

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once dirname(__DIR__) . "/vendor/autoload.php";



$roteador = new Roteador();

//1. rotas Publicas (Qualquer Pessoa pode acessar)
$roteador->registrar('GET', '/login', [AuthController::class, 'formularioLogin']);
$roteador->registrar('POST', '/login', [AuthController::class, 'login']);