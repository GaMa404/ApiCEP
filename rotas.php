<?php

use ApiCep\Controller\EnderecoController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri)
{
    case '/endereco/by-cep':
        EnderecoController::getLogradouroByCep();
    break;

    case '/endereco/by-bairro':
        EnderecoController::getLogradouroByBairroAndCidade();
    break;

    case '/cep/by-logradouro':
        EnderecoController::getCepByLogradouro();
    break;
 
    case '/cidade/by-uf':
        EnderecoController::getCidadesByUf();
    break;

    case '/bairro/by-cidade':
        EnderecoController::getBairrosByIdCidade();
    break;

    default:
        http_response_code(403);
    break;
}
