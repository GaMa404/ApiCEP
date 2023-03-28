<?php

use ApiCep\Controller\EnderecoController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri)
{
    // OK 
    case '/endereco/by-cep':
        EnderecoController::getLogradouroByCep();
    break;

    // OK
    case '/logradouro/by-bairro':
        EnderecoController::getLogradouroByBairroAndCidade();
    break;

    // OK
    case '/cep/by-logradouro':
        EnderecoController::getCepByLogradouro();
    break;
 
    // OK
    case '/cidade/by-uf':
        EnderecoController::getCidadesByUf();
    break;

    // OK
    case '/bairro/by-cidade':
        EnderecoController::getBairrosByIdCidade();
    break;

    default:
        http_response_code(403);
    break;
}
