<?php

namespace App\Controllers\Exhibitions;

use App\Controllers\BaseController;

class Exhibition2Controller extends BaseController
{
    public function index()
    {
        $exhibitionData = [
            'title' => 'LATEXO DO LABIRINTO',
            'date' => '',
            'image_title' => '/images/latexo/anton-patino.jpg',
            'paragraph1' => 'La exposición “Latexo do Labirinto” se conforma con trabajos de Antón Patiño recogidos de diferentes series, agasajándonos con la oportunidad de transitar por la exuberante riqueza de su discurso, un ingente ejercicio metalingüístico con el que el pintor consigue relacionar su universo onírico con la corporeidad del lienzo. El origen está en el sueño más sus trabajos son el resultado de una implacable vigilia, obstinada en el análisis y refinamiento de su propia esencia como artista y pensador.',
            'image1_1' => '/images/latexo/Espazo.jpg',
            'image1_2' => '/images/latexo/Socalcos.jpg',
            'paragraph2' => 'Patiño, en su constante búsqueda de la verdad, se sumerge en la profundidad de su subconsciente, desentrañando los misterios que se ocultan en sus sueños. Cada trazo, cada color, cada textura es un reflejo de su viaje interno, una manifestación tangible de sus pensamientos más profundos y sus emociones más intensas. Su obra es un diálogo entre el soñador y el observador, una invitación a adentrarse en el laberinto de su mente y descubrir las maravillas que se esconden en su interior.',
            'image2' => '/images/latexo/Expo.jpg',
            'paragraph3' => 'La exposición “Latexo do Labirinto” es un testimonio de la evolución de Patiño como artista. A través de sus obras, podemos apreciar cómo ha ido perfeccionando su técnica y afinando su estilo a lo largo del tiempo. Pero más allá de la estética, lo que realmente hace que su trabajo sea especial es la honestidad con la que se presenta. Cada cuadro es un fragmento de su alma, una ventana a su mundo interior. Y eso es lo que hace que esta exposición sea tan fascinante: nos ofrece la oportunidad de ver el mundo a través de los ojos de Patiño, de experimentar sus sueños y reflexiones como si fueran los nuestros propios.',
            'image3_1' => '/images/latexo/Pasanervios.jpg',
            'image3_2' => '/images/latexo/Ciclistas.jpg',
        ];


        echo view('exhibitions/exhibition2', $exhibitionData);
    }
}
