<?php

namespace App\Controllers\Artists;

use App\Controllers\BaseController;

class Artist10Controller extends BaseController
{
    public function index()
    {
        $artistsData = [
            'name' => 'Jorge Castillo',
            'origin' => 'Pontevedra',
            'image_title' => '/images/artists/JorgeCastillo/inicio.jpg',
            'paragraph1' => 'Jorge Castillo nació en 1933 en Pontevedra, España1. Sus primeros años transcurrieron en Buenos Aires, Argentina, a donde su familia se vio forzada a emigrar por razones políticas. Con 13 años comenzó a escribir sus primeras historias cortas. En 1956, viajó a Madrid y publicó varios poemas en las revistas Índice y Poesía Española, además de vender sus dibujos en la Galería Biosca.',
            'image1_1' => '/images/artists/JorgeCastillo/Bio.jpg',
            'image1_2' => '/images/artists/JorgeCastillo/Pintura2.jpg',
            'paragraph2' => 'Considerado por la crítica como uno de los principales representantes del arte español contemporáneo, Castillo reside actualmente en Nueva York y pasa largas temporadas en su casa-estudio de la isla de Ibiza. Con exposiciones en los grandes centros de arte, su obra está incorporada a importantes colecciones europeas y norteamericanas. Pintor de difícil clasificación, Castillo es sin duda uno de los artistas contemporáneos dotados de mayor fuerza poética.',
            'image2' => '/images/artists/JorgeCastillo/Largo.jpg',
            'paragraph3' => 'Con magistral dominio del dibujo y del canon clásico, su sentido de la línea, de la luz, de la transparencia de los objetos se une a la singular capacidad de establecer una mágica relación entre objetos y personas y a una peculiar impronta de levedad en el espacio, que confiere a su obra rasgos de singular excepcionalidad. Todo parece moverse entre la realidad presente en la soberbia textura de su trazo y la metarrealidad del concepto poético.',
            'image3_1' => '/images/artists/JorgeCastillo/Pintura1.jpg',
            'image3_2' => '/images/artists/JorgeCastillo/Bio2.jpg',
            'button_link1' => '/artists/artist9',
            'button_text1' => 'ver anterior',
            'button_link2' => '/artists',
            'button_text2' => 'volver a artistas',
            'button_link_works' => '/works',
            'button_text_works' => 'obras',
        ];


        echo view('artists/artist10', $artistsData);
    }
}
