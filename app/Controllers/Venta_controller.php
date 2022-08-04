<?php
namespace App\Controllers;
Use App\Models\Usuarios_model;
Use App\Models\Producto_model;
Use App\Models\Ventas_detalle_model; 
Use App\Models\Ventas_cabecera_model;

use CodeIgniter\Controller;
class Venta_controller extends Controller{
    public function ventas_cabecera() {
        $data['titulo'] = 'Ventas';
        echo view('back/CRUDusuario/dashboard_head_view',$data);
		echo view('back/navs/venta_nav_view');
		echo view('back/Venta/venta_cabecera_list');
		echo view('back/footer_dash');
    }
    public function ventas_detalle() {
        $data['titulo'] = 'Ventas Detalle';
        echo view('back/CRUDusuario/dashboard_head_view',$data);
		echo view('back/navs/venta_nav_view');
		echo view('back/Venta/venta_detalle_list');
		echo view('back/footer_dash');
    }
}