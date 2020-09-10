<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class API extends CI_Controller {
function __construct(){
parent::__construct();
// load the employee model
$this->load->model('RestService');
}
public function index()
{
$this->load->view('restview');

//$this->load->view(‘restview');

}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */


?>