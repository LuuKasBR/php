<?php

$json = 
'[{"nome":"Lucas","idade":"19"},{"nome":"Eduardo","idade":"50"}]';

//Passa JSON para Array

$data = json_decode($json, true);


var_dump($data);



?>