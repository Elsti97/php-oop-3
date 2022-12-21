<?php

include_once __DIR__ . '/classes/generi.php';
include_once __DIR__ . '/classes/libro.php';
include_once __DIR__ . '/classes/audiolibro.php';
include_once __DIR__ . '/classes/impiegato.php';

$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror')
];
var_dump( $generi );

$prodotti = [
  new Libro( 'La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile', 1998 ),
  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),
];

var_dump( $prodotti );

$impiegato = new Impiegato('Marco', 'Rossi', 3);

// var_dump($impiegato);

$impiegato->anno = 2002;

var_dump($impiegato);

$impiegato->getString();

// foreach( $prodotti as $elem ){
//   echo get_class($elem);
//   echo "<br>";
// }
?>