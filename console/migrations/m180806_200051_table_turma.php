<?php

use yii\db\Migration;

/**
 * Class m180806_200051_table_turma
 */
class m180806_200051_table_turma extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%turma}}', [
              'id' => $this->primaryKey(),
              'sala' => $this->string(),
              'descricao' => $this->string(),
              'nomeTurma' => $this->string(),
              'ativo' => $this->boolean(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180806_200051_table_turma cannot be reverted.\n";
        $this->dropTable('{{%turma}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180806_200051_table_turma cannot be reverted.\n";

        return false;
    }
    */
}
