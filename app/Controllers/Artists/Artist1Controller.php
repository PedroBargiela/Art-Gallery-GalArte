<?php

namespace App\Controllers\Artists;

use App\Controllers\BaseController;

class Artist1Controller extends BaseController
{
    public function index()
    {
        $artistData = [
            'name' => 'Alfonso Costa',
            'origin' => 'Noia, A Coruña',
            'image_title' => '/images/artists/AlfonsoCosta/Inicio.jpg',
            'paragraph1' => 'Alfonso Costa Beiro nació en 1943 en Noia, A Coruña. Pasó su infancia y adolescencia en su ciudad natal, junto al océano Atlántico. A los diecisiete años, se trasladó a Barcelona. A pesar de tener una vocación definida, no tenía un oficio concreto y atravesó dificultades en la gran ciudad hasta que en 1967 realizó su primera exposición.',
            'image1_1' => '/images/artists/AlfonsoCosta/Pintura1.jpg',
            'image1_2' => '/images/artists/AlfonsoCosta/Cuerpo.jpg',
            'paragraph2' => 'En 1972, recibió una beca de la Fundación March para visitar Florencia, un hecho que tuvo una influencia decisiva en su futuro estético. Participó en exposiciones colectivas internacionales y realizó series de grabados que incrementaron su prestigio. En 1984, concluyó uno de sus grandes empeños, una pintura de 2.000 metros cuadrados, iniciada tres años antes, en el Instituto Frenopático de Barcelona.',
            'image2' => '/images/artists/AlfonsoCosta/Larga.jpg',
            'paragraph3' => 'Costa Beiro ha realizado murales para diversas instituciones y ha participado en importantes exposiciones fuera de España. Su obra está representada en varios museos tanto dentro como fuera de España. En su obra hay un diálogo permanente entre la luz y los colores del Mediterráneo y la melancolía y las nebulosidades del Atlántico.',
            'image3_1' => '/images/artists/AlfonsoCosta/Pintura2.jpg',
            'image3_2' => '/images/artists/AlfonsoCosta/Bio.jpg',
            'button_link1' => '/artists',
            'button_text1' => 'volver a artistas',
            'button_link2' => '/artists/artist2',
            'button_text2' => 'ver siguiente',
            'button_link_works' => '/works',
            'button_text_works' => 'obras',
        ];


        echo view('artists/artist1', $artistData);
    }
}
