<?php

namespace App\Controllers\Artists;

use App\Controllers\BaseController;

class Artist6Controller extends BaseController
{
    public function index()
    {
        $artistsData = [
            'name' => 'Jorge Barbi',
            'origin' => 'A Guarda, Pontevedra',
            'image_title' => '/images/artists/JorgeBarbi/Largo.png',
            'paragraph1' => 'Jorge Barbi Alonso nació en 1950 en A Guarda, Pontevedra, España. Desde sus primeras exposiciones individuales en la galería Gamarra y Garrigues en Madrid (1989, 1991, 1995), se nos muestra un trabajo enraizado con una vida en la que la magia del viaje y la capacidad de asombro no se han disipado. De forma simultánea, se siente interpelado por aspectos de su realidad más íntima: el paso del tiempo, el azar, los juegos de sentido del lenguaje, como por preocupaciones extraartísticas que se sedimentan de forma precisa y rigurosa en sus archivos fotográficos, esculturas e instalaciones diseñadas para sitios específicos.',
            'image1_1' => '/images/artists/JorgeBarbi/Escultura4.jpg',
            'image1_2' => '/images/artists/JorgeBarbi/Bio.jpg',
            'paragraph2' => 'Barbi es un creador intuitivo de objetos insólitos, tal vez vinculables al mundo surrealista más desafiador, entre Picabia y Man Ray. Se dio a conocer en la novena exposición de la serie que Caixavigo celebró en 1980 con motivo de su centenario. En sus trabajos en torno al texto indaga en los procesos de percepción y desciframiento, centrándose no tanto en la ausencia o desconocimiento de los códigos como en la dificultad, cuando no la imposibilidad, de un acceso sensorial al plano físico en que se disponen.',
            'image2' => '/images/artists/JorgeBarbi/Mural.jpg',
            'paragraph3' => 'A lo largo de su carrera, Barbi ha realizado numerosas exposiciones individuales y colectivas tanto dentro como fuera de España. En 2006 dentro del proyecto “A Cidade interpretada”, instaló un Minarete a tamaño natural en el centro de Santiago de Compostela. Ese mismo año participó en Echigo Tsumari Art Triennial (Japón) con el proyecto "Green Paths, White Paths". En 2014 dentro de la exposición “On the Road”, realizó su instalación “El final del camino” en el cementerio desacralizado del Parque de Bonaval en Santiago de Compostela.',
            'image3_1' => '/images/artists/JorgeBarbi/Pintura.png',
            'image3_2' => '/images/artists/JorgeBarbi/Escultura2.png',
            'button_link1' => '/artists/artist5',
            'button_text1' => 'ver anterior',
            'button_link2' => '/artists/artist7',
            'button_text2' => 'ver siguiente',
            'button_link_works' => '/works',
            'button_text_works' => 'obras',
        ];


        echo view('artists/artist6', $artistsData);
    }
}
