<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class Works extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'artist' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('works');
    }

    public function down()
    {
        $this->forge->dropTable('works');
    }
}
