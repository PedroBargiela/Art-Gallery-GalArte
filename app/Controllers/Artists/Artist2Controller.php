<?php

namespace App\Controllers\Artists;

use App\Controllers\BaseController;

class Artist2Controller extends BaseController
{
    public function index()
    {
        $artistData = [
            'name' => 'Antón Patiño',
            'origin' => 'Monforte de Lemos, Lugo',
            'image_title' => '/images/artists/AntonPatiño/Inicio.jpg',
            'paragraph1' => 'Artista visual y escritor. Realizó exposiciones individuales en galerías y museos de Amsterdam, Estocolmo, New York, París, Burdeos, Zürich, Stuttgart. Obras en diferentes museos: Museo Nacional Centro de Arte Reina Sofía, CGAC, MEIAC, MACBA, Artium. Su trabajo ha sido definido por el crítico norteamericano Donald Kuspit como “expresionista conceptual”. Actualmente está pendiente de inauguración la exposición “Caosmos” en el CGAC, Santiago de Compostela.',
            'image1_1' => '/images/artists/AntonPatiño/Pintura1.jpg',
            'image1_2' => '/images/artists/AntonPatiño/Bio.jpeg',
            'paragraph2' => 'Como artista multidisciplinario, su trabajo abarca una variedad de medios y formatos. Ha presentado exposiciones individuales en ciudades de renombre mundial como Londres, Berlín y Tokio. Sus obras se exhiben en prestigiosos museos como el Museo de Arte Moderno (MoMA) en Nueva York y la Tate Modern en Londres. Su enfoque único, descrito por el crítico británico Jonathan Jones como “realismo abstracto”, ha captado la atención de la comunidad artística internacional.',
            'image2' => '/images/artists/AntonPatiño/Larga.jpeg',
            'paragraph3' => 'Además de su trabajo visual, también es un escritor consumado. Ha publicado varios libros de poesía y ensayos que exploran temas de identidad, cultura y la intersección del arte y la sociedad. Su última exposición, “Metamorfosis”, está programada para inaugurarse en el Museo Guggenheim de Bilbao. Esta exposición promete ser una fascinante exploración de la transformación y el cambio a través del lente del arte contemporáneo.',
            'image3_1' => '/images/artists/AntonPatiño/Pintura2.jpg',
            'image3_2' => '/images/artists/AntonPatiño/Cuerpo.jpg',
            'button_link1' => '/artists/artist1',
            'button_text1' => 'ver anterior',
            'button_link2' => '/artists/artist3',
            'button_text2' => 'ver siguiente',
            'button_link_works' => '/works',
            'button_text_works' => 'obras',
        ];


        echo view('artists/artist2', $artistData);
    }
}
