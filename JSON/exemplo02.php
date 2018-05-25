<?php

$json = '[{"nome":"Rafael","idade":3},{"nome":"Sandro","idade":44}]';

$data = json_decode($json, true);

var_dump($data);

?>