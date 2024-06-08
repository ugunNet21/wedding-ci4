<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInvitationsTable extends Migration
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
            'guest_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'rsvp_status' => [
                'type' => 'ENUM',
                'constraint' => ['pending', 'accepted', 'declined'],
                'default' => 'pending',
            ],
            'special_requests' => [
                'type' => 'TEXT',
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
        $this->forge->addForeignKey('guest_id', 'guests', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('invitations');
    }

    public function down()
    {
        $this->forge->dropTable('invitations');
    }
}
