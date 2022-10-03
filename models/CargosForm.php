<?php

namespace app\models;

use yii\base\Model;

class CargosForm extends Model
{
    // Construtor
    public $nome;

    /* 
    * Requimento dos Campos - Jhonattan 27/09 
    * @array return
    */
    public function rules()
    {
        return [
            ['nome','required']
        ];
    }

    /* 
    * Altera Nome como os Campos serão chamados - Jhonattan 27/09 
    * @array return
    */
    public function attributeLabels()
    {
        return [
            'nome' => 'Nome do Cargo',
        ];
    }
}