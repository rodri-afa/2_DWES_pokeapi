# Leer datos de la Pokeapi

1. Generar 4 números aleatorios entre 1 y 900.
1. Hacer 4 llamadas a la pokeapi a la siguiente url: `https://pokeapi.co/api/v2/pokemon/${id}` donde `${id}` hay que sustituirlo por cada número aleatorio generado.
1. Almacenar cada llamada en una variable y a su vez generar un array de pokemons.
1. Iterar sobre el array de pokemons y crear 4 cartas pokemon con:
   - Foto
   - Nombre del pokemon
   - Tipos -> con letras y el fondo de la carta (rojo si es tipo fuego, amarillo, azul o verde)
   - HP(stats)
   - Ataques (abilities)
