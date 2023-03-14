<?php

namespace ApiCep\Controller;

use ApiCep\Model\{ EnderecoModel, CidadeModel };
use Exception;

class EnderecoController extends Controller{
    public static function getCepByLogradouro() : void
    {
        try
        {
            $logradouro = $_GET['logradouro'];

            $model = new EnderecoModel();
            $model->getCepByLogradouro($logradouro);

            parent::getResponseAsJSON($model->rows);
        }
        catch(Exception $e)
        {
            parent::getExceptionAsJSON($e);
        }
    }

    public static function getLogradouroByBairroAndCidade() : void 
    {
    }

    public static function getLogradouroByCep() : void
    {
    }

    public static function getBairrosByIdCidade() : void
    {
    }

    public static function getCidadesByUf() : void
    {
    }
}