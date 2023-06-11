<?php
$data = array(
	"name" => "Archer456",
	"lvl" => "12"
);
header('Content-Type: application/json');
echo json_encode($data);
?>