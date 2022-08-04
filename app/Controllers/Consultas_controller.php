<?php
namespace App\Controllers;
Use App\Models\Usuarios_model;
Use App\Models\Producto_model;
Use App\Models\Ventas_detalle_model; 
Use App\Models\Ventas_cabecera_model;
Use App\Models\Consultas_Model;

use CodeIgniter\Controller;
class Consultas_controller extends Controller{
    public function consultas_mostrar() {
        $data['titulo'] = 'Consultas';
        echo view('back/CRUDusuario/dashboard_head_view',$data);
		echo view('nav_view');
		echo view('consulta/consulta_view');
		echo view('back/footer_dash');
    }
    //Agregar consulta
    public function envio_consulta() {
		helper(['form', 'url']);
	  
	  $input = $this->validate([
		  'nya'   => 'required|min_length[5]',
		  'telefono' => 'required|min_length[8]|max_length[50]',
		  'email'    => 'required|min_length[10]|max_length[30]|valid_email',
		  'mensaje'  => 'required|min_length[10]|max_length[250]'
	  ]);
	  $formModel = new Consultas_Model();

	  if (!$input) {
        $data['titulo'] = 'Consultas';
        echo view('head_view',$data);
		echo view('nav_view');
		echo view('contactanos', [
			  'validation' => $this->validator
		  ]);
			  echo view('back/footer_dash');
	  } else {
		  $formModel->save([
			  'nya' => $this->request->getVar('nya'),
			  'telefono' => $this->request->getVar('telefono'),
			  'email'  => $this->request->getVar('email'),
			  'mensaje' => $this->request->getVar('mensaje')
		  ]);  
			  //Si el formulario es llenado correctamente se redirecciona a esa pagina
			return $this->response->redirect(site_url('contactanos'));
	  }
    }
}