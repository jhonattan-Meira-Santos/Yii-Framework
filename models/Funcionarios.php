<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionarios".
 *
 * @property int $id
 * @property string $nome_funcionario
 * @property string $cpf
 * @property string $logradouro
 * @property string $cep
 * @property string $cidade
 * @property string $estado
 * @property int $numero
 * @property string|null $complemento
 * @property int $cargo_id
 */
class Funcionarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome_funcionario', 'cpf', 'logradouro', 'cep', 'cidade', 'estado', 'numero', 'cargo_id'], 'required'],
            [['numero', 'cargo_id'], 'integer'],
            [['nome_funcionario', 'cidade', 'estado'], 'string', 'max' => 100],
            [['cpf'], 'string', 'max' => 14],
            [['logradouro', 'complemento'], 'string', 'max' => 255],
            [['cep'], 'string', 'max' => 9],
            [['cargo_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome_funcionario' => 'Nome Funcionario',
            'cpf' => 'Cpf',
            'logradouro' => 'Logradouro',
            'cep' => 'Cep',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'numero' => 'Numero',
            'complemento' => 'Complemento',
            'cargo_id' => 'Cargo ID',
        ];
    }
}
