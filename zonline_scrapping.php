<?php

$url ='https://cincodias.elpais.com/mercados/materias-primas/petroleo_brent/1/';
$content = file_get_contents($url);

$pattern=('/<tr class="par">\n<th>(.*?)<\/th>\n<th>(.*?)<\/th>/');



preg_match_all($pattern,$content,$matches);
$file=fopen("jobsite.csv","w+");

print_r($matches);