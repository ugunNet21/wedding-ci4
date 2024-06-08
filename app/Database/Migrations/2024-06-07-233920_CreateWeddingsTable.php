<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateWeddingsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'bride_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'groom_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'wedding_date' => [
                'type' => 'DATE',
            ],
            'location' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'created_by' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
            'updated_by' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
            'deleted_by' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                // 'default' => 'CURRENT_TIMESTAMP',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                // 'default' => 'CURRENT_TIMESTAMP',
                'on_update' => 'CURRENT_TIMESTAMP',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('created_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('updated_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('deleted_by', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('weddings');
    }

    public function down()
    {
        $this->forge->dropTable('weddings');
    }
}
