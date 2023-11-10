<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obras</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/assets/favicon.ico'); ?>">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/works.css">
</head>

<body>
    <div class="intro">
        <div class="line"></div>
        <h1 class="intro-header">
            <span class="text">O</span><span class="text">B</span><span class="text">R</span><span class="text">A</span><span class="text">S</span>
        </h1>
        <div class="line"></div>
    </div>
    <header>
        <?= view('partials/header.php') ?>
    </header>
    <div id="custom-cursor"></div>

    <form id="filter-form">
        <select id="artist-select">
            <option value="All">Todos los artistas</option>
            <option value="Alfonso Costa">Alfonso Costa</option>
            <option value="Ánxel Huete">Ánxel Huete</option>
            <option value="Antonio Murado">Antonio Murado</option>
            <option value="Antón Lamazares">Antón Lamazares</option>
            <option value="Antón Patiño">Antón Patiño</option>
            <option value="Antón Pulido">Antón Pulido</option>
            <option value="Antón Sobral">Antón Sobral</option>
            <option value="Aramburu">Aramburu</option>
            <option value="Carlos Alcolea">Carlos Alcolea</option>
            <option value="Deside">Deside</option>
            <option value="Eloy Hernández">Eloy Hernández</option>
            <option value="Jorge Barbi">Jorge Barbi</option>
            <option value="Jorge Castillo">Jorge Castillo</option>
            <option value="Lugrís Vadillo">Lugrís Vadillo</option>
            <option value="Mar Hernández">Mar Hernández</option>
            <option value="Nacho Costa">Nacho Costa</option>
            <option value="Pilar Alonso">Pilar Alonso</option>
            <option value="Ramón Conde">Ramón Conde</option>
            <option value="Sandra Carvalho">Sandra Carvalho</option>
            <option value="Seoane">Seoane</option>
            <option value="Silveiro Rivas">Silveiro Rivas</option>
        </select>
        <select id="type-select">
            <option value="All">Todos los tipos</option>
            <option value="Pintura">Pintura</option>
            <option value="Escultura">Escultura</option>
        </select>
    </form>

    <div class="works">
        <div class="card" data-artist="Seoane" data-type="Pintura">
            <a href="/works/A-Chambra-Branca">
                <div class="artwork">
                    <img src="/images/works/A-Chambra-Branca.jpg" alt="A Chambra Branca">
                </div>
                <div class="artwork-info">
                    <h2>A Chambra Branca</h2>
                    <p>Seoane</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Oro Claro" data-type="Pintura">
            <a href="/works/A-Ría">
                <div class="artwork">
                    <img src="/images/works/A-Ria.jpg" alt="A Ría">
                </div>
                <div class="artwork-info">
                    <h2>A Ría</h2>
                    <p>Nacho Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Pulido" data-type="Pintura">
            <a href="/works/Abismo-I">
                <div class="artwork">
                    <img src="/images/works/Abismo.jpg" alt="Abismo I">
                </div>
                <div class="artwork-info">
                    <h2>Abismo I</h2>
                    <p>Antón Pulido</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Alfonso Costa" data-type="Pintura">
            <a href="/works/Anónimo">
                <div class="artwork">
                    <img src="/images/works/Anonimo.jpg" alt="Anónimo">
                </div>
                <div class="artwork-info">
                    <h2>Anónimo</h2>
                    <p>Alfonso Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Jorge Castillo" data-type="Pintura">
            <a href="/works/Arlequín">
                <div class="artwork">
                    <img src="/images/works/Arlequin.jpg" alt="Arlequín">
                </div>
                <div class="artwork-info">
                    <h2>Arlequín</h2>
                    <p>Jorge Castillo</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Eloy Hernández" data-type="Pintura">
            <a href="/works/Barcos-Al-Atardecer">
                <div class="artwork">
                    <img src="/images/works/Barcos.jpg" alt="Barcos Al Atardecer">
                </div>
                <div class="artwork-info">
                    <h2>Barcos Al Atardecer</h2>
                    <p>Eloy Hernández</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Ramón Conde" data-type="Escultura">
            <a href="/works/Bisonte">
                <div class="artwork">
                    <img src="/images/works/Bisonte.jpg" alt="Bisonte">
                </div>
                <div class="artwork-info">
                    <h2>Bisonte</h2>
                    <p>Ramón Conde</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Carlos Alcolea" data-type="Pintura">
            <a href="/works/Borracho">
                <div class="artwork">
                    <img src="/images/works/Borracho.jpg" alt="Borracho">
                </div>
                <div class="artwork-info">
                    <h2>Borracho</h2>
                    <p>Carlos Alcolea</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Ánxel Huete" data-type="Pintura">
            <a href="/works/Cajas">
                <div class="artwork">
                    <img src="/images/works/Cajas.jpg" alt="Cajas">
                </div>
                <div class="artwork-info">
                    <h2>Cajas</h2>
                    <p>Ánxel Huete</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Pulido" data-type="Pintura">
            <a href="/works/Camiño-Vermello">
                <div class="artwork">
                    <img src="/images/works/Camiño-Vermello.jpg" alt="Camiño Vermello">
                </div>
                <div class="artwork-info">
                    <h2>Camiño Vermello</h2>
                    <p>Antón Pulido</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Aramburu" data-type="Pintura">
            <a href="/works/Chatarra">
                <div class="artwork">
                    <img src="/images/works/Chatarra.jpg" alt="Chatarra">
                </div>
                <div class="artwork-info">
                    <h2>Chatarra</h2>
                    <p>Aramburu</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Patiño" data-type="Pintura">
            <a href="/works/Ciclista">
                <div class="artwork">
                    <img src="/images/works/Ciclistas.jpg" alt="Ciclistas">
                </div>
                <div class="artwork-info">
                    <h2>Ciclistas</h2>
                    <p>Antón Patiño</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Desides" data-type="Pintura">
            <a href="/works/Composicion-Abstracta1">
                <div class="artwork">
                    <img src="/images/works/Composicion-Abstracta.jpg" alt="Composición Abstracta">
                </div>
                <div class="artwork-info">
                    <h2>Composición Abstracta</h2>
                    <p>Deside</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Desides" data-type="Pintura">
            <a href="/works/Composicion-Abstracta2">
                <div class="artwork">
                    <img src="/images/works/Composicion.jpg" alt="Composición Abstracta">
                </div>
                <div class="artwork-info">
                    <h2>Composición Abstracta</h2>
                    <p>Deside</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Alfonso Costa" data-type="Pintura">
            <a href="/works/Contemplando-La-Batalla">
                <div class="artwork">
                    <img src="/images/works/Contemplando-La-Batalla.jpg" alt="Contemplando La Batalla">
                </div>
                <div class="artwork-info">
                    <h2>Contemplando La Batalla</h2>
                    <p>Alfonso Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Ramón Conde" data-type="Escultura">
            <a href="/works/Desafío">
                <div class="artwork">
                    <img src="/images/works/Desafio.jpg" alt="Desafío">
                </div>
                <div class="artwork-info">
                    <h2>Desafío</h2>
                    <p>Ramón Conde</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Alfonso Costa" data-type="Pintura">
            <a href="/works/Deconstrucción">
                <div class="artwork">
                    <img src="/images/works/Deconstruccion.jpg" alt="Deconstrucción">
                </div>
                <div class="artwork-info">
                    <h2>Deconstrucción</h2>
                    <p>Alfonso Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Pulido" data-type="Pintura">
            <a href="/works/Durmindo-Nas-Olas">
                <div class="artwork">
                    <img src="/images/works/Durmindo-Nas-Olas.png" alt="Durmindo Nas Olas">
                </div>
                <div class="artwork-info">
                    <h2>Durmindo Nas Olas</h2>
                    <p>Antón Pulido</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Lugrís Vadillo" data-type="Pintura">
            <a href="/works/El-Peregrino">
                <div class="artwork">
                    <img src="/images/works/El-Peregrino.jpg" alt="El Peregrino">
                </div>
                <div class="artwork-info">
                    <h2>El Peregrino</h2>
                    <p>Lugrís Vadillo</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Alfonso Costa" data-type="Pintura">
            <a href="/works/Entropía">
                <div class="artwork">
                    <img src="/images/works/Entropia.jpg" alt="Entropía">
                </div>
                <div class="artwork-info">
                    <h2>Entropía</h2>
                    <p>Alfonso Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Patiño" data-type="Pintura">
            <a href="/works/Escrita-Das-Árbores">
                <div class="artwork">
                    <img src="/images/works/Escrita-Das-Arbores.jpg" alt="Escrita Das Árbores">
                </div>
                <div class="artwork-info">
                    <h2>Escrita Das Árbores</h2>
                    <p>Antón Patiño</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Patiño" data-type="Pintura">
            <a href="/works/Espazo-Ingrávido">
                <div class="artwork">
                    <img src="/images/works/Espazo.jpg" alt="Espazo Ingrávido">
                </div>
                <div class="artwork-info">
                    <h2>Espazo Ingrávido</h2>
                    <p>Antón Patiño</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Alfonso Costa" data-type="Pintura">
            <a href="/works/Espello-De-Papel">
                <div class="artwork">
                    <img src="/images/works/Espello-de-Papel.jpg" alt="Espello De Papel">
                </div>
                <div class="artwork-info">
                    <h2>Espello De Papel</h2>
                    <p>Alfonso Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Sobral" data-type="Pintura">
            <a href="/works/A-Mar-Espello">
                <div class="artwork">
                    <img src="/images/works/Espello.jpg" alt="A Mar Espello">
                </div>
                <div class="artwork-info">
                    <h2>A Mar Espello</h2>
                    <p>Antón Sobral</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Jorge Castillo" data-type="Pintura">
            <a href="/works/Familia-Americana">
                <div class="artwork">
                    <img src="/images/works/Familia.jpg" alt="Familia Americana">
                </div>
                <div class="artwork-info">
                    <h2>Familia Americana</h2>
                    <p>Jorge Castillo</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Alfonso Costa" data-type="Pintura">
            <a href="/works/Felino">
                <div class="artwork">
                    <img src="/images/works/Felino.jpg" alt="Felino">
                </div>
                <div class="artwork-info">
                    <h2>Felino</h2>
                    <p>Alfonso Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Sandra Carvalho" data-type="Pintura">
            <a href="/works/Fósiles">
                <div class="artwork">
                    <img src="/images/works/Fosiles.jpg" alt="Fósiles">
                </div>
                <div class="artwork-info">
                    <h2>Fósiles</h2>
                    <p>Sandra Carvalho</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Jorge Barbi" data-type="Escultura">
            <a href="/works/Hibernáculo">
                <div class="artwork">
                    <img src="/images/works/Hibernaculo.jpg" alt="Hibernáculo">
                </div>
                <div class="artwork-info">
                    <h2>Hibernáculo</h2>
                    <p>Jorge Barbi</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Aramburu" data-type="Pintura">
            <a href="/works/Hierros">
                <div class="artwork">
                    <img src="/images/works/Hierros.jpeg" alt="Hierros">
                </div>
                <div class="artwork-info">
                    <h2>Hierros</h2>
                    <p>Aramburu</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Alfonso Costa" data-type="Pintura">
            <a href="/works/Historia">
                <div class="artwork">
                    <img src="/images/works/Historia.jpg" alt="Historia">
                </div>
                <div class="artwork-info">
                    <h2>Historia</h2>
                    <p>Alfonso Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Alfonso Costa" data-type="Pintura">
            <a href="/works/Interea">
                <div class="artwork">
                    <img src="/images/works/Interea.jpg" alt="Interea">
                </div>
                <div class="artwork-info">
                    <h2>Interea</h2>
                    <p>Alfonso Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Alfonso Costa" data-type="Pintura">
            <a href="/works/Islas-Cíes">
                <div class="artwork">
                    <img src="/images/works/Islas-cies.jpg" alt="Islas Cíes">
                </div>
                <div class="artwork-info">
                    <h2>Islas Cíes</h2>
                    <p>Alfonso Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Patiño" data-type="Pintura">
            <a href="/works/La-Palmera">
                <div class="artwork">
                    <img src="/images/works/La-Palmera.png" alt="La Palmera">
                </div>
                <div class="artwork-info">
                    <h2>La Palmera</h2>
                    <p>Antón Patiño</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Alfonso Costa" data-type="Pintura">
            <a href="/works/La-Sagrada-Familia">
                <div class="artwork">
                    <img src="/images/works/La-Sagrada-Familia.jpg" alt="La Sagrada Familia">
                </div>
                <div class="artwork-info">
                    <h2>La Sagrada Familia</h2>
                    <p>Alfonso Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Alfonso Costa" data-type="Pintura">
            <a href="/works/Levitando">
                <div class="artwork">
                    <img src="/images/works/Levitando.jpg" alt="Levitando">
                </div>
                <div class="artwork-info">
                    <h2>Levitando</h2>
                    <p>Alfonso Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Ramón Conde" data-type="Escultura">
            <a href="/works/Loco-Por-Los-Libros">
                <div class="artwork">
                    <img src="/images/works/Loco.jpg" alt="Loco Por Los Libros">
                </div>
                <div class="artwork-info">
                    <h2>Loco Por Los Libros</h2>
                    <p>Ramón Conde</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Ramón Conde" data-type="Escultura">
            <a href="/works/Maternidad1">
                <div class="artwork">
                    <img src="/images/works/Maternidad.jpg" alt="Maternidad">
                </div>
                <div class="artwork-info">
                    <h2>Maternidad</h2>
                    <p>Ramón Conde</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Ramón Conde" data-type="Escultura">
            <a href="/works/Maternidad2">
                <div class="artwork">
                    <img src="/images/works/Maternidade.jpg" alt="Maternidad">
                </div>
                <div class="artwork-info">
                    <h2>Maternidad</h2>
                    <p>Ramón Conde</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Jorge Castillo" data-type="Pintura">
            <a href="/works/Mesa-Quebrada">
                <div class="artwork">
                    <img src="/images/works/Mesa.jpg" alt="Mesa Quebrada">
                </div>
                <div class="artwork-info">
                    <h2>Mesa Quebrada</h2>
                    <p>Jorge Castillo</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Pulido" data-type="Pintura">
            <a href="/works/Muller-III">
                <div class="artwork">
                    <img src="/images/works/Muller.jpg" alt="Muller III">
                </div>
                <div class="artwork-info">
                    <h2>Muller III</h2>
                    <p>Antón Pulido</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Alfonso Costa" data-type="Pintura">
            <a href="/works/Nas-Marxes">
                <div class="artwork">
                    <img src="/images/works/Nas-Marxes.jpg" alt="Nas Marxes">
                </div>
                <div class="artwork-info">
                    <h2>Nas Marxes</h2>
                    <p>Alfonso Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Jorge Castillo" data-type="Pintura">
            <a href="/works/New-York">
                <div class="artwork">
                    <img src="/images/works/New-York.jpg" alt="New York">
                </div>
                <div class="artwork-info">
                    <h2>New York</h2>
                    <p>Jorge Castillo</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Jorge Barbi" data-type="Escultura">
            <a href="/works/Sin-Título1">
                <div class="artwork">
                    <img src="/images/works/no.jpg" alt="Sin Título">
                </div>
                <div class="artwork-info">
                    <h2>Sin Título</h2>
                    <p>Jorge Barbi</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Carlos Alcolea" data-type="Pintura">
            <a href="/works/Sin-Título2">
                <div class="artwork">
                    <img src="/images/works/notitulo.jpg" alt="Sin Título">
                </div>
                <div class="artwork-info">
                    <h2>Sin Título</h2>
                    <p>Carlos Alcolea</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Sobral" data-type="Pintura">
            <a href="/works/Serie-Océano">
                <div class="artwork">
                    <img src="/images/works/oceano.png" alt="Serie Océano">
                </div>
                <div class="artwork-info">
                    <h2>Serie Océano</h2>
                    <p>Antón Sobral</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antonio Murado" data-type="Pintura">
            <a href="/works/PáginaN2">
                <div class="artwork">
                    <img src="/images/works/Pagina.jpg" alt="Pagina Nº2">
                </div>
                <div class="artwork-info">
                    <h2>Pagina Nº2</h2>
                    <p>Antonio Murado</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antonio Murado" data-type="Pintura">
            <a href="/works/Paisaje-Arenoso">
                <div class="artwork">
                    <img src="/images/works/Paisaje-Arenoso.jpg" alt="Paisaje Arenoso">
                </div>
                <div class="artwork-info">
                    <h2>Paisaje Arenoso</h2>
                    <p>Antonio Murado</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Jorge Castillo" data-type="Pintura">
            <a href="/works/Pájaros-Sobre-Hojas">
                <div class="artwork">
                    <img src="/images/works/Pajaros.jpg" alt="Pájaros Sobre Hojas">
                </div>
                <div class="artwork-info">
                    <h2>Pájaros Sobre Hojas</h2>
                    <p>Jorge Castillo</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Mar Hernández" data-type="Pintura">
            <a href="/works/Papelería-Compostela">
                <div class="artwork">
                    <img src="/images/works/Papeleria.jpg" alt="Papelería Compostela">
                </div>
                <div class="artwork-info">
                    <h2>Papelería Compostela</h2>
                    <p>Mar Hernández</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Sandra Carvalho" data-type="Pintura">
            <a href="/works/Papeles-Encontrados">
                <div class="artwork">
                    <img src="/images/works/Papeles.jpg" alt="Papeles Encontrados">
                </div>
                <div class="artwork-info">
                    <h2>Papeles Encontrados</h2>
                    <p>Sandra Carvalho</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Lamazares" data-type="Pintura">
            <a href="/works/Perdices">
                <div class="artwork">
                    <img src="/images/works/Perdices.jpg" alt="Perdices">
                </div>
                <div class="artwork-info">
                    <h2>Perdices</h2>
                    <p>Antón Lamazares</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="jorge Castillo" data-type="Pintura">
            <a href="/works/Personajes-Y-Aves">
                <div class="artwork">
                    <img src="/images/works/Personajes.jpg" alt="Personajes Y Aves">
                </div>
                <div class="artwork-info">
                    <h2>Personajes Y Aves</h2>
                    <p>Jorge Castillo</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Salveiro Rivas" data-type="Escultura">
            <a href="/works/Personaxes-De-Millet">
                <div class="artwork">
                    <img src="/images/works/Personaxes-De-Millet.jpg" alt="Personaxes De Millet">
                </div>
                <div class="artwork-info">
                    <h2>Personaxes De Millet</h2>
                    <p>Salveiro Rivas</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Patiño" data-type="Pintura">
            <a href="/works/Pesanervios">
                <div class="artwork">
                    <img src="/images/works/Pesanervios.jpg" alt="Pesanervios">
                </div>
                <div class="artwork-info">
                    <h2>Pesanervios</h2>
                    <p>Antón Patiño</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Ramón Conde" data-type="Escultura">
            <a href="/works/Peternidad">
                <div class="artwork">
                    <img src="/images/works/Petenidad.jpg" alt="Paternidad">
                </div>
                <div class="artwork-info">
                    <h2>Paternidad</h2>
                    <p>Ramón Conde</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Carlos Alcolea" data-type="Pintura">
            <a href="/works/Piscina-B">
                <div class="artwork">
                    <img src="/images/works/PiscinaB.jpg" alt="Piscina B">
                </div>
                <div class="artwork-info">
                    <h2>Piscina B</h2>
                    <p>Carlos Alcolea</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Sobral" data-type="Pintura">
            <a href="/works/Puesta-De-Sol">
                <div class="artwork">
                    <img src="/images/works/Puesta.jpg" alt="Puesta De Sol">
                </div>
                <div class="artwork-info">
                    <h2>Puesta De Sol</h2>
                    <p>Antón Sobral</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Patiño" data-type="Pintura">
            <a href="/works/Recorrido">
                <div class="artwork">
                    <img src="/images/works/Recorrido.jpg" alt="Recorrido">
                </div>
                <div class="artwork-info">
                    <h2>Recorrido</h2>
                    <p>Antón Patiño</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Lamazares" data-type="Pintura">
            <a href="/works/Sello23">
                <div class="artwork">
                    <img src="/images/works/Sellos.jpg" alt="Sello 23">
                </div>
                <div class="artwork-info">
                    <h2>Sello 23</h2>
                    <p>Antón Lamazares</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Silveiro Rivas" data-type="Escultura">
            <a href="/works/Sin-Título3">
                <div class="artwork">
                    <img src="/images/works/Sin.jpg" alt="Sin Título">
                </div>
                <div class="artwork-info">
                    <h2>Sin Título</h2>
                    <p>Silveiro Rivas</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Jorge Barbi" data-type="Escultura">
            <a href="/works/Sin-Título4">
                <div class="artwork">
                    <img src="/images/works/sin1.jpg" alt="Sin Título">
                </div>
                <div class="artwork-info">
                    <h2>Sin Título</h2>
                    <p>Jorge Barbi</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Jorge Barbi" data-type="Escultura">
            <a href="/works/Sin-Título5">
                <div class="artwork">
                    <img src="/images/works/sin2.jpg" alt="Sin Título">
                </div>
                <div class="artwork-info">
                    <h2>Sin Título</h2>
                    <p>Jorge Barbi</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Jorge Barbi" data-type="Escultura">
            <a href="/works/Sin-Título6">
                <div class="artwork">
                    <img src="/images/works/sin3.jpg" alt="Sin Título">
                </div>
                <div class="artwork-info">
                    <h2>Sin Título</h2>
                    <p>Jorge Barbi</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Alfonso Costa" data-type="Pintura">
            <a href="/works/Sin-Título7">
                <div class="artwork">
                    <img src="/images/works/sintituo.jpg" alt="Sin Título">
                </div>
                <div class="artwork-info">
                    <h2>Sin Título</h2>
                    <p>Alfonso Costa</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Ramón Conde" data-type="Soledad">
            <a href="/works/Soledad">
                <div class="artwork">
                    <img src="/images/works/Soledad.jpg" alt="Soledad">
                </div>
                <div class="artwork-info">
                    <h2>Soledad</h2>
                    <p>Ramón Conde</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Patiño" data-type="Pintura">
            <a href="/works/ST">
                <div class="artwork">
                    <img src="/images/works/ST.jpg" alt="Sin Título">
                </div>
                <div class="artwork-info">
                    <h2>Sin Título</h2>
                    <p>Antón Patiño</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Pilar Alonso" data-type="Pintura">
            <a href="/works/st">
                <div class="artwork">
                    <img src="/images/works/st.png" alt="Sin Título">
                </div>
                <div class="artwork-info">
                    <h2>Sin Título</h2>
                    <p>Pilar Alonso</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Lamazares" data-type="Pintura">
            <a href="/works/Sufrido">
                <div class="artwork">
                    <img src="/images/works/Sufrido.jpg" alt="Sufrido">
                </div>
                <div class="artwork-info">
                    <h2>Sufrido</h2>
                    <p>Antón Lamazares</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Sandra Carvalho" data-type="Pintura">
            <a href="/works/Suplementos">
                <div class="artwork">
                    <img src="/images/works/Suplemento.jpg" alt="Suplemento">
                </div>
                <div class="artwork-info">
                    <h2>Suplemento</h2>
                    <p>Sandra Carvalho</p>
                </div>
            </a>
        </div>
        <div class="card" data-artist="Antón Sobral" data-type="Pintura">
            <a href="/works/Venecia">
                <div class="artwork">
                    <img src="/images/works/Venecia.jpg" alt="Venecia">
                </div>
                <div class="artwork-info">
                    <h2>Venecia</h2>
                    <p>Antón Sobral</p>
                </div>
            </a>
        </div>

    </div>

    <div class="pagination">
    </div>

    <footer>
        <?= view('partials/footer.php') ?>
    </footer>

    <script type="module" src="/js/works.js"></script>
    <script type="module" src="/js/common.js"></script>
</body>

</html>