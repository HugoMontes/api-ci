<?php 
namespace App\Models;
use CodeIgniter\Model;

class EmpleadoModel extends Model
{
    protected $table = 'empleados';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'email'];
}