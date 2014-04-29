<?php `sudo git pull`;

$response = 'Pulled!';
header('Content-Type: application/json');
echo json_encode($response);

?>