<?php

use yii\db\Migration;

/**
 * Class m180531_125631_add_role_column
 */
class m180531_125631_add_role_column extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function safeUp()
	{
		$this->addColumn('user', 'role', $this->integer());
    }

	/**
	 * {@inheritdoc}
	 */
	public function safeDown()
	{
		echo "m180531_125631_add_role_column cannot be reverted.\n";

		return false;
	}

	/*
	// Use up()/down() to run migration code without a transaction.
	public function up()
	{

	}

	public function down()
	{
			echo "m180531_125631_add_role_column cannot be reverted.\n";

			return false;
	}
	*/
}
