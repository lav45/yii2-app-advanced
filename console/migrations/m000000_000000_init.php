<?php

use lav45\db\MainMigration;

class m000000_000000_init extends MainMigration
{
    private $tableOptions;

    public function init()
    {
        parent::init();

        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $this->tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
    }

    public function table_user()
    {
        $this->createTable('{{%user}}', [
            'login' => $this->string(32),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'is_active' => $this->boolean()->defaultValue(true)->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $this->tableOptions);

        $this->addPrimaryKey('{{%user}}', 'login');
    }
}
