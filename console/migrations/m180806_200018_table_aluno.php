<?php

use yii\db\Migration;

/**
 * Class m180806_200018_table_aluno
 */
class m180806_200018_table_aluno extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%aluno}}', [
              'id' => $this->primaryKey(),
              'nome' => $this->string()->notNull()->unique(),
              'telefone' => $this->string(12),
              'email' => $this->string(),
              'ativo' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180806_200018_table_aluno cannot be reverted.\n";
        $this->dropTable('{{%aluno}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180806_200018_table_aluno cannot be reverted.\n";

        return false;
    }
    */
}
