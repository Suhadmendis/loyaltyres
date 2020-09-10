<?php
$data = $this->RestService->showStudents();
$json_result = json_encode($data);
echo $json_result;
?>