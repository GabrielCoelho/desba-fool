<?php

//rotas da aplicação

//a variável $uri já contém os dados da rota solicitada

switch ($uri) {
    
    case '/':
    $messageController->indexFunction();
    break;
    case '/addMsg':
    $messageController->insertDB();
    break;
    case '/test':
    require './app/views/test.php';
    break;
    default:
        die('Essa rota não é valida');
        break;
}
