<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class WorksSeeder extends Seeder
{
    public function run()
    {
        //Carga el contenido del archivo JSON
        $worksJson = file_get_contents(APPPATH . 'Database/Seeds/works.json');
        //Convierte el JSON decodificado en un array asociado y lo almacena en $worksData
        $worksData = json_decode($worksJson, true);

        //Insertamos las obras en la base de datos
        foreach ($worksData as $works) {
            $this->db->table('works')->insert($works);
        }
    }
}
