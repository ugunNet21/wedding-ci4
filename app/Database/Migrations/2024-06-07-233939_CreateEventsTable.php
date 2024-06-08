<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEventsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'wedding_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'event_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'event_date' => [
                'type' => 'DATETIME',
            ],
            'location' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
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
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('wedding_id', 'weddings', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('events');
    }

    public function down()
    {
        $this->forge->dropTable('events');
    }
}
