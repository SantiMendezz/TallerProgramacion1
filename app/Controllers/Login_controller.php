<?php
namespace App\Controllers;
Use App\Models\Usuarios_model;
use CodeIgniter\Controller;

class Login_controller extends Controller {
    protected $helpers = [];
	protected $db;

    public function create()
    {
        $data['titulo'] = 'Iniciar Sesión';
        echo view('head_view', $data);
		echo view('nav_view');
        echo view('back/login');
    }

	public function auth(){
		$session 	= session();
		$model 		= new Usuarios_model();
		$email 		= $this->request->getVar('email');
		$password 	= $this->request->getVar('password');
		$data 		= $model->where('email', $email)->first();
		if($data){
			$pass 			= $data['password'];
			$verify_pass 	= password_verify($password, $pass);
			if($verify_pass){
				$ses_data = [
					'id'       => $data['id'],
					'nombre'     => $data['nombre'],
					'apellido'    => $data['apellido'],
					'email'    => $data['email'],
					'usuario'    => $data['usuario'],
					// 'password'    => $data['password'],
					'perfil_id'    => $data['perfil_id'],
					// 'baja'    => $data['baja'],
					'logged_in'     => TRUE
				];
				$session->set($ses_data);
				if(($data['perfil_id'] == 1) && ($data['baja'] == 'NO')) {
					return redirect()->to('/dashboard');
				} elseif(($data['perfil_id'] == 2) && ($data['baja'] == 'NO')) {
					return redirect()->to('/principal');
				} else {
					$session->setFlashdata('msg', 'Usuario no esta activo');
					return redirect()->to('/login');
				}
				
			}else{
				$session->setFlashdata('msg', 'Contrasenia incorrecta');
				return redirect()->to('/login');
			}
		}else{
			$session->setFlashdata('msg', 'Email no encontrado');
			return redirect()->to('/login');
		}
	}
 
	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to('principal');
	}
}