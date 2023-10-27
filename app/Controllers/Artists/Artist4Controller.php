<?php

namespace App\Controllers\Artists;

use App\Controllers\BaseController;

class Artist4Controller extends BaseController
{
    public function index()
    {
        $artistsData = [
            'name' => 'Carlos Alcolea',
            'origin' => 'A Coruña',
            'image_title' => '/images/artists/CarlosAlcolea/Inicio.jpeg',
            'paragraph1' => 'Carlos García Alcolea nació en 1949 en La Coruña, España, y falleció el 20 de septiembre de 1992 en Madrid. Pasó parte de su juventud en Cádiz y luego se trasladó a Madrid en 1967 para comenzar sus estudios de Derecho. Sin embargo, decidió dedicarse a la pintura y al año siguiente viajó a París y Gran Bretaña, donde descubrió la obra de Ronald Kitaj y David Hockney1. Posteriormente, conoció a Luis Gordillo, quien lo influenció.',
            'image1_1' => '/images/artists/CarlosAlcolea/Bio1.jpg',
            'image1_2' => '/images/artists/CarlosAlcolea/Pintura3.jpeg',
            'paragraph2' => 'Su primera exposición individual fue en 1971, en la Galería Amadís. Perteneció en los años 1970 a los esquizos de Madrid, un grupo de artistas que trabajaron en pintura figurativa. Tuvo exposiciones con regularidad en la Galería Buades. Su última exposición fue en 1981 en Sevilla, en la galería Juana de Aizpuru.',
            'image2' => '/images/artists/CarlosAlcolea/Mural.jpg',
            'paragraph3' => 'Falleció a consecuencia de una cirrosis hepática en 1992, y ese mismo año obtuvo a título póstumo el Premio Nacional de Artes Plásticas. En 1998, el Museo Nacional Centro de Arte Reina Sofía le dedicó una exposición que reunió más de 30 lienzos, además de varios dibujos y cartulinas, fotografías y documentación, así como su libro "Aprendiendo a nadar".',
            'image3_1' => '/images/artists/CarlosAlcolea/Pintura2.jpg',
            'image3_2' => '/images/artists/CarlosAlcolea/Pintura4.jpg',
            'button_link1' => '/artists/artist3',
            'button_text1' => 'ver anterior',
            'button_link2' => '/artists/artist5',
            'button_text2' => 'ver siguiente',
            'button_link_works' => '/works',
            'button_text_works' => 'obras',
        ];


        echo view('artists/artist4', $artistsData);
    }
}
