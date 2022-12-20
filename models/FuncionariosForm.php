<?php

namespace app\models;

use yii\base\Model;

class CargosForm extends Model
{
    // Construtor
    public $nome;
    public $cpf;
    public $logradouro;
    public $cep;
    public $cidade;
    public $estado;
    public $numero;
    public $complemento;
    public $cargo;

    /* 
    * Requimento dos Campos - Jhonattan 27/09 
    * @array return
    */
    public function rules()
    {
        return [
            [['nome','cpf','logradouro','cep','cidade','estado','numero','complemento','cargo'],'required'],
            ['numero','number','integerOnly'=>true]
        ];
    }

    /* 
    * Altera Nome como os Campos serão chamados - Jhonattan 27/09 
    * @array return
    */
    public function attributeLabels()
    {
        return [
            'nome' => 'Nome Completo',
            'cpf' => 'CPF',
            'logradouro' => 'Logradouro',
            'logradouro' => 'Logradouro',
            'cep' => 'CEP',
            'cidade' => 'Cidade',
            'estado' => 'UF',
            'numero' => 'Numero',
            'complemento' => 'Complemento',
            'cargo' => 'Cargo'
        ];
    }
}