<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ArtistsSeeder extends Seeder
{
    public function run()
    {
        //Carga el contenido del archivo JSON
        $artistsJson = file_get_contents(APPPATH . 'Database/Seeds/artists.json');
        //Convierte el JSON decodificado en un array asociado y lo almacena en $artistsData
        $artistsData = json_decode($artistsJson, true);

        //Llena la tabla de la base de datos
        foreach ($artistsData as $artist) {
            $this->db->table('artists')->insert($artist);
        }
    }
}
