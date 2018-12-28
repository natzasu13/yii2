<?php

use yii\db\Migration;

/**
 * Handles the creation of table `documents`.
 */
class m181227_192244_create_documents_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('documents', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'date' => $this->dateTime()->notNull(),
            'active' => $this->bigInteger(),
            'objective' => $this->string(),
            'causes_compliance' => $this->string(),
            'themes' => $this->text(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('documents');
    }
}
