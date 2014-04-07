<link rel='stylesheet' href='ivory.css' />
<?php

include('get_data_from_csv.php');

$uploaded_file = $_FILES["archivo"];

list($csv_headers,$row_data) = getDataFromCSV::csvToArray($uploaded_file);

$tabla = getDataFromCSV::csvToTable($csv_headers,$row_data);

print_r($tabla);

?>
