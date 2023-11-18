<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class IndividualWorksSeeder extends Seeder
{
    public function run()
    {
        //Carga el contenido del archivo JSON
        $workJson = file_get_contents(APPPATH . 'Database/Seeds/work.json');
        //Convierte el JSON decodificado en un array asociado y lo almacena en $workData
        $workData = json_decode($workJson, true);

        //Insertamos las obras en la base de datos
        foreach ($workData as $work) {
            $this->db->table('individualWorks')->where('title', $work['title'])->update(['slug' => $work['slug']]);
        }
    }
}
