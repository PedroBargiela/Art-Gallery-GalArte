<?php

namespace App\Controllers\Exhibitions;

use App\Controllers\BaseController;

class Exhibition1Controller extends BaseController
{
    public function index()
    {
        $exhibitionData = [
            'title' => 'INTEREA',
            'date' => 'septiembre-octubre',
            'image_title' => '/images/interea/Interea.jpg',
            'paragraph1' => 'En esta exposición -titulada INTEREA-, Alfonso Costa nos sorprende con un nuevo giro o paso adelante en su larga, prolífica y fecunda trayectoria. Un viaje siempre exploratorio que como escribió Manuel Rivas, refiriéndose a la autenticidad y fe creativa de este pintor, “le permite afrontar crisis, rupturas y desafíos expresivos con la serenidad de quien no teme al vacío”. Y es precisamente en ese hiato “entre el ayer y el hoy” donde, en palabras de María Zambrano, “se da lo irreparable del paso del tiempo”.',
            'image1_1' => '/images/interea/Felino.jpg',
            'image1_2' => '/images/interea/Galeria-Interea-01.jpeg',
            'paragraph2' => 'Tiempo o instante que es puro movimiento. Así nos parecen estas obras de Costa, como si la vida fuese alcanzada en ese instante de transformación o metamorfosis en el que algo se desprende de la forma mientras ésta va camino de lograr una nueva configuración. Nada aparenta sólido o compacto, sino en su hacerse complejo y dinámico. La tinta se desliza, brota o se envuelve, pero nunca se detiene, excepto en esa mano que exige el cese de tanto horror. Es la mano de una figura humana dada en su más puro esquematismo, en su desnudez elemental. De igual modo, elementales son la luz y la sombra o el gesto y la mancha. También, como ha observado Xavier Seoane, “cicatrices de luz en la memoria del tiempo o del lienzo en una época que para bien o para mal parecen ser muchas más las preguntas que las respuestas”.',
            'image2_1' => '/images/interea/Galeria-de-arte-LUISA-PITA_Alfonso-Costa_001_Entropia.jpg',
            'image2_2' => '/images/interea/Galeria-Interea-02.jpeg',
            'paragraph3' => 'En este sentido, la obra de Costa se convierte en un diálogo constante entre el pasado y el presente, entre la luz y la sombra, entre la forma y la transformación. Cada trazo, cada mancha, cada gesto es un testimonio de este diálogo, una huella de ese instante irreparable del paso del tiempo. Pero también es una afirmación de la resistencia, de la capacidad de la vida para reinventarse a sí misma en medio del caos y la incertidumbre. Como si Costa estuviera diciendo: “Sí, el tiempo pasa, las formas cambian, pero siempre hay algo que permanece, algo que resiste”. Y ese algo es quizás lo que Manuel Rivas llamó “la autenticidad y fe creativa” de este pintor. Es esa chispa de vida que se niega a ser apagada, esa luz que brilla incluso en las sombras más profundas. Y es precisamente esta luz la que Costa captura en sus obras, esa luz que es a la vez cicatriz y memoria, pregunta y respuesta.',
            'image3_1' => '/images/interea/Pasaxe.jpg',
            'image3_2' => '/images/interea/Galeria-Interea-03.jpeg',
        ];


        echo view('exhibitions/exhibition1', $exhibitionData);
    }
}
