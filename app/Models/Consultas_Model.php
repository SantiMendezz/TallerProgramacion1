<?php
namespace App\Models;
use CodeIgniter\Model;
class Consultas_Model extends Model
{
	protected $table = 'consultas';
    protected $primaryKey = 'id_contacto';
    protected $allowedFields = ['nya', 'telefono', 'email', 'mensaje'];
}