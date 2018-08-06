<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "turma".
 *
 * @property int $id
 * @property string $sala
 * @property string $descricao
 * @property string $nomeTurma
 * @property int $ativo
 */
class Turma extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'turma';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ativo'], 'integer'],
            [['sala', 'descricao', 'nomeTurma'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sala' => 'Sala',
            'descricao' => 'Descricao',
            'nomeTurma' => 'Nome Turma',
            'ativo' => 'Ativo',
        ];
    }
}
