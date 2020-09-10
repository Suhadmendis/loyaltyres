<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class TeacherModel extends Model
{
    protected $table = 'teacher';
 
    protected $allowedFields = ['name','address','tel'];
}
?>