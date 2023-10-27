<?php

namespace App\Controllers\Artists;

use App\Controllers\BaseController;

class Artist5Controller extends BaseController
{
    public function index()
    {
        $artistData = [
            'name' => 'Xosé Artiaga',
            'origin' => 'Mondoñedo, Lugo',
            'image_title' => '/images/artists/XoseArtiaga/Inicio.jpg',
            'paragraph1' => 'Xosé Artiaga Barreira nació el 10 de julio de 1955 en Mondoñedo, Galicia. Estudió en la Escuela Superior de Bellas Artes de San Fernando de Madrid. En 1983 presentó su tesina de convalidación para licenciatura en la Facultad de Bellas Artes (Universidad Complutense de Madrid) con el título “La cultura castreña”, dirigida por el profesor Juan Fernando de Laiglesia. Ha participado en numerosos certámenes de arte de modo regular, en muchas ocasiones de la mano de la Galería Emilio Navarro, de Madrid.',
            'image1_1' => '/images/artists/XoseArtiaga/Bio.jpg',
            'image1_2' => '/images/artists/XoseArtiaga/Pintura1.jpg',
            'paragraph2' => 'De formación autodidacta, comenzó su actividad pictórica a mediados de la década de los ochenta con una serie de obras en las que muestra su interés por las texturas y por los problemas de la representación de la figura humana. Posteriormente, su trabajo evolucionó hacia una revisión del espacio pictórico centrándose en formatos rectangulares con una extensión azul delimitada con dos franjas negras a los lados. Influenciado por Jules Olitsky, Rothko, Clifford Still y representantes del suport-surface, sus composiciones están trabajadas de dentro a fuera a través de una malla reticular que se superpone en veladuras transparentes poco insistidas.',
            'image2' => '/images/artists/XoseArtiaga/Mural.jpg',
            'paragraph3' => 'Artiaga ha realizado exposiciones individuales en las galerías Sargadelos (Santiago de Compostela), Columela (Madrid), Emilio Navarro (Madrid) y Del Pasaje (Valladolid). Entre sus exposiciones colectivas se encuentran El XI Salón de los 16 (Madrid, 1991), Expo´92 (Pabellón de Galicia, Sevilla) y Art 23-92 Basel. Tiene obra expuesta en el Museo Provincial de Lugo (Lugo), la Colección de Arte de la Junta de Galicia (Santiago), la Colección Banco de España (Madrid), el Centro Gallego de Arte Contemporáneo (Santiago), entre otros.',
            'image3_1' => '/images/artists/XoseArtiaga/Pintura2.jpg',
            'image3_2' => '/images/artists/XoseArtiaga/Bio2.jpg',
            'button_link1' => '/artists/artist4',
            'button_text1' => 'ver anterior',
            'button_link2' => '/artists/artist6',
            'button_text2' => 'ver siguiente',
            'button_link_works' => '/works',
            'button_text_works' => 'obras',
        ];


        echo view('artists/artist5', $artistData);
    }
}
