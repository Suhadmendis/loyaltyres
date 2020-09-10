<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class PointModel extends Model
{
    protected $table = 'point';
 
    protected $allowedFields = ['points','user_ref'];
}
?>