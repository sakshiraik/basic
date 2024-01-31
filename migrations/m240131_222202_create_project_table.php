<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 */
class m240131_222202_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'title' =>$this->string(100),
            'description' =>$this->string(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%project}}');
    }
}
