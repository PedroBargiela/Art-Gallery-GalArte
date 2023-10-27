<?php

namespace App\Controllers\Artists;

use App\Controllers\BaseController;

class Artist9Controller extends BaseController
{
    public function index()
    {
        $artistsData = [
            'name' => 'Antón Sobral',
            'origin' => 'Marín, Pontevedra',
            'image_title' => '/images/artists/AntonSobral/Inicio.jpg',
            'paragraph1' => 'Antón Sobral Iglesias nació el 4 de abril de 1952 en Marín, Pontevedra. Desde muy temprana edad le gustó pintar; con dieciséis años participa en sus primeras muestras en Pontevedra y Santiago de Compostela. Estudió Matemáticas, y posteriormente Historia del Arte, al tiempo que fue miembro de la directiva de la Asociación Cultural O Galo y presidió la primera Asociación de Artistas Plásticos que contribuyó a fundar.',
            'image1_1' => '/images/artists/AntonSobral/Bio.jpg',
            'image1_2' => '/images/artists/AntonSobral/Mural4.jpg',
            'paragraph2' => 'Combinó su faceta artística con la docente, e impartió clases como profesor de arte durante muchos años en la Escuela Superior de Conservación y Restauración de Bienes Culturales de Galicia, en Pontevedra. A lo largo de su trayectoria ha obtenido numerosos galardones y ha participado en más de doscientas exposiciones por toda España, en Francia, Alemania, Austria e Italia así como en distintos puntos de América.',
            'image2' => '/images/artists/AntonSobral/Bio2.jpg',
            'paragraph3' => 'Sobral considera que “el artista total” comienza en la pintura, para luego explorar también la fotografía, la poesía, la música, el teatro o la danza, entre otras disciplinas, siempre en un proceso de búsqueda de la belleza. En su pintura y fotografía se centra en el paisaje. Ha hecho del mar el pilar fundamental de su discurso estético. Luz, tiempo, geometría, y memoria son presencias constantes en su obra cargada de lirismo y casi misticismo.',
            'image3_1' => '/images/artists/AntonSobral/Marina.jpg',
            'image3_2' => '/images/artists/AntonSobral/Mural2.jpg',
            'button_link1' => '/artists/artist8',
            'button_text1' => 'ver anterior',
            'button_link2' => '/artists/artist10',
            'button_text2' => 'ver siguiente',
            'button_link_works' => '/works',
            'button_text_works' => 'obras',
        ];


        echo view('artists/artist9', $artistsData);
    }
}
