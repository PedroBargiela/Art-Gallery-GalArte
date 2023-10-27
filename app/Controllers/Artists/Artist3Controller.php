<?php

namespace App\Controllers\Artists;

use App\Controllers\BaseController;

class Artist3Controller extends BaseController
{
    public function index()
    {
        $artistData = [
            'name' => 'Manuel Aramburu',
            'origin' => 'León-Pontevedra',
            'image_title' => '/images/artists/Aramburu/Inicio.jpg',
            'paragraph1' => 'Manuel Aramburu Núñez nació el 8 de abril de 1936 en León, España, y falleció el 20 de junio de 2015 en Pontevedra, España. Inició su aprendizaje en el mundo de la pintura en Pontevedra, ciudad a la que tuvo que emigrar su familia poco tiempo después de su nacimiento debido a la Guerra Civil. Aramburu es uno de los maestros de la pintura actual de Galicia, perteneciente a la llamada “generación de vanguardias y silencios”, un grupo de artistas que desarrollaron su actividad creativa a partir de la postguerra española.',
            'image1_1' => '/images/artists/Aramburu/Bio.jpg',
            'image1_2' => '/images/artists/Aramburu/Bio3.jpg',
            'paragraph2' => 'En 1969, fue pensionado por la Diputación de Pontevedra para estudiar en París, donde tuvo la oportunidad de estudiar el impresionismo, por el que se sintió especialmente atraído y cuya influencia nunca abandonó. Su obra se puede dividir en varios periodos: un periodo inicial correspondiente a los duros años de la postguerra española; una etapa de expresionismo abstracto durante los años 1971-1975; y un último periodo a partir del año 1975 hasta el final de su vida.',
            'image2' => '/images/artists/Aramburu/Larga.jpg',
            'paragraph3' => 'A lo largo de toda su trayectoria, Aramburu mostró una constante faceta de retratista, estudiando a maestros como Velázquez, Francisco de Goya y Lucientes o Fernando Álvarez de Sotomayor. Aceptó el encargo de retratar en diversas ocasiones a don Juan Carlos I, rey de España, a Don Felipe de Borbón, Príncipe de Asturias, y realizó la galería de retratos de la Academia Naval de Marín o de los decanos de la Facultad de Derecho de la Universidad de Santiago de Compostela.',
            'image3_1' => '/images/artists/Aramburu/Bio2.jpg',
            'image3_2' => '/images/artists/Aramburu/Bio4.jpg',
            'button_link1' => '/artists/artist2',
            'button_text1' => 'ver anterior',
            'button_link2' => '/artists/artist4',
            'button_text2' => 'ver siguiente',
            'button_link_works' => '/works',
            'button_text_works' => 'obras',
        ];


        echo view('artists/artist3', $artistData);
    }
}
