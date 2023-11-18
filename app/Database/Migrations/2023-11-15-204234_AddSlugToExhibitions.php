<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSlugToExhibitions extends Migration
{
    public function up()
    {
        $fields = [
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'after' => 'title'
            ]
        ];

        $this->forge->addColumn('exhibitions', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('exhibitions', 'slug');
    }
}
