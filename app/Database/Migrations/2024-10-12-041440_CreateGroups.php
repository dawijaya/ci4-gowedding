<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGroups extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_groups' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_groups' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'info_groups' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_groups', true);
        $this->forge->createTable('groups');
    }

    public function down()
    {
        $this->forge->dropTable('groups');
    }
}
