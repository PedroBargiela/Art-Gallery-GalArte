<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddResetToken extends Migration
{
    public function up()
    {
        $fields = [
            'reset_token' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
        ];
        $this->forge->addColumn('my_users', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('my_users', 'reset_token');
    }
}
