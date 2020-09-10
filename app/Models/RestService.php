<?php
class RestService extends CI_Model {
function __construct()
{
parent::__construct();
}

//show data

function showStudents()
{
$query = $this->db->get('students');
$result = $query->result_array();
return $result;
}
}
?>