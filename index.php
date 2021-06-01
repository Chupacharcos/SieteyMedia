<?php


/**
 * Importamos la clase 'Juego', la cual contiene todos los métodos usados por el programa.
 */
require_once "Juego.php";
$juego = new Juego();
$jugador = $juego->obtenerNombre();

do {
    echo "\nBienvenido " . $jugador . "\n";
    $puntosJg = $juego->jugar($jugador, $juego->cargarBaraja($jugador, true));
    $puntosIA = $juego->jugarIA("Banca", $juego->cargarBaraja("Banca", false), $puntosJg);
    echo $juego->comprobarGanador($puntosJg, $puntosIA, $jugador);
    do {
        echo "\n¿Desea Repetir o Abandonar el juego? (r/a): ";
        $entrada = strtolower(trim(fgets(STDIN)));
    } while ($entrada != 'r' && $entrada != 'a');
} while ($entrada == 'r');

echo "\nHasta Pronto\n";