<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "professor".
 *
 * @property int $id
 * @property string $nome
 * @property string $telefone
 * @property string $email
 * @property int $idade
 * @property int $ativo
 */
class Professor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'professor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['idade', 'ativo'], 'integer'],
            [['nome', 'email'], 'string', 'max' => 255],
            [['telefone'], 'string', 'max' => 12],
            [['nome'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'idade' => 'Idade',
            'ativo' => 'Ativo',
        ];
    }
}
