<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createuser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_user' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'email_user' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'password_user' => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
            ],
            'info_user' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_user', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
