<?php

$data = new DateTime();

$intervalo = new DateInterval('P5DT10H50M'); // periodo de 5 min || P - período, T - time

$data->sub($intervalo);

echo $data->format('d-m-y - H:i:s');


