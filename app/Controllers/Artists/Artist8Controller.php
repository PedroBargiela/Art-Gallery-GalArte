<?php

namespace App\Controllers\Artists;

use App\Controllers\BaseController;

class Artist8Controller extends BaseController
{
    public function index()
    {
        $artistsData = [
            'name' => 'Antón Lamazares',
            'origin' => 'Lalín, Pontevedra',
            'image_title' => '/images/artists/AntonLamazares/Inicio.jpg',
            'paragraph1' => 'Antón Lamazares Silva nació el 2 de enero de 1954 en Lalín, Pontevedra, España. Pasó su infancia en Maceira, una aldea de Lalín, y el entorno rural de su infancia dejó una profunda huella en su imaginario y su proceso creador. Realizó gran parte de sus estudios internado en el convento franciscano de Herbón, entre 1963 y 1969; en esos años se entregó a la lectura ferviente de textos literarios, sobre todo de los clásicos grecolatinos.',
            'image1_1' => '/images/artists/AntonLamazares/Pintura4.jpg',
            'image1_2' => '/images/artists/AntonLamazares/Bio.jpg',
            'paragraph2' => 'A fines de los sesenta comenzó a escribir poesía, y entabló amistad con el escritor Álvaro Cunqueiro, y también con los pintores Laxeiro y Manuel Pesqueira, que se convertirán en sus primeros referentes plásticos. Su vocación creadora comienza a desplazarse hacia la pintura, optando por la formación autodidacta. En este sentido fue crucial su largo viaje de 1972 por distintos países europeos para estudiar directamente la pintura de los maestros que venera: Van Gogh, Paul Klee, Rembrandt y Joan Miró, a los que se añadirán Tàpies, Millares, Giacometti y Bacon, así como el arte oceánico y el medieval.',
            'image2' => '/images/artists/AntonLamazares/Mural2.jpg',
            'paragraph3' => 'Lamazares es un pintor español de la generación de los 80, al igual que José María Sicilia, Miquel Barceló o Víctor Mira. En sus obras, realizadas sobre madera y cartón, crea un lenguaje propio a partir de la experimentación con barnices y otras materias. Su estilo evoluciona desde un inicial expresionismo lúdico, avanzando hacia el informalismo y la abstracción, con una deriva minimalista en su última etapa1. De amplia proyección internacional, sus piezas se han exhibido en numerosas ciudades de distintos continentes.',
            'image3_1' => '/images/artists/AntonLamazares/Bio2.png',
            'image3_2' => '/images/artists/AntonLamazares/Bio3.jpg',
            'button_link1' => '/artists/artist7',
            'button_text1' => 'ver anterior',
            'button_link2' => '/artists/artist9',
            'button_text2' => 'ver siguiente',
            'button_link_works' => '/works',
            'button_text_works' => 'obras',
        ];


        echo view('artists/artist8', $artistsData);
    }
}
