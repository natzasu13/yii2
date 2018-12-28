<?php

use yii\db\Migration;

/**
 * Handles the creation of table `agreements`.
 */
class m181227_192351_create_agreements_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('agreements', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->string(),
            'subscription_date' => $this->dateTime()->notNull(),
            'agreement_date' => $this->dateTime()->notNull(),
            'active' => $this->bigInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('agreements');
    }
}
