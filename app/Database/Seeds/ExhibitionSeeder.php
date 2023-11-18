<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ExhibitionSeeder extends Seeder
{
    public function run()
    {
        //Carga el contenido del archivo JSON
        $exhibitionsJson = file_get_contents(APPPATH . 'Database/Seeds/exhibitions.json');
        //Convierte el JSON decodificado en un array asociado y lo almacena en $exhibitionsData
        $exhibitionsData = json_decode($exhibitionsJson, true);

        //Llena la tabla de la base de datos
        foreach ($exhibitionsData as $exhibition) {
            $this->db->table('exhibitions')->where('title', $exhibition['title'])->update(['slug' => $exhibition['slug']]);
        }
    }
}
