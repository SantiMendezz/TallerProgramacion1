<?php
namespace App\Controllers;
Use App\Models\Usuarios_model;
use CodeIgniter\Controller;
//Este vendria a ser el archivo Register.php
class Usuario_controller extends Controller{

	public function __construct(){
           helper(['form', 'url']);

	}
   
    public function create() {
         $data['titulo']='Registro'; 
        echo view('head_view',$data);
        echo view('nav_view');
         echo view('back/registrarse');
          echo view('footer_view');
     
    }
 
    public function formValidation() {
          helper(['form', 'url']);
        
        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'usuario'  => 'required|min_length[3]',
            'password'     => 'required|min_length[6]|max_length[200]'
        ]);
        $formModel = new Usuarios_model();
 
        if (!$input) {
               $data['titulo']='Registro'; 
                echo view('head_view',$data);
                echo view('nav_view');
                echo view('back/registrarse', [
                'validation' => $this->validator
            ]);
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email'  => $this->request->getVar('email'),
                'usuario' => $this->request->getVar('usuario'),
                'password'  => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT)
            ]);  
                //Si el formulario es llenado correctamente se redirecciona a esa pagina
              return $this->response->redirect(site_url(''));
        }
    }

    //Insertar para el dashboard
    public function insertar() {
        //$userModel = new Usuarios_Model();
        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'usuario'  => 'required|min_length[3]',
            'password'     => 'required|min_length[3]|max_length[10]'
        ]);
        $userModel = new Usuarios_model();
        if (!$input) {
               $data['titulo']='Modificacion';
                echo view('back/dashboard_head_view',$data);
                echo view('nav_view');
                echo view('back/dashboard_ingreso', [
                'validation' => $this->validator
            ]);
                echo view('back/footer_dash');
        } else {
        $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email'  => $this->request->getVar('email'),
                'usuario' => $this->request->getVar('usuario'),
                'password' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
              //  'password'  => $this->request->getVar('pass'),
            ];
             $userModel->insert($data);
             return $this->response->redirect(site_url('dashboard'));
        }
   }
}
