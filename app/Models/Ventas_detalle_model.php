<?php
namespace App\Models;
use CodeIgniter\Model;
class Ventas_detalle_model extends Model
{
	protected $table = 'ventas_detalle';
    protected $primaryKey = 'id';
    protected $allowedFields = ['venta_id', 'producto_id', 'cantidad', 'precio', 'total'];
}