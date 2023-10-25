<?php

namespace App\Controllers\Exhibitions;

use App\Controllers\BaseController;

class Exhibition3Controller extends BaseController
{
    public function index()
    {
        $exhibitionData = [
            'title' => 'A DERRADEIRA',
            'date' => '',
            'image_title' => '/images/derradeira/portada.jpg',
            'paragraph1' => 'En esta exposición Mar Hernández indaga las huellas del paso del tiempo sobre construcciones y espacios deshabitados de Santiago de Compostela y de Murcia, tierra de sus padres a la que se siente muy vinculada, fotografiándolos y recreando nuevas imágenes en un delicado trabajo de dibujo y composición. Espacios que cobran vida y nos transmiten nuevas historias gracias a sus lápices con los que construye hábilmente sobre la fotografía el paisaje, el mobiliario, elementos decorativos y múltiples objetos, planteando de este modo nuevas lecturas sobre la historia de esos entornos cuidadosamente buscados y seleccionados para esta exposición.',
            'image1_1' => '/images/derradeira/Papeleria.jpg',
            'image1_2' => '/images/derradeira/Menor.jpg',
            'paragraph2' => 'El título de esta exposición “A DERRADEIRA” es un guiño cariñoso a la antigua Papelería Compostela en la que la artista en uno de sus viajes a Santiago mientras esperaba su turno le oyó decir a un cliente dirigiéndose a don Miguel González, propietario de la mítica papelería en la que apenas quedaba mercancía, “…..esta é a derradeira….”, a partir de ese momento el carisma de nuestro casco antiguo compostelano con su pequeño comercio, sus calles estrechas y su bullicio se traslada a las obras de Mar Hernández que nos atraparán silenciosamente, como lo hacen las ruinas y los espacios deshabitados que ahora cobrarán vida en la Galería.',
            'image2' => '/images/derradeira/Circo.jpg',
            'paragraph3' => '“A Derradeira” es más que una exposición, es un viaje a través del tiempo y el espacio, un homenaje a la belleza oculta de los lugares olvidados. Mar Hernández nos invita a explorar estos espacios con una nueva perspectiva, a descubrir las historias que se esconden en sus rincones silenciosos y a apreciar la belleza en su decadencia. Cada obra es un testimonio del paso del tiempo, una celebración de la imperfección y un recordatorio de la transitoriedad de todas las cosas.',
            'image3_1' => '/images/derradeira/Transito.jpg',
            'image3_2' => '/images/derradeira/Fiesta.jpg',
        ];


        echo view('exhibitions/exhibition3', $exhibitionData);
    }
}
