<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property int $id
 * @property string $nome
 * @property string $telefone
 * @property string $email
 * @property int $ativo
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['ativo'], 'integer'],
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
            'ativo' => 'Ativo',
        ];
    }
}
