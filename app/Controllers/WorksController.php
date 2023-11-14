<?php

namespace App\Controllers;

use App\Models\WorkModel;

class WorksController extends BaseController
{
    public function index()
    {
        $model = new WorkModel();

        $data['works'] = $model->findAll();

        //Carga el archivo de funciones de ayuda
        helper('url');

        echo view('works', $data);
    }

    public function show($work)
    {
        switch ($work) {
            case 'A-Chambra-Branca':
                $workData = [
                    'title' => 'A Chambra Branca',
                    'name' => 'A Chambra Branca',
                    'author' => 'Seoane',
                    'image_work' => '/images/works/A-Chambra-Branca.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '100 x 81 cm',
                    'year' => '1969',
                    'button_link1' => '/works/Venecia',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/A-Ría',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'A-Ría':
                $workData = [
                    'title' => 'A Ría',
                    'name' => 'A Ría',
                    'author' => 'Nacho Costa',
                    'image_work' => '/images/works/A-Ria.jpg',
                    'type' => 'Acrílico sobre lienzo',
                    'dimensions' => '116 x 89 cm',
                    'year' => '1999',
                    'button_link1' => '/works/A-Chambra-Branca',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Abismo-I',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Abismo-I':
                $workData = [
                    'title' => 'Abismo I',
                    'name' => 'Abismo I',
                    'author' => 'Antón Pulido',
                    'image_work' => '/images/works/Abismo.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '162 x 162 cm',
                    'year' => '1991',
                    'button_link1' => '/works/A-Ría',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Anónimo',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Anónimo':
                $workData = [
                    'title' => 'Anónimo',
                    'name' => 'Anónimo',
                    'author' => 'Alfonso Costa',
                    'image_work' => '/images/works/Anonimo.jpg',
                    'type' => 'Técnica mixta sobre papel',
                    'dimensions' => '100 x 70 cm',
                    'year' => '2021',
                    'button_link1' => '/works/Abismo-I',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Arlequín',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Arlequín':
                $workData = [
                    'title' => 'Arlequin',
                    'name' => 'Arlequín',
                    'author' => 'Jorge CAstillo',
                    'image_work' => '/images/works/Arlequin.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '74 x 61 cm',
                    'year' => '1986',
                    'button_link1' => '/works/Anónimo',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Barcos-Al-Atardecer',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Barcos-Al-Atardecer':
                $workData = [
                    'title' => 'Barcos Al Atardecer',
                    'name' => 'Barcos Al Atardecer',
                    'author' => 'Eloy Hernández',
                    'image_work' => '/images/works/Barcos.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '81 x 130 cm',
                    'year' => '1997',
                    'button_link1' => '/works/Arlequín',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Bisonte',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Bisonte':
                $workData = [
                    'title' => 'Bisonte',
                    'name' => 'Bisonte',
                    'author' => 'Ramón Conde',
                    'image_work' => '/images/works/Bisonte.jpg',
                    'type' => 'Bronce',
                    'dimensions' => '19 x 16 x 15 cm',
                    'year' => '2019',
                    'button_link1' => '/works/Barcos-Al-Atardecer',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Borrachos',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Borrachos':
                $workData = [
                    'title' => 'Borrachos',
                    'name' => 'Borrachos',
                    'author' => 'Carlos Alcolea',
                    'image_work' => '/images/works/Borracho.jpg',
                    'type' => 'Óleo, acrílico y ceras colores sobre papel',
                    'dimensions' => '99 x 69 cm',
                    'year' => '-',
                    'button_link1' => '/works/Bisonte',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Cajas',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Cajas':
                $workData = [
                    'title' => 'Cajas',
                    'name' => 'Cajas',
                    'author' => 'Ánxel Huete',
                    'image_work' => '/images/works/Cajas.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '163 x 130 cm',
                    'year' => '1976',
                    'button_link1' => '/works/Borrachos',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Camiño-Vermello',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Camiño-Vermello':
                $workData = [
                    'title' => 'Camiño Vermello',
                    'name' => 'Camiño Vermello',
                    'author' => 'Antón Pulido',
                    'image_work' => '/images/works/Camiño-Vermello.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '130 x 131 cm',
                    'year' => '1988',
                    'button_link1' => '/works/Cajas',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Chatarra',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Chatarra':
                $workData = [
                    'title' => 'Chatarra',
                    'name' => 'Chatarra',
                    'author' => 'Aramburu',
                    'image_work' => '/images/works/Chatarra.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '55 x 65 cm',
                    'year' => '1975',
                    'button_link1' => '/works/Camiño-Vermello',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Ciclista',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Ciclista':
                $workData = [
                    'title' => 'Ciclista',
                    'name' => 'Ciclista',
                    'author' => 'Antón Patiño',
                    'image_work' => '/images/works/Ciclistas.jpg',
                    'type' => 'Pintura sobre tela',
                    'dimensions' => '200 x 250 cm',
                    'year' => '2021',
                    'button_link1' => '/works/Chatarra',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Composición-Abstracta1',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Composición-Abstracta1':
                $workData = [
                    'title' => 'Composición Abstracta',
                    'name' => 'Composición Abstracta',
                    'author' => 'Deside',
                    'image_work' => '/images/works/Composicion-Abstracta.jpg',
                    'type' => 'Mixta/tela',
                    'dimensions' => '101 x 83 cm',
                    'year' => '1980',
                    'button_link1' => '/works/Ciclista',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Composición-Abstracta2',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Composición-Abstracta2':
                $workData = [
                    'title' => 'Composición Abstracta',
                    'name' => 'Composición Abstracta',
                    'author' => 'Deside',
                    'image_work' => '/images/works/Composicion.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '101 x 83',
                    'year' => '1980',
                    'button_link1' => '/works/Composición-Abstracta1',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Contemplando-La-Batalla',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Contemplando-La-Batalla':
                $workData = [
                    'title' => 'Contemplando La Batalla',
                    'name' => 'Contemplando La Batalla',
                    'author' => 'Alfonso Costa',
                    'image_work' => '/images/works/Contemplando-La-Batalla.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '40 x 47 cm',
                    'year' => '1982',
                    'button_link1' => '/works/Composición-Abstracta2',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Desafío',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Desafío':
                $workData = [
                    'title' => 'Desafío',
                    'name' => 'Desafío',
                    'author' => 'Ramón Conde',
                    'image_work' => '/images/works/Desafio.jpg',
                    'type' => 'Poliester',
                    'dimensions' => '43 x 42 x 27 cm',
                    'year' => '1994',
                    'button_link1' => '/works/Contemplando-La-Batalla',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Deconstrucción',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Deconstrucción':
                $workData = [
                    'title' => 'Deconstrucción',
                    'name' => 'Deconstrucción',
                    'author' => 'Alfonso Costa',
                    'image_work' => '/images/works/Deconstruccion.jpg',
                    'type' => 'Técnica mixta sobre tela',
                    'dimensions' => '160 x 150 cm',
                    'year' => '2021',
                    'button_link1' => '/works/Desafío',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Durmindo-Nas-Olas',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Durmindo-Nas-Olas':
                $workData = [
                    'title' => 'Durmindo Nas Olas',
                    'name' => 'Durmindo Nas Olas',
                    'author' => 'Antón Pulido',
                    'image_work' => '/images/works/Durmindo-Nas-Olas.png',
                    'type' => 'Acrílico sobre lienzo',
                    'dimensions' => '150 x 150 cm',
                    'year' => '2008',
                    'button_link1' => '/works/Deconstrucción',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/El-Peregrino',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'El-Peregrino':
                $workData = [
                    'title' => 'El Peregrino',
                    'name' => 'El Peregrino',
                    'author' => 'Lugrís Vadillo',
                    'image_work' => '/images/works/El-Peregrino.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '150 x 161 cm',
                    'year' => '',
                    'button_link1' => '/works/Durmindo-Nas-Olas',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Entropía',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Entropía':
                $workData = [
                    'title' => 'Entropía',
                    'name' => 'Entropía',
                    'author' => 'Alfonso Costa',
                    'image_work' => '/images/works/Entropia.jpg',
                    'type' => 'Acrílico sobre tela',
                    'dimensions' => '97 x 97 cm',
                    'year' => '2021',
                    'button_link1' => '/works/El-Peregrino',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Escrita-Das-Árbores',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Escrita-Das-Árbores':
                $workData = [
                    'title' => 'Escrita Das Árbores',
                    'name' => 'Escrita Das Árbores',
                    'author' => 'Antón Patiño',
                    'image_work' => '/images/works/Escrita-Das-Arbores.jpg',
                    'type' => 'Mixta/tela',
                    'dimensions' => '146 x 115 cm',
                    'year' => '1992',
                    'button_link1' => '/works/Entropía',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Espazo-Ingrávido',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Espazo-Ingrávido':
                $workData = [
                    'title' => 'Espazo Ingrávido',
                    'name' => 'Espazo Ingrávido',
                    'author' => 'Antón Patiño',
                    'image_work' => '/images/works/Espazo.jpg',
                    'type' => 'Pintura/tela',
                    'dimensions' => '178 x 116 cm',
                    'year' => '2017',
                    'button_link1' => '/works/Escrita-Das-Árbores',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Espello-De-Papel',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Espello-De-Papel':
                $workData = [
                    'title' => 'Espello De Papel',
                    'name' => 'Espello de Papel',
                    'author' => 'Alfonso Costa',
                    'image_work' => '/images/works/Espello-de-Papel.jpg',
                    'type' => 'Técnica mixta/papel',
                    'dimensions' => '70 x 100 cm',
                    'year' => '2021',
                    'button_link1' => '/works/Espazo-Ingrávido',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/A-Mar-Espello',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'A-Mar-Espello':
                $workData = [
                    'title' => 'A Mar Espello',
                    'name' => 'A Mar Espello',
                    'author' => 'Antón Sobral',
                    'image_work' => '/images/works/Espello.jpg',
                    'type' => 'Óleo sobre lienzo',
                    'dimensions' => '38 x 46 cm',
                    'year' => '1995',
                    'button_link1' => '/works/Espello-De-Papel',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Familia-Americana',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Familia-Americana':
                $workData = [
                    'title' => 'Familia Americana',
                    'name' => 'Familia Americana',
                    'author' => 'Jorge Castillo',
                    'image_work' => '/images/works/Familia.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '89 x 116 cm',
                    'year' => '1995',
                    'button_link1' => '/works/A-Mar-Espello',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Felino',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Felino':
                $workData = [
                    'title' => 'Felino',
                    'name' => 'Felino',
                    'author' => 'Alfonso Costa',
                    'image_work' => '/images/works/Felino.jpg',
                    'type' => 'Técnica mixta sobre papel',
                    'dimensions' => '76 x 76 cm',
                    'year' => '2021',
                    'button_link1' => '/works/Familia-Americana',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Fósiles',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Fósiles':
                $workData = [
                    'title' => 'Fósiles',
                    'name' => 'Fósiles',
                    'author' => 'Sandra Carvalho',
                    'image_work' => '/images/works/Fosiles.jpg',
                    'type' => 'Acuarela y lápiz sobre papel',
                    'dimensions' => '29,7 x 42 cm',
                    'year' => '2020',
                    'button_link1' => '/works/Felino',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Hibernáculo',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Hibernáculo':
                $workData = [
                    'title' => 'Hibernáculo',
                    'name' => 'Hibernáculo',
                    'author' => 'Jorge Barbi',
                    'image_work' => '/images/works/Hibernaculo.jpg',
                    'type' => 'Contrachapado',
                    'dimensions' => '155 x 70 x 70 cm',
                    'year' => '1993',
                    'button_link1' => '/works/Fósiles',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Hierros',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Hierros':
                $workData = [
                    'title' => 'Hierros',
                    'name' => 'Hierros',
                    'author' => 'Aramburu',
                    'image_work' => '/images/works/Hierros.jpeg',
                    'type' => 'Óleo sobre lienzo',
                    'dimensions' => '195 x 150 cm',
                    'year' => '1996',
                    'button_link1' => '/works/Hibernáculo',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Historia',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Historia':
                $workData = [
                    'title' => 'Historia',
                    'name' => 'Historia',
                    'author' => 'Alfonso Costa',
                    'image_work' => '/images/works/Historia.jpg',
                    'type' => 'Técnica mixta sobre papel',
                    'dimensions' => '70 x 100 cm',
                    'year' => '2021',
                    'button_link1' => '/works/Hierros',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Interea',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Interea':
                $workData = [
                    'title' => 'Interea',
                    'name' => 'Interea',
                    'author' => 'Alfonso Costa',
                    'image_work' => '/images/works/Interea.jpg',
                    'type' => 'Técnica mixta sobre lienzo',
                    'dimensions' => '70 x 100 cm',
                    'year' => '2021',
                    'button_link1' => '/works/Historia',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Islas-Cíes',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Islas-Cíes':
                $workData = [
                    'title' => 'Islas Cíes',
                    'name' => 'Islas Cíes',
                    'author' => 'Alfonso Costa',
                    'image_work' => '/images/works/Islas-Cies.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '65 x 81 cm',
                    'year' => '1981',
                    'button_link1' => '/works/Interea',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/La-Palmera',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'La-Palmera':
                $workData = [
                    'title' => 'La Palmera',
                    'name' => 'La Palmera',
                    'author' => 'Antón Patiño',
                    'image_work' => '/images/works/La-Palmera.png',
                    'type' => 'Técnica mixta sobre tela',
                    'dimensions' => '260 x 195 cm',
                    'year' => '1982',
                    'button_link1' => '/works/Islas-Cíes',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/La-Sagrada-Familia',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'La-Sagrada-Familia':
                $workData = [
                    'title' => 'La Sagrada Familia',
                    'name' => 'La Sagrada Familia',
                    'author' => 'Alfonso Costa',
                    'image_work' => '/images/works/La-Sagrada-Familia.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '100 x 81 cm',
                    'year' => '1981',
                    'button_link1' => '/works/La-Palmera',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Levitando',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Levitando':
                $workData = [
                    'title' => 'Levitando',
                    'name' => 'Levitando',
                    'author' => 'Alfonso Costa',
                    'image_work' => '/images/works/Levitando.jpg',
                    'type' => 'Óleo sobre lienzo',
                    'dimensions' => '192 x 130 cm',
                    'year' => '1990',
                    'button_link1' => '/works/La-Sagrada-Familia',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Loco-Por-Los-Libros',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Loco-Por-Los-Libros':
                $workData = [
                    'title' => 'Loco Por Los Libros',
                    'name' => 'Loco Por Los Libros',
                    'author' => 'Ramón Conde',
                    'image_work' => '/images/works/Loco.jpg',
                    'type' => 'Bronce',
                    'dimensions' => '23 x 20 x 13 cm',
                    'year' => '2018',
                    'button_link1' => '/works/Levitando',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Maternidad1',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Maternidad1':
                $workData = [
                    'title' => 'Maternidad',
                    'name' => 'Maternidad',
                    'author' => 'Ramón Conde',
                    'image_work' => '/images/works/Maternidad.jpg',
                    'type' => 'Barro',
                    'dimensions' => '21 x 15 x 22 cm',
                    'year' => '1975',
                    'button_link1' => '/works/Loco-Por-Los-Libros',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Maternidad2',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Maternidad2':
                $workData = [
                    'title' => 'Maternidad',
                    'name' => 'Maternidad',
                    'author' => 'Ramón Conde',
                    'image_work' => '/images/works/Maternidade.jpg',
                    'type' => 'Bronce',
                    'dimensions' => '27 x 16 x 20 cm',
                    'year' => '1982',
                    'button_link1' => '/works/Maternidad1',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Mesa-Quebrada',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Mesa-Quebrada':
                $workData = [
                    'title' => 'Mesa Quebrada',
                    'name' => 'Mesa Quebrada',
                    'author' => 'Jorge Castillo',
                    'image_work' => '/images/works/Mesa.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '156 x 127 cm',
                    'year' => '1989',
                    'button_link1' => '/works/Maternidad2',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Muller-III',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Muller-III':
                $workData = [
                    'title' => 'Muller III',
                    'name' => 'Muller III',
                    'author' => 'Antón Pulido',
                    'image_work' => '/images/works/Muller.jpg',
                    'type' => 'Óleo sobre lienzo',
                    'dimensions' => '200 x 200 cm',
                    'year' => '1991',
                    'button_link1' => '/works/Mesa-Quebrada',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Nas-Marxes',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Nas-Marxes':
                $workData = [
                    'title' => 'Nas Marxes',
                    'name' => 'Nas Marxes',
                    'author' => 'Alfonso Costa',
                    'image_work' => '/images/works/Nas-Marxes.jpg',
                    'type' => 'Técnica mixta sobre papel',
                    'dimensions' => '70 x 100 cm',
                    'year' => '2021',
                    'button_link1' => '/works/Muller-III',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/New-York',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'New-York':
                $workData = [
                    'title' => 'New York',
                    'name' => 'New York',
                    'author' => 'Jorge Castillo',
                    'image_work' => '/images/works/New-York.jpg',
                    'type' => 'Óleo sobre lienzo',
                    'dimensions' => '92 x 73 cm',
                    'year' => '1987',
                    'button_link1' => '/works/Nas-Marxes',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Sin-Título1',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Sin-Título1':
                $workData = [
                    'title' => 'Sin Título',
                    'name' => 'Sin Título',
                    'author' => 'Jorge Barbi',
                    'image_work' => '/images/works/no.jpg',
                    'type' => 'Cadena de bicicleta',
                    'dimensions' => '46 x 9 x 4 cm',
                    'year' => '1994',
                    'button_link1' => '/works/New-York',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Sin-Título2',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Sin-Título2':
                $workData = [
                    'title' => 'Sin Título',
                    'name' => 'Sin Título',
                    'author' => 'Carlos Alcolea',
                    'image_work' => '/images/works/notitulo.jpg',
                    'type' => 'Óleo sobre lienzo',
                    'dimensions' => '161 x 115 cm',
                    'year' => '1973',
                    'button_link1' => '/works/Sin-Título1',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Serie-Océano',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Serie-Océano':
                $workData = [
                    'title' => 'Serie Océano',
                    'name' => 'Serie Océano',
                    'author' => 'Antón Sobral',
                    'image_work' => '/images/works/oceano.png',
                    'type' => 'Óleo sobre lienzo',
                    'dimensions' => '100 x 100 cm',
                    'year' => '2006',
                    'button_link1' => '/works/Sin-Título2',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/PáginaN2',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'PáginaN2':
                $workData = [
                    'title' => 'Página Nº2',
                    'name' => 'Página Nº2',
                    'author' => 'Antonio Murado',
                    'image_work' => '/images/works/Pagina.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '162 x 130 cm',
                    'year' => '1993',
                    'button_link1' => '/works/Serie-Océano',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Paisaje-Arenoso',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Paisaje-Arenoso':
                $workData = [
                    'title' => 'Paisaje Arenoso',
                    'name' => 'Paisaje Arenoso',
                    'author' => 'Antonio Murado',
                    'image_work' => '/images/works/Paisaje-Arenoso.jpg',
                    'type' => 'Óleo sobre tela',
                    'dimensions' => '206 x 169 cm',
                    'year' => '2001',
                    'button_link1' => '/works/PáginaN2',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Pájaros-Sobre-Hojas',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Pájaros-Sobre-Hojas':
                $workData = [
                    'title' => 'Pájaros Sobre Hojas',
                    'name' => 'Pájaros Sobre Hojas',
                    'author' => 'Jorge Castillo',
                    'image_work' => '/images/works/Pajaros.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '97 x 130 cm',
                    'year' => '1987',
                    'button_link1' => '/works/Paisaje-Arenoso',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Papelería-Compostela',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Papelería-Compostela':
                $workData = [
                    'title' => 'Papelería Compostela',
                    'name' => 'Papelería Compostela',
                    'author' => 'Mar Hernández',
                    'image_work' => '/images/works/Papeleria.jpg',
                    'type' => 'Dibujo sobre impresión digital',
                    'dimensions' => '76 x 108 cm',
                    'year' => '2019',
                    'button_link1' => '/works/Pájaros-Sobre-Hojas',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Papeles-Encontrados',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Papeles-Encontrados':
                $workData = [
                    'title' => 'Papeles Encontrados',
                    'name' => 'Papeles Encontrados',
                    'author' => 'Sandra Carvalho',
                    'image_work' => '/images/works/Papeles.jpg',
                    'type' => 'Acuarela sobre papel',
                    'dimensions' => '49 x 37 cm',
                    'year' => '2019',
                    'button_link1' => '/works/Papelería-Compostela',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Perdices',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Perdices':
                $workData = [
                    'title' => 'Perdices',
                    'name' => 'Perdices',
                    'author' => 'Antón Lamazares',
                    'image_work' => '/images/works/Perdices.jpg',
                    'type' => 'Mixta sobre cartón y madera',
                    'dimensions' => '251 x 251 cm',
                    'year' => '1997',
                    'button_link1' => '/works/Papeles-Encontrados',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Personajes-Y-Aves',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Personajes-Y-Aves':
                $workData = [
                    'title' => 'Personajes Y Aves',
                    'name' => 'Personajes Y Aves',
                    'author' => 'Jorge Castillo',
                    'image_work' => '/images/works/Personajes.jpg',
                    'type' => 'Óleo/tela',
                    'dimensions' => '41 x 33 cm',
                    'year' => '1995',
                    'button_link1' => '/works/Perdices',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Personaxes-De-Millet',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Personaxes-De-Millet':
                $workData = [
                    'title' => 'Personaxes De Millet',
                    'name' => 'Personaxes De Millet',
                    'author' => 'Silveiro Rivas',
                    'image_work' => '/images/works/Personaxes-De-Millet.jpg',
                    'type' => 'Bronce',
                    'dimensions' => '110 x 28 x 28 cm',
                    'year' => '2000',
                    'button_link1' => '/works/Personajes-Y-Aves',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Pesanervios',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Pesanervios':
                $workData = [
                    'title' => 'Pesanervios',
                    'name' => 'Pesanervios',
                    'author' => 'Antón Patiño',
                    'image_work' => '/images/works/Pesanervios.jpg',
                    'type' => 'Pintura/tela',
                    'dimensions' => '146 x 114 cm',
                    'year' => '1999',
                    'button_link1' => '/works/Personaxes-De-Millet',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Paternidad',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Paternidad':
                $workData = [
                    'title' => 'Paternidad',
                    'name' => 'Paternidad',
                    'author' => 'Ramón Conde',
                    'image_work' => '/images/works/Petenidad.jpg',
                    'type' => 'Bronce',
                    'dimensions' => '12 x 12 x 12 cm',
                    'year' => '2018',
                    'button_link1' => '/works/Pesanervios',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Piscina-B',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Piscina-B':
                $workData = [
                    'title' => 'Piscina B',
                    'name' => 'Piscina B',
                    'author' => 'Carlos Alcolea',
                    'image_work' => '/images/works/PiscinaB.jpg',
                    'type' => 'Acrílico sobre lienzo',
                    'dimensions' => '181 x 151 cm',
                    'year' => '1972',
                    'button_link1' => '/works/Paternidad',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Puesta-De-Sol',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Puesta-De-Sol':
                $workData = [
                    'title' => 'Puesta De Sol',
                    'name' => 'Puesta De Sol',
                    'author' => 'Antón Sobral',
                    'image_work' => '/images/works/Puesta.jpg',
                    'type' => 'Óleo sobre lienzo',
                    'dimensions' => '38 x 46 cm',
                    'year' => '1978',
                    'button_link1' => '/works/Piscina-B',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Recorrido',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Recorrido':
                $workData = [
                    'title' => 'Recorrido',
                    'name' => 'Recorrido',
                    'author' => 'Antón Patiño',
                    'image_work' => '/images/works/Recorrido.jpg',
                    'type' => 'Pintura/tela',
                    'dimensions' => '70 x 70 cm',
                    'year' => '2017',
                    'button_link1' => '/works/Puesta-De-Sol',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Sello23',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Sello23':
                $workData = [
                    'title' => 'Sello 23',
                    'name' => 'Sello 23',
                    'author' => 'Antón Lamazares',
                    'image_work' => '/images/works/Sellos.jpg',
                    'type' => 'Técnica mixta sobre cartón-madera',
                    'dimensions' => '130 x 176 cm',
                    'year' => '1987',
                    'button_link1' => '/works/Recorrido',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Sin-Título3',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Sin-Título3':
                $workData = [
                    'title' => 'Sin Título',
                    'name' => 'Sin Título',
                    'author' => 'Silveiro Rivas',
                    'image_work' => '/images/works/Sin.jpg',
                    'type' => 'Bronce',
                    'dimensions' => '37 x 9 x 9 cm',
                    'year' => '1991',
                    'button_link1' => '/works/Sello23',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Sin-Título4',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Sin-Título4':
                $workData = [
                    'title' => 'Sin Título',
                    'name' => 'Sin Título',
                    'author' => 'Jorge Barbi',
                    'image_work' => '/images/works/sin1.jpg',
                    'type' => 'Fotografía sobre aluminio',
                    'dimensions' => '70 x 50 cm',
                    'year' => '2001',
                    'button_link1' => '/works/Sin-Título3',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Sin-Título5',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Sin-Título5':
                $workData = [
                    'title' => 'Sin Título',
                    'name' => 'Sin Título',
                    'author' => 'Jorge Barbi',
                    'image_work' => '/images/works/sin2.jpg',
                    'type' => 'Fotografía sobre aluminio',
                    'dimensions' => '70 x 100 cm',
                    'year' => '2001',
                    'button_link1' => '/works/Sin-Título4',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Sin-Título6',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Sin-Título6':
                $workData = [
                    'title' => 'Sin Título',
                    'name' => 'Sin Título',
                    'author' => 'Jorge Barbi',
                    'image_work' => '/images/works/sin3.jpg',
                    'type' => 'Fotografía sobre aluminio',
                    'dimensions' => '70 x 50 cm',
                    'year' => '2001',
                    'button_link1' => '/works/Sin-Título5',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Sin-Título7',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Sin-Título7':
                $workData = [
                    'title' => 'Sin Título',
                    'name' => 'Sin Título',
                    'author' => 'Alfonso Costa',
                    'image_work' => '/images/works/sintituo.jpg',
                    'type' => 'Óleo sobre lienzo',
                    'dimensions' => '82 x 65 cm',
                    'year' => '2005',
                    'button_link1' => '/works/Sin-Título6',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Soledad',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Soledad':
                $workData = [
                    'title' => 'Soledad',
                    'name' => 'Soledad',
                    'author' => 'Ramón Conde',
                    'image_work' => '/images/works/Soledad.jpg',
                    'type' => 'Bronce',
                    'dimensions' => '21 x 30 x 25 cm',
                    'year' => '2018',
                    'button_link1' => '/works/Sin-Título7',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/ST',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'ST':
                $workData = [
                    'title' => 'S/T',
                    'name' => 'S/T',
                    'author' => 'Antón Patiño',
                    'image_work' => '/images/works/ST.jpg',
                    'type' => 'Pintura sobre tela',
                    'dimensions' => '195 x 162 cm',
                    'year' => '1985',
                    'button_link1' => '/works/Soledad',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/st',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'st':
                $workData = [
                    'title' => 'S/T',
                    'name' => 'S/T',
                    'author' => 'Pilar Alonso',
                    'image_work' => '/images/works/st.png',
                    'type' => 'Carbón sobre papel aguado',
                    'dimensions' => '200 x 200 cm',
                    'year' => '2008',
                    'button_link1' => '/works/ST',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Sufrido',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Sufrido':
                $workData = [
                    'title' => 'Sufrido',
                    'name' => 'Sufrido',
                    'author' => 'Antón Lamazares',
                    'image_work' => '/images/works/Sufrido.jpg',
                    'type' => 'Óleo y barniz sobre cartón adherido a tabla',
                    'dimensions' => '70 x 50 cm',
                    'year' => '1985',
                    'button_link1' => '/works/st',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Suplementos',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Suplementos':
                $workData = [
                    'title' => 'Suplementos',
                    'name' => 'Suplementos',
                    'author' => 'Sandra Carvalho',
                    'image_work' => '/images/works/Suplemento.jpg',
                    'type' => 'Acuarela sobre papel',
                    'dimensions' => '40,5 x 59,5 cm',
                    'year' => '2020',
                    'button_link1' => '/works/Sufrido',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/Venecia',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            case 'Venecia':
                $workData = [
                    'title' => 'Venecia',
                    'name' => 'Venecia',
                    'author' => 'Antón Sobral',
                    'image_work' => '/images/works/Venecia.jpg',
                    'type' => 'Óleo sobre lienzo',
                    'dimensions' => '74 x 92 cm',
                    'year' => '1999',
                    'button_link1' => '/works/Suplementos',
                    'button_text1' => 'ver anterior',
                    'button_link2' => '/works/A-Chambra-Branca',
                    'button_text2' => 'ver siguiente',
                    'button_link_works' => '/works',
                    'button_text_works' => 'ir a obras',
                ];
                break;
            default:
                return redirect()->to('/works');
        }

        echo view('work', $workData);
    }
}
