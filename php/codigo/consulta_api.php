<?php


$url_api="https://datos.gob.es/apidata/catalog/dataset.json";


$json=file_get_contents($url_api);
$data=json_decode($json);


foreach($data->result->items as $item){

  print "<li>".$item->title[0]->_value."</li>";
}
