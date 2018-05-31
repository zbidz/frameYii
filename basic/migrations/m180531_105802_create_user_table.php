<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180531_105802_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
						'login' => $this->string(50)->notNull(),
						'password'=> $this->string(100)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
