<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class PointModel extends Model
{
    protected $table = 'ponit';
 
    protected $allowedFields = ['ponits','user_ref'];
}
?>