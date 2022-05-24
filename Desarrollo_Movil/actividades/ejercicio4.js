// Salazar Castrellón Eva Rocío 5° "A" 22/Enero/2021 Ejercicio 4

let horas_trabajadas = 45;
let pago_hora = 225.00;
let deduccion_ISR = 3; // corresponde al 0.03% (-)
let deduccion_seguro = 4; // corresponde al 0.04% (-)
let bono =  2; //corresponde al 0.02% (+)

total_pago = horas_trabajadas * pago_hora;

pago_deduccionISR = total_pago * deduccion_ISR / 100;
pago_deduccionSeguro = total_pago * deduccion_seguro / 100;

total_deducciones = total_pago - pago_deduccionISR - pago_deduccionSeguro;

pago_bono = total_pago * bono / 100;

total_pago_neto = total_deducciones + pago_bono;



console.log(total_pago_neto);


