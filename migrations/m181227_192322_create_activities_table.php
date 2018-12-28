<?php

use yii\db\Migration;

/**
 * Handles the creation of table `activities`.
 */
class m181227_192322_create_activities_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('activities', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->string(),
            'goal' => $this->string(),
            'agreed_time' => $this->dateTime()->notNull(),
            'effective' => $this->bigInteger(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('activities');
    }
}
