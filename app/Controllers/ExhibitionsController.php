<?php

namespace App\Controllers;

class ExhibitionsController extends BaseController
{
    public function index()
    {
        echo view('exhibitions');
    }

    public function show($exhibition)
    {
        switch ($exhibition) {
            case 'Interea':
                $exhibitionData = [
                    'general' => 'Interea',
                    'title' => 'Interea',
                    'date' => 'septiembre-octubre',
                    'image_title' => '/images/exhibitions/interea/AlfonsoCostaInterea.jpg',
                    'paragraph1' => 'En esta exposición -titulada INTEREA-, Alfonso Costa nos sorprende con un nuevo giro o paso adelante en su larga, prolífica y fecunda trayectoria. Un viaje siempre exploratorio que como escribió Manuel Rivas, refiriéndose a la autenticidad y fe creativa de este pintor, “le permite afrontar crisis, rupturas y desafíos expresivos con la serenidad de quien no teme al vacío”. Y es precisamente en ese hiato “entre el ayer y el hoy” donde, en palabras de María Zambrano, “se da lo irreparable del paso del tiempo”.',
                    'image1_1' => '/images/exhibitions/interea/Levitando.jpg',
                    'image1_2' => '/images/exhibitions/interea/Felino.jpg',
                    'paragraph2' => 'Tiempo o instante que es puro movimiento. Así nos parecen estas obras de Costa, como si la vida fuese alcanzada en ese instante de transformación o metamorfosis en el que algo se desprende de la forma mientras ésta va camino de lograr una nueva configuración. Nada aparenta sólido o compacto, sino en su hacerse complejo y dinámico. La tinta se desliza, brota o se envuelve, pero nunca se detiene, excepto en esa mano que exige el cese de tanto horror. Es la mano de una figura humana dada en su más puro esquematismo, en su desnudez elemental. De igual modo, elementales son la luz y la sombra o el gesto y la mancha. También, como ha observado Xavier Seoane, “cicatrices de luz en la memoria del tiempo o del lienzo en una época que para bien o para mal parecen ser muchas más las preguntas que las respuestas”.',
                    'image2' => '/images/exhibitions/interea/Galeria-Interea-03.jpeg',
                    'paragraph3' => 'En este sentido, la obra de Costa se convierte en un diálogo constante entre el pasado y el presente, entre la luz y la sombra, entre la forma y la transformación. Cada trazo, cada mancha, cada gesto es un testimonio de este diálogo, una huella de ese instante irreparable del paso del tiempo. Pero también es una afirmación de la resistencia, de la capacidad de la vida para reinventarse a sí misma en medio del caos y la incertidumbre. Como si Costa estuviera diciendo: “Sí, el tiempo pasa, las formas cambian, pero siempre hay algo que permanece, algo que resiste”. Y ese algo es quizás lo que Manuel Rivas llamó “la autenticidad y fe creativa” de este pintor. Es esa chispa de vida que se niega a ser apagada, esa luz que brilla incluso en las sombras más profundas. Y es precisamente esta luz la que Costa captura en sus obras, esa luz que es a la vez cicatriz y memoria, pregunta y respuesta.',
                    'image3_1' => '/images/exhibitions/interea/LaSagradaFamilia.jpg',
                    'image3_2' => '/images/exhibitions/interea/Pasaxe.jpg',
                    'button_link1' => '/exhibitions',
                    'button_text1' => 'volver a exposiciones',
                    'button_link2' => '/exhibitions/Latexo-Do-Labirinto',
                    'button_text2' => 'ver siguiente',
                ];
                break;
            case 'Latexo-Do-Labirinto':
                $exhibitionData = [
                    'general' => 'Latexo Do Labirinto',
                    'title' => 'LATEXO DO LABIRINTO',
                    'date' => '',
                    'image_title' => '/images/exhibitions/latexo/anton-patino.jpg',
                    'paragraph1' => 'La exposición “Latexo do Labirinto” se conforma con trabajos de Antón Patiño recogidos de diferentes series, agasajándonos con la oportunidad de transitar por la exuberante riqueza de su discurso, un ingente ejercicio metalingüístico con el que el pintor consigue relacionar su universo onírico con la corporeidad del lienzo. El origen está en el sueño más sus trabajos son el resultado de una implacable vigilia, obstinada en el análisis y refinamiento de su propia esencia como artista y pensador.',
                    'image1_1' => '/images/exhibitions/latexo/Espazo.jpg',
                    'image1_2' => '/images/exhibitions/latexo/Socalcos.jpg',
                    'paragraph2' => 'Patiño, en su constante búsqueda de la verdad, se sumerge en la profundidad de su subconsciente, desentrañando los misterios que se ocultan en sus sueños. Cada trazo, cada color, cada textura es un reflejo de su viaje interno, una manifestación tangible de sus pensamientos más profundos y sus emociones más intensas. Su obra es un diálogo entre el soñador y el observador, una invitación a adentrarse en el laberinto de su mente y descubrir las maravillas que se esconden en su interior.',
                    'image2' => '/images/exhibitions/latexo/Expo.jpg',
                    'paragraph3' => 'La exposición “Latexo do Labirinto” es un testimonio de la evolución de Patiño como artista. A través de sus obras, podemos apreciar cómo ha ido perfeccionando su técnica y afinando su estilo a lo largo del tiempo. Pero más allá de la estética, lo que realmente hace que su trabajo sea especial es la honestidad con la que se presenta. Cada cuadro es un fragmento de su alma, una ventana a su mundo interior. Y eso es lo que hace que esta exposición sea tan fascinante: nos ofrece la oportunidad de ver el mundo a través de los ojos de Patiño, de experimentar sus sueños y reflexiones como si fueran los nuestros propios.',
                    'image3_1' => '/images/exhibitions/latexo/Pasanervios.jpg',
                    'image3_2' => '/images/exhibitions/latexo/Ciclistas.jpg',
                    'button_link1' => '/exhibitions/Interea',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/exhibitions/A-Derradeira',
                    'button_text2' => 'ver siguiente',
                ];
                break;
            case 'A-Derradeira':
                $exhibitionData = [
                    'general' => 'A Derradeira',
                    'title' => 'A DERRADEIRA',
                    'date' => '',
                    'image_title' => '/images/exhibitions/derradeira/portada.jpg',
                    'paragraph1' => 'En esta exposición Mar Hernández indaga las huellas del paso del tiempo sobre construcciones y espacios deshabitados de Santiago de Compostela y de Murcia, tierra de sus padres a la que se siente muy vinculada, fotografiándolos y recreando nuevas imágenes en un delicado trabajo de dibujo y composición. Espacios que cobran vida y nos transmiten nuevas historias gracias a sus lápices con los que construye hábilmente sobre la fotografía el paisaje, el mobiliario, elementos decorativos y múltiples objetos, planteando de este modo nuevas lecturas sobre la historia de esos entornos cuidadosamente buscados y seleccionados para esta exposición.',
                    'image1_1' => '/images/exhibitions/derradeira/Papeleria.jpg',
                    'image1_2' => '/images/exhibitions/derradeira/Menor.jpg',
                    'paragraph2' => 'El título de esta exposición “A DERRADEIRA” es un guiño cariñoso a la antigua Papelería Compostela en la que la artista en uno de sus viajes a Santiago mientras esperaba su turno le oyó decir a un cliente dirigiéndose a don Miguel González, propietario de la mítica papelería en la que apenas quedaba mercancía, “…..esta é a derradeira….”, a partir de ese momento el carisma de nuestro casco antiguo compostelano con su pequeño comercio, sus calles estrechas y su bullicio se traslada a las obras de Mar Hernández que nos atraparán silenciosamente, como lo hacen las ruinas y los espacios deshabitados que ahora cobrarán vida en la Galería.',
                    'image2' => '/images/exhibitions/derradeira/Circo.jpg',
                    'paragraph3' => '“A Derradeira” es más que una exposición, es un viaje a través del tiempo y el espacio, un homenaje a la belleza oculta de los lugares olvidados. Mar Hernández nos invita a explorar estos espacios con una nueva perspectiva, a descubrir las historias que se esconden en sus rincones silenciosos y a apreciar la belleza en su decadencia. Cada obra es un testimonio del paso del tiempo, una celebración de la imperfección y un recordatorio de la transitoriedad de todas las cosas.',
                    'image3_1' => '/images/exhibitions/derradeira/Transito.jpg',
                    'image3_2' => '/images/exhibitions/derradeira/Fiesta.jpg',
                    'button_link1' => '/exhibitions/Latexo-Do-Labirinto',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/exhibitions/Delirios',
                    'button_text2' => 'ver siguiente',
                ];
                break;
            case 'Delirios':
                $exhibitionData = [
                    'general' => 'Delirios',
                    'title' => 'DELIRIOS',
                    'date' => '',
                    'image_title' => '/images/exhibitions/delirios/portada.jpg',
                    'paragraph1' => 'Ajeno como siempre a las tendencias, cada exposición de Ramón Conde es concebida como una narración temática y en esta ocasión se inmersa en el territorio del subconsciente, de los sueños, de las imágenes delirantes y de todo lo que pueda saltarse el control racional, utilizando para ello un lenguaje surrealista, desafiante y provocador que apela a lo absurdo, a lo exótico, a lo primitivo e incluso a lo cómico, liberándose de prejuicios e ideas, disfrutando sencillamente de la acción de crear.',
                    'image1_1' => '/images/exhibitions/delirios/Loco.jpg',
                    'image1_2' => '/images/exhibitions/delirios/Soledad.jpg',
                    'paragraph2' => 'Partiendo de que en nuestra misma esencia poseemos dos cerebros y que suelen expresar sentimientos y posturas opuestas, las obras de Ramón Conde se postulan con ideas contrapuestas y nos muestran personajes en actitudes inquietantes, o incluso otros con su cabeza en el abdomen, en un evidente guiño al hecho real de que las neuronas comparten su alojamiento también en el estomago como si fuese un segundo cerebro.',
                    'image2' => '/images/exhibitions/delirios/Mural.jpg',
                    'paragraph3' => 'Las obras de Conde son un recordatorio de que somos seres complejos, llenos de contradicciones y conflictos internos. Nos invitan a aceptar y abrazar estas contradicciones, a verlas no como debilidades, sino como una parte esencial de lo que nos hace humanos. A través de su arte, Conde nos anima a explorar nuestras propias profundidades, a cuestionar nuestras creencias y prejuicios, y a encontrar belleza en lo absurdo y lo desconocido. Su trabajo es un canto a la libertad creativa, una celebración del poder del arte para desafiar nuestras percepciones y abrir nuestras mentes a nuevas posibilidades.',
                    'image3_1' => '/images/exhibitions/delirios/Madre.jpg',
                    'image3_2' => '/images/exhibitions/delirios/Bisonte.jpg',
                    'button_link1' => '/exhibitions/A-Derradeira',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/exhibitions/El-Instrumento-De-La-Sombra',
                    'button_text2' => 'ver siguiente',
                ];
                break;
            case 'El-Instrumento-De-La-Sombra':
                $exhibitionData = [
                    'general' => 'El Instrumento De La Sombra',
                    'title' => 'EL INSTRUMENTO DE LA SOMBRA',
                    'date' => 'septiembre-octubre',
                    'image_title' => '/images/exhibitions/sombra/portada.jpg',
                    'paragraph1' => 'Platón estaría muy interesado en esta muestra que Sandra Carvalho nos regala. Y sería muy interesante que los dos, Platón y Sandra, tuvieran una conversación sobre lo que es y no es realidad, y de cómo esta se nos transfigura a medida de ir adquiriendo conocimiento y consciencia. Me imagino a Platón hablando sin parar y a Sandra callada, atenta. Me imagino a Platón argumentando y teorizando sobre lo que ve, y haciendo apología sobre la poética de la sombra y su mito de la caverna, y mientras tanto, Sandra callada, silenciada y atenta, coge un pincel y circunda la silueta del mismo Platón, que ahora observa perplejo y atónito su propia esencia insondable.',
                    'image1_1' => '/images/exhibitions/sombra/Continuo.jpg',
                    'image1_2' => '/images/exhibitions/sombra/Portuguesa.jpg',
                    'paragraph2' => 'Cada pieza esconde y revela su propio atributo, como lo hace la misma luz sobre todas y cada una de las cosas de este mundo. Cada pieza está parida desde la más sincera apertura sensible y contemplativa. Sandra nos señala, sí, y nos recuerda la fugacidad del permanente cambio, siempre bello e inclusivo; pues luz y sombra son inseparables en una vida que se despliega fácil, con el único propósito fiable de Ser lo que se Es.',
                    'image2' => '/images/exhibitions/sombra/Merge.jpg',
                    'paragraph3' => 'La obra de Carvalho es un canto a la belleza de este equilibrio, una celebración de la danza eterna entre la luz y la sombra. A través de su arte, nos invita a ver el mundo con nuevos ojos, a apreciar la belleza en los detalles más pequeños y a encontrar alegría en el constante flujo y cambio de la vida. Su trabajo es un recordatorio de que, aunque la vida puede ser fugaz e incierta, siempre hay belleza y significado que descubrir si estamos dispuestos a mirar más allá de las sombras.',
                    'image3_1' => '/images/exhibitions/sombra/3.jpg',
                    'image3_2' => '/images/exhibitions/sombra/1829.jpg',
                    'button_link1' => '/exhibitions/Delirios',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/exhibitions',
                    'button_text2' => 'volver a exposiciones',
                ];
                break;
            default:
                return redirect()->to('/exhibitions');
        }

        echo view('exhibition', $exhibitionData);
    }
}
