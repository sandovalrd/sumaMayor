Problema:
Dado un arreglo con enteros (positivos y negativos), encuentre la secuencia de números continuos que den la suma más grande. Retorne la suma.

Ejemplo 1
input: [-1, 2, 8, -5]
output: 10
Explicación: La mayor suma se logra con la secuencia de números continuos [2, 8]. Tomar -1 o -5 empeoraría la suma.

Ejemplo 2
input: [1, -3, 2, 1]
output: 3
Explicación: La mayor suma se logra con la secuencia de números continuos [2, 1]. No tiene sentido tomar el -3 y el primer 1, pues empeoraría la suma.

Ejemplo 3
input: [5, -2, 5]
output: 8
Explicación: La mayor suma se logra con la secuencia de números continuos [5, -2, 5]. Aquí tiene sentido tomar el -2 dentro de la secuencia, y así agregar el 5 a la suma.
