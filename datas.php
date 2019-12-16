<?php

/*

-> referências:

https://www.php.net/manual/pt_BR/function.date.php
https://www.php.net/manual/pt_BR/class.datetime.php
https://www.php.net/manual/pt_BR/class.dateinterval.php

*/

// método date

var_dump(date('d/m/y')); exit();

// classe datetime

/*
-> DateTime possui vários métodos, entre eles: add(), sub(), diff() e format()
*/

$data = new DateTime();
var_dump($data);

// formatando datas

$data = new DateTime();
var_dump($data->format('d/m/y'));

// trabalhando com horas, minutos e segundos

$data = new DateTime();
var_dump($data->format('h:i:s'));

// manipulando datas e horas

/*
-> P   representação de período: vem antes de dia, mês, ano e semana
Y   anos
M   meses
D   dias
W   semanas
-> T   representação de tempo: vem antes de hora, minuto e segundo
H   horas
M   minutos
S   segundos
*/

$data = new DateTime();

$intervalo = new DateInterval('PT5M'); // período de 5 minutos
$data->add($intervalo);

var_dump($data);

// exercício

$data = new DateTime();

$data->sub(
    new DateInterval("P1Y2M10DT30M")
);

echo $data->format('d/m/y - h:i:s');
