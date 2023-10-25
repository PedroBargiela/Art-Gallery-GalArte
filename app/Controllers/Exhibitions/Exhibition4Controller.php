<?php

namespace App\Controllers\Exhibitions;

use App\Controllers\BaseController;

class Exhibition4Controller extends BaseController
{
    public function index()
    {
        $exhibitionData = [
            'title' => 'DELIRIOS',
            'date' => '',
            'image_title' => '/images/delirios/portada.jpg',
            'paragraph1' => 'Ajeno como siempre a las tendencias, cada exposición de Ramón Conde es concebida como una narración temática y en esta ocasión se inmersa en el territorio del subconsciente, de los sueños, de las imágenes delirantes y de todo lo que pueda saltarse el control racional, utilizando para ello un lenguaje surrealista, desafiante y provocador que apela a lo absurdo, a lo exótico, a lo primitivo e incluso a lo cómico, liberándose de prejuicios e ideas, disfrutando sencillamente de la acción de crear.',
            'image1_1' => '/images/delirios/Loco.jpg',
            'image1_2' => '/images/delirios/Soledad.jpg',
            'paragraph2' => 'Partiendo de que en nuestra misma esencia poseemos dos cerebros y que suelen expresar sentimientos y posturas opuestas, las obras de Ramón Conde se postulan con ideas contrapuestas y nos muestran personajes en actitudes inquietantes, o incluso otros con su cabeza en el abdomen, en un evidente guiño al hecho real de que las neuronas comparten su alojamiento también en el estomago como si fuese un segundo cerebro.',
            'image2' => '/images/delirios/Mural.jpg',
            'paragraph3' => 'Las obras de Conde son un recordatorio de que somos seres complejos, llenos de contradicciones y conflictos internos. Nos invitan a aceptar y abrazar estas contradicciones, a verlas no como debilidades, sino como una parte esencial de lo que nos hace humanos. A través de su arte, Conde nos anima a explorar nuestras propias profundidades, a cuestionar nuestras creencias y prejuicios, y a encontrar belleza en lo absurdo y lo desconocido. Su trabajo es un canto a la libertad creativa, una celebración del poder del arte para desafiar nuestras percepciones y abrir nuestras mentes a nuevas posibilidades.',
            'image3_1' => '/images/delirios/Madre.jpg',
            'image3_2' => '/images/delirios/Bisonte.jpg',
        ];


        echo view('exhibitions/exhibition4', $exhibitionData);
    }
}
