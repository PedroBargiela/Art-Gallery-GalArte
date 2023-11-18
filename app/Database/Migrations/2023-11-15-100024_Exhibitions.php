<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Exhibitions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'date' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'image_title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'paragraph1' => [
                'type' => 'TEXT',
            ],
            'image1_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'image1_2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'paragraph2' => [
                'type' => 'TEXT',
            ],
            'image2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'paragraph3' => [
                'type' => 'TEXT',
            ],
            'image3_1' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'image3_2' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('exhibitions');
    }

    public function down()
    {
        $this->forge->dropTable('exhibitions');
    }
}
