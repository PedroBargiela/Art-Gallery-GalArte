<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class IndividualWorks extends Migration
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
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'artist' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'dimensions' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'year' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('individualWorks');
    }

    public function down()
    {
        $this->forge->dropTable('individualWorks');
    }
}
