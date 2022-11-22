<?php

$numerosAleatorios = [1, 425, 621, 65];

$pokemons = [];

$pokemonJSON = file_get_contents("https://pokeapi.co/api/v2/pokemon/120");

$pokemon = json_decode($pokemonJSON, true, 512, JSON_UNESCAPED_UNICODE);
// var_dump($pokemon);

print("<pre>" . print_r($pokemon, true) . "</pre>");

echo $pokemon['name'];
