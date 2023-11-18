<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSlugToIndividualworks extends Migration
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

        $this->forge->addColumn('individualWorks', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('individualWorks', 'slug');
    }
}
