// Salazar Castrellón Eva Rocío 5° "A" 22/Enero/2021 Ejercicio 3

let f = 50;
let vector = [0, 1];
let n;

for (let i = 0; i < f; i++) {
  n = vector[i] + vector[i + 1];
  vector.push(n);
}

console.log(vector);
