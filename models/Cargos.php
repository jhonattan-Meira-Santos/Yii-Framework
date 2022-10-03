<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cargos".
 *
 * @property int $id
 * @property string $nome_cargo
 */
class Cargos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cargos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome_cargo'], 'required'],
            [['nome_cargo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome_cargo' => 'Nome Cargo',
        ];
    }
}
