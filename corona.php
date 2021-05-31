<?php
$data =file_get_contents('https://coronavirus-19-api.herokuapp.com/countries');
$coronadata =json_decode($data);
echo "<pre>" ;
print_r($coronadata);

?>

