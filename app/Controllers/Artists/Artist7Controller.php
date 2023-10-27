<?php

namespace App\Controllers\Artists;

use App\Controllers\BaseController;

class Artist7Controller extends BaseController
{
    public function index()
    {
        $artistsData = [
            'name' => 'Antonio Murado',
            'origin' => 'Lugo',
            'image_title' => '/images/artists/AntonioMurado/Inicio2.jpg',
            'paragraph1' => 'Antonio J. Murado López nació en 1964 en Lugo, España. Desde pequeño mostró interés por la plástica, en concreto, por las imágenes que figuraban en las enciclopedias de su casa. Estudió Bellas Artes en la Universidad de Salamanca, donde se licenció en 1988. Comenzó a exponer en muestras colectivas en 1985 y realizó su primera exposición individual en 1987, en Santiago de Compostela.',
            'image1_1' => '/images/artists/AntonioMurado/Bio.jpg',
            'image1_2' => '/images/artists/AntonioMurado/Pintura1.jpg',
            'paragraph2' => 'En 1995, fue becado por Unión Fenosa, lo que le permitió acceder a la Cooper Union School de Nueva York. En 1996, se trasladó a Nueva York, donde reside desde entonces. Su obra ha cruzado las fronteras españolas y ha sido mostrada en galerías y certámenes de Viena. Su prestigio se consolidó con la exposición individual que realizó en la Casa de la Parra, de Santiago, auspiciada por la Junta de Galicia.',
            'image2' => '/images/artists/AntonioMurado/Mural.png',
            'paragraph3' => 'Murado es conocido por su experimentación pictórica y el juego con la representación; desdibuja los límites entre el espacio pictórico y la imagen, con unos resultados sutiles y velados que rezuman ensoñación y romanticismo. Su obra ha sido exhibida en renombradas galerías y espacios artísticos de Estados Unidos, Holanda, Bélgica, Australia, Canadá, Austria, Portugal, Nueva Zelanda o Sudamérica. Asimismo, se encuentra representada en las más destacadas colecciones nacionales e internacionales.',
            'image3_1' => '/images/artists/AntonioMurado/Inicio.jpg',
            'image3_2' => '/images/artists/AntonioMurado/Pintura3.jpg',
            'button_link1' => '/artists/artist6',
            'button_text1' => 'ver anterior',
            'button_link2' => '/artists/artist8',
            'button_text2' => 'ver siguiente',
            'button_link_works' => '/works',
            'button_text_works' => 'obras',
        ];


        echo view('artists/artist7', $artistsData);
    }
}
