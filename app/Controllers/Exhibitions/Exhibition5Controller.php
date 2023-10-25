<?php

namespace App\Controllers\Exhibitions;

use App\Controllers\BaseController;

class Exhibition5Controller extends BaseController
{
    public function index()
    {
        $exhibitionData = [
            'title' => 'EL INSTRUMENTO DE LA SOMBRA',
            'date' => 'septiembre-octubre',
            'image_title' => '/images/sombra/portada.jpg',
            'paragraph1' => 'Platón estaría muy interesado en esta muestra que Sandra Carvalho nos regala. Y sería muy interesante que los dos, Platón y Sandra, tuvieran una conversación sobre lo que es y no es realidad, y de cómo esta se nos transfigura a medida de ir adquiriendo conocimiento y consciencia. Me imagino a Platón hablando sin parar y a Sandra callada, atenta. Me imagino a Platón argumentando y teorizando sobre lo que ve, y haciendo apología sobre la poética de la sombra y su mito de la caverna, y mientras tanto, Sandra callada, silenciada y atenta, coge un pincel y circunda la silueta del mismo Platón, que ahora observa perplejo y atónito su propia esencia insondable.',
            'image1_1' => '/images/sombra/Continuo.jpg',
            'image1_2' => '/images/sombra/Portuguesa.jpg',
            'paragraph2' => 'Cada pieza esconde y revela su propio atributo, como lo hace la misma luz sobre todas y cada una de las cosas de este mundo. Cada pieza está parida desde la más sincera apertura sensible y contemplativa. Sandra nos señala, sí, y nos recuerda la fugacidad del permanente cambio, siempre bello e inclusivo; pues luz y sombra son inseparables en una vida que se despliega fácil, con el único propósito fiable de Ser lo que se Es.',
            'image2' => '/images/sombra/Merge.jpg',
            'paragraph3' => 'La obra de Carvalho es un canto a la belleza de este equilibrio, una celebración de la danza eterna entre la luz y la sombra. A través de su arte, nos invita a ver el mundo con nuevos ojos, a apreciar la belleza en los detalles más pequeños y a encontrar alegría en el constante flujo y cambio de la vida. Su trabajo es un recordatorio de que, aunque la vida puede ser fugaz e incierta, siempre hay belleza y significado que descubrir si estamos dispuestos a mirar más allá de las sombras.',
            'image3_1' => '/images/sombra/3.jpg',
            'image3_2' => '/images/sombra/1829.jpg',
        ];


        echo view('exhibitions/exhibition5', $exhibitionData);
    }
}
