<?php 


$json = '[{"nome":"Jo\u00e3o","idade":28},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json);

var_dump($data);
 ?>