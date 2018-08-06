<?php

use yii\db\Migration;

/**
 * Class m180806_200038_table_professor
 */
class m180806_200038_table_professor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%professor}}', [
              'id' => $this->primaryKey(),
              'nome' => $this->string()->notNull()->unique(),
              'telefone' => $this->string(12),
              'email' => $this->string(),
              'idade' => $this->integer(),
              'ativo' => $this->boolean(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180806_200038_table_professor cannot be reverted.\n";
        $this->dropTable('{{%professor}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180806_200038_table_professor cannot be reverted.\n";

        return false;
    }
    */
}
