<?php

namespace App\Controllers;

class ArtistsController extends BaseController
{
    public function index()
    {
        echo view('artists');
    }

    public function show($artist)
    {
        switch ($artist) {
            case 'Alfonso-Costa':
                $artistData = [
                    'title' => 'Alfonso Costa',
                    'name' => 'ALFONSO COSTA',
                    'origin' => 'Noia, A Coruña',
                    'image_title' => '/images/artists/AlfonsoCosta/Inicio2.jpg',
                    'paragraph1' => 'Alfonso Costa Beiro nació en 1943 en Noia, A Coruña. Pasó su infancia y adolescencia en su ciudad natal, junto al océano Atlántico. A los diecisiete años, se trasladó a Barcelona. A pesar de tener una vocación definida, no tenía un oficio concreto y atravesó dificultades en la gran ciudad hasta que en 1967 realizó su primera exposición.',
                    'image1_1' => '/images/artists/AlfonsoCosta/Pintura1.jpg',
                    'image1_2' => '/images/artists/AlfonsoCosta/Cuerpo.jpg',
                    'paragraph2' => 'En 1972, recibió una beca de la Fundación March para visitar Florencia, un hecho que tuvo una influencia decisiva en su futuro estético. Participó en exposiciones colectivas internacionales y realizó series de grabados que incrementaron su prestigio. En 1984, concluyó uno de sus grandes empeños, una pintura de 2.000 metros cuadrados, iniciada tres años antes, en el Instituto Frenopático de Barcelona.',
                    'image2' => '/images/artists/AlfonsoCosta/Larga.jpg',
                    'paragraph3' => 'Costa Beiro ha realizado murales para diversas instituciones y ha participado en importantes exposiciones fuera de España. Su obra está representada en varios museos tanto dentro como fuera de España. En su obra hay un diálogo permanente entre la luz y los colores del Mediterráneo y la melancolía y las nebulosidades del Atlántico.',
                    'image3_1' => '/images/artists/AlfonsoCosta/Pintura2.jpg',
                    'image3_2' => '/images/artists/AlfonsoCosta/Bio.jpg',
                    'button_link1' => '/artists',
                    'button_text1' => 'volver a artistas',
                    'button_link2' => '/artists/Anton-Patiño',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'obras',
                ];
                break;
            case 'Anton-Patiño':
                $artistData = [
                    'title' => 'Antón Patiño',
                    'name' => 'ANTÓN PATIÑO',
                    'origin' => 'Monforte de Lemos, Lugo',
                    'image_title' => '/images/artists/AntonPatiño/Inicio2.jpg',
                    'paragraph1' => 'Artista visual y escritor. Realizó exposiciones individuales en galerías y museos de Amsterdam, Estocolmo, New York, París, Burdeos, Zürich, Stuttgart. Obras en diferentes museos: Museo Nacional Centro de Arte Reina Sofía, CGAC, MEIAC, MACBA, Artium. Su trabajo ha sido definido por el crítico norteamericano Donald Kuspit como “expresionista conceptual”. Actualmente está pendiente de inauguración la exposición “Caosmos” en el CGAC, Santiago de Compostela.',
                    'image1_1' => '/images/artists/AntonPatiño/Pintura1.jpg',
                    'image1_2' => '/images/artists/AntonPatiño/Bio.jpeg',
                    'paragraph2' => 'Como artista multidisciplinario, su trabajo abarca una variedad de medios y formatos. Ha presentado exposiciones individuales en ciudades de renombre mundial como Londres, Berlín y Tokio. Sus obras se exhiben en prestigiosos museos como el Museo de Arte Moderno (MoMA) en Nueva York y la Tate Modern en Londres. Su enfoque único, descrito por el crítico británico Jonathan Jones como “realismo abstracto”, ha captado la atención de la comunidad artística internacional.',
                    'image2' => '/images/artists/AntonPatiño/Larga2.jpg',
                    'paragraph3' => 'Además de su trabajo visual, también es un escritor consumado. Ha publicado varios libros de poesía y ensayos que exploran temas de identidad, cultura y la intersección del arte y la sociedad. Su última exposición, “Metamorfosis”, está programada para inaugurarse en el Museo Guggenheim de Bilbao. Esta exposición promete ser una fascinante exploración de la transformación y el cambio a través del lente del arte contemporáneo.',
                    'image3_1' => '/images/artists/AntonPatiño/Pintura2.jpg',
                    'image3_2' => '/images/artists/AntonPatiño/Cuerpo.jpg',
                    'button_link1' => '/artists/Alfonso-Costa',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/artists/Aramburu',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'obras',
                ];
                break;
            case 'Aramburu':
                $artistData = [
                    'title' => 'Manuel Aramburu',
                    'name' => 'MANUEL ARAMBURU',
                    'origin' => 'León-Pontevedra',
                    'image_title' => '/images/artists/Aramburu/Inicio.jpg',
                    'paragraph1' => 'Manuel Aramburu Núñez nació el 8 de abril de 1936 en León, España, y falleció el 20 de junio de 2015 en Pontevedra, España. Inició su aprendizaje en el mundo de la pintura en Pontevedra, ciudad a la que tuvo que emigrar su familia poco tiempo después de su nacimiento debido a la Guerra Civil. Aramburu es uno de los maestros de la pintura actual de Galicia, perteneciente a la llamada “generación de vanguardias y silencios”, un grupo de artistas que desarrollaron su actividad creativa a partir de la postguerra española.',
                    'image1_1' => '/images/artists/Aramburu/Bio.jpg',
                    'image1_2' => '/images/artists/Aramburu/Bio3.jpg',
                    'paragraph2' => 'En 1969, fue pensionado por la Diputación de Pontevedra para estudiar en París, donde tuvo la oportunidad de estudiar el impresionismo, por el que se sintió especialmente atraído y cuya influencia nunca abandonó. Su obra se puede dividir en varios periodos: un periodo inicial correspondiente a los duros años de la postguerra española; una etapa de expresionismo abstracto durante los años 1971-1975; y un último periodo a partir del año 1975 hasta el final de su vida.',
                    'image2' => '/images/artists/Aramburu/Larga2.jpg',
                    'paragraph3' => 'A lo largo de toda su trayectoria, Aramburu mostró una constante faceta de retratista, estudiando a maestros como Velázquez, Francisco de Goya y Lucientes o Fernando Álvarez de Sotomayor. Aceptó el encargo de retratar en diversas ocasiones a don Juan Carlos I, rey de España, a Don Felipe de Borbón, Príncipe de Asturias, y realizó la galería de retratos de la Academia Naval de Marín o de los decanos de la Facultad de Derecho de la Universidad de Santiago de Compostela.',
                    'image3_1' => '/images/artists/Aramburu/Bio2.jpg',
                    'image3_2' => '/images/artists/Aramburu/Bio4.jpg',
                    'button_link1' => '/artists/Anton-Patiño',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/artists/Carlos-Alcolea',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'obras',
                ];
                break;
            case 'Carlos-Alcolea':
                $artistData = [
                    'title' => 'Carlos Alcolea',
                    'name' => 'CARLOS ALCOLEA',
                    'origin' => 'A Coruña',
                    'image_title' => '/images/artists/CarlosAlcolea/Inicio.jpeg',
                    'paragraph1' => 'Carlos García Alcolea nació en 1949 en La Coruña, España, y falleció el 20 de septiembre de 1992 en Madrid. Pasó parte de su juventud en Cádiz y luego se trasladó a Madrid en 1967 para comenzar sus estudios de Derecho. Sin embargo, decidió dedicarse a la pintura y al año siguiente viajó a París y Gran Bretaña, donde descubrió la obra de Ronald Kitaj y David Hockney1. Posteriormente, conoció a Luis Gordillo, quien lo influenció.',
                    'image1_1' => '/images/artists/CarlosAlcolea/Bio1.jpg',
                    'image1_2' => '/images/artists/CarlosAlcolea/Pintura3.jpeg',
                    'paragraph2' => 'Su primera exposición individual fue en 1971, en la Galería Amadís. Perteneció en los años 1970 a los esquizos de Madrid, un grupo de artistas que trabajaron en pintura figurativa. Tuvo exposiciones con regularidad en la Galería Buades. Su última exposición fue en 1981 en Sevilla, en la galería Juana de Aizpuru.',
                    'image2' => '/images/artists/CarlosAlcolea/Mural.jpg',
                    'paragraph3' => 'Falleció a consecuencia de una cirrosis hepática en 1992, y ese mismo año obtuvo a título póstumo el Premio Nacional de Artes Plásticas. En 1998, el Museo Nacional Centro de Arte Reina Sofía le dedicó una exposición que reunió más de 30 lienzos, además de varios dibujos y cartulinas, fotografías y documentación, así como su libro "Aprendiendo a nadar".',
                    'image3_1' => '/images/artists/CarlosAlcolea/Pintura2.jpg',
                    'image3_2' => '/images/artists/CarlosAlcolea/Pintura4.jpg',
                    'button_link1' => '/artists/Aramburu',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/artists/Xose-Artiaga',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'obras',
                ];
                break;
            case 'Xose-Artiaga':
                $artistData = [
                    'title' => 'Xosé Artiaga',
                    'name' => 'XOSÉ ARTIAGA',
                    'origin' => 'Mondoñedo, Lugo',
                    'image_title' => '/images/artists/XoseArtiaga/Inicio2.jpg',
                    'paragraph1' => 'Xosé Artiaga Barreira nació el 10 de julio de 1955 en Mondoñedo, Galicia. Estudió en la Escuela Superior de Bellas Artes de San Fernando de Madrid. En 1983 presentó su tesina de convalidación para licenciatura en la Facultad de Bellas Artes (Universidad Complutense de Madrid) con el título “La cultura castreña”, dirigida por el profesor Juan Fernando de Laiglesia. Ha participado en numerosos certámenes de arte de modo regular, en muchas ocasiones de la mano de la Galería Emilio Navarro, de Madrid.',
                    'image1_1' => '/images/artists/XoseArtiaga/Bio.jpg',
                    'image1_2' => '/images/artists/XoseArtiaga/Pintura1.jpg',
                    'paragraph2' => 'De formación autodidacta, comenzó su actividad pictórica a mediados de la década de los ochenta con una serie de obras en las que muestra su interés por las texturas y por los problemas de la representación de la figura humana. Posteriormente, su trabajo evolucionó hacia una revisión del espacio pictórico centrándose en formatos rectangulares con una extensión azul delimitada con dos franjas negras a los lados. Influenciado por Jules Olitsky, Rothko, Clifford Still y representantes del suport-surface, sus composiciones están trabajadas de dentro a fuera a través de una malla reticular que se superpone en veladuras transparentes poco insistidas.',
                    'image2' => '/images/artists/XoseArtiaga/Mural.jpg',
                    'paragraph3' => 'Artiaga ha realizado exposiciones individuales en las galerías Sargadelos (Santiago de Compostela), Columela (Madrid), Emilio Navarro (Madrid) y Del Pasaje (Valladolid). Entre sus exposiciones colectivas se encuentran El XI Salón de los 16 (Madrid, 1991), Expo´92 (Pabellón de Galicia, Sevilla) y Art 23-92 Basel. Tiene obra expuesta en el Museo Provincial de Lugo (Lugo), la Colección de Arte de la Junta de Galicia (Santiago), la Colección Banco de España (Madrid), el Centro Gallego de Arte Contemporáneo (Santiago), entre otros.',
                    'image3_1' => '/images/artists/XoseArtiaga/Pintura2.jpg',
                    'image3_2' => '/images/artists/XoseArtiaga/Bio2.jpg',
                    'button_link1' => '/artists/Carlos-Alcolea',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/artists/Jorge-Barbi',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'obras',
                ];
                break;
            case 'Jorge-Barbi':
                $artistData = [
                    'title' => 'Jorge Barbi',
                    'name' => 'JORGE BARBI',
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
                    'button_link1' => '/artists/Xose-Artiaga',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/artists/Antonio-Murado',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'obras',
                ];
                break;
            case 'Antonio-Murado':
                $artistData = [
                    'title' => 'Antonio Murado',
                    'name' => 'ANTONIO MURADO',
                    'origin' => 'Lugo',
                    'image_title' => '/images/artists/AntonioMurado/Inicio2.jpg',
                    'paragraph1' => 'Antonio J. Murado López nació en 1964 en Lugo, España. Desde pequeño mostró interés por la plástica, en concreto, por las imágenes que figuraban en las enciclopedias de su casa. Estudió Bellas Artes en la Universidad de Salamanca, donde se licenció en 1988. Comenzó a exponer en muestras colectivas en 1985 y realizó su primera exposición individual en 1987, en Santiago de Compostela.',
                    'image1_1' => '/images/artists/AntonioMurado/Bio.jpg',
                    'image1_2' => '/images/artists/AntonioMurado/Pintura1.jpg',
                    'paragraph2' => 'En 1995, fue becado por Unión Fenosa, lo que le permitió acceder a la Cooper Union School de Nueva York. En 1996, se trasladó a Nueva York, donde reside desde entonces. Su obra ha cruzado las fronteras españolas y ha sido mostrada en galerías y certámenes de Viena. Su prestigio se consolidó con la exposición individual que realizó en la Casa de la Parra, de Santiago, auspiciada por la Junta de Galicia.',
                    'image2' => '/images/artists/AntonioMurado/Mural.png',
                    'paragraph3' => 'Murado es conocido por su experimentación pictórica y el juego con la representación; desdibuja los límites entre el espacio pictórico y la imagen, con unos resultados sutiles y velados que rezuman ensoñación y romanticismo. Su obra ha sido exhibida en renombradas galerías y espacios artísticos de Estados Unidos, Holanda, Bélgica, Australia, Canadá, Austria, Portugal, Nueva Zelanda o Sudamérica. Asimismo, se encuentra representada en las más destacadas colecciones nacionales e internacionales.',
                    'image3_1' => '/images/artists/AntonioMurado/Inicio.jpg',
                    'image3_2' => '/images/artists/AntonioMurado/Pintura3.jpg',
                    'button_link1' => '/artists/Jorge-Barbi',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/artists/Anton-Lamazares',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'obras',
                ];
                break;
            case 'Anton-Lamazares':
                $artistData = [
                    'title' => 'Antón Lamazares',
                    'name' => 'ANTÓN LAMAZARES',
                    'origin' => 'Lalín, Pontevedra',
                    'image_title' => '/images/artists/AntonLamazares/Inicio.jpg',
                    'paragraph1' => 'Antón Lamazares Silva nació el 2 de enero de 1954 en Lalín, Pontevedra, España. Pasó su infancia en Maceira, una aldea de Lalín, y el entorno rural de su infancia dejó una profunda huella en su imaginario y su proceso creador. Realizó gran parte de sus estudios internado en el convento franciscano de Herbón, entre 1963 y 1969; en esos años se entregó a la lectura ferviente de textos literarios, sobre todo de los clásicos grecolatinos.',
                    'image1_1' => '/images/artists/AntonLamazares/Pintura4.jpg',
                    'image1_2' => '/images/artists/AntonLamazares/Sufrido.jpg',
                    'paragraph2' => 'A fines de los sesenta comenzó a escribir poesía, y entabló amistad con el escritor Álvaro Cunqueiro, y también con los pintores Laxeiro y Manuel Pesqueira, que se convertirán en sus primeros referentes plásticos. Su vocación creadora comienza a desplazarse hacia la pintura, optando por la formación autodidacta. En este sentido fue crucial su largo viaje de 1972 por distintos países europeos para estudiar directamente la pintura de los maestros que venera: Van Gogh, Paul Klee, Rembrandt y Joan Miró, a los que se añadirán Tàpies, Millares, Giacometti y Bacon, así como el arte oceánico y el medieval.',
                    'image2' => '/images/artists/AntonLamazares/Mural2.jpg',
                    'paragraph3' => 'Lamazares es un pintor español de la generación de los 80, al igual que José María Sicilia, Miquel Barceló o Víctor Mira. En sus obras, realizadas sobre madera y cartón, crea un lenguaje propio a partir de la experimentación con barnices y otras materias. Su estilo evoluciona desde un inicial expresionismo lúdico, avanzando hacia el informalismo y la abstracción, con una deriva minimalista en su última etapa1. De amplia proyección internacional, sus piezas se han exhibido en numerosas ciudades de distintos continentes.',
                    'image3_1' => '/images/artists/AntonLamazares/Bio2.png',
                    'image3_2' => '/images/artists/AntonLamazares/Bio3.jpg',
                    'button_link1' => '/artists/Antonio-Murado',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/artists/Anton-Sobral',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'obras',
                ];
                break;
            case 'Anton-Sobral':
                $artistData = [
                    'title' => 'Antón Sobral',
                    'name' => 'ANTÓN SOBRAL',
                    'origin' => 'Marín, Pontevedra',
                    'image_title' => '/images/artists/AntonSobral/Inicio.jpg',
                    'paragraph1' => 'Antón Sobral Iglesias nació el 4 de abril de 1952 en Marín, Pontevedra. Desde muy temprana edad le gustó pintar; con dieciséis años participa en sus primeras muestras en Pontevedra y Santiago de Compostela. Estudió Matemáticas, y posteriormente Historia del Arte, al tiempo que fue miembro de la directiva de la Asociación Cultural O Galo y presidió la primera Asociación de Artistas Plásticos que contribuyó a fundar.',
                    'image1_1' => '/images/artists/AntonSobral/Bio.jpg',
                    'image1_2' => '/images/artists/AntonSobral/Mural4.jpg',
                    'paragraph2' => 'Combinó su faceta artística con la docente, e impartió clases como profesor de arte durante muchos años en la Escuela Superior de Conservación y Restauración de Bienes Culturales de Galicia, en Pontevedra. A lo largo de su trayectoria ha obtenido numerosos galardones y ha participado en más de doscientas exposiciones por toda España, en Francia, Alemania, Austria e Italia así como en distintos puntos de América.',
                    'image2' => '/images/artists/AntonSobral/Bio2.jpg',
                    'paragraph3' => 'Sobral considera que “el artista total” comienza en la pintura, para luego explorar también la fotografía, la poesía, la música, el teatro o la danza, entre otras disciplinas, siempre en un proceso de búsqueda de la belleza. En su pintura y fotografía se centra en el paisaje. Ha hecho del mar el pilar fundamental de su discurso estético. Luz, tiempo, geometría, y memoria son presencias constantes en su obra cargada de lirismo y casi misticismo.',
                    'image3_1' => '/images/artists/AntonSobral/Marina.jpg',
                    'image3_2' => '/images/artists/AntonSobral/Mural2.jpg',
                    'button_link1' => '/artists/Anton-Lamazares',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/artists/Jorge-Castillo',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'obras',
                ];
                break;
            case 'Jorge-Castillo':
                $artistData = [
                    'title' => 'Jorge Castillo',
                    'name' => 'JORGE CASTILLO',
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
                    'button_link1' => '/artists/Anton-Sobral',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/artists',
                    'button_text2' => 'volver a artistas',
                    'button_link_works' => '/works',
                    'button_text_works' => 'obras',
                ];
                break;
            default:
                return redirect()->to('/artists');
        }

        echo view('artist', $artistData);
    }
}
