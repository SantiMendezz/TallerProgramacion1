<?php
namespace App\Controllers;
use App\Models\Usuarios_model;
use App\Models\Producto_Model;
use CodeIgniter\Controller;

class Dashboard extends BaseController{

	//Dashboard
	public function index(){
		$session = session();

		$data['titulo'] = 'Dashboard';
		echo view('back/CRUDusuario/dashboard_head_view',$data);
		echo view('nav_view');
		echo view('back/dashboard');
		echo view('back/footer_dash');
	}

	//-------CRUD usuario-------
	public function list_usuarios(){
		$session = session();
		//echo "Welcome back, ".$session->get('user_name');

		$data['titulo'] = 'CRUD Usuario';
		echo view('back/CRUDusuario/dashboard_head_view',$data);
		echo view('back/navs/nav_view_usuarios');
		echo view('back/CRUDusuario/lista_usuarios');
		echo view('back/footer_dash');
	}
	public function ingreso(){
		$session = session();
		//echo "Welcome back, ".$session->get('user_name');

		$data['titulo'] = 'Ingreso';
		echo view('back/CRUDusuario/dashboard_head_view',$data);
		echo view('back/navs/nav_view_usuarios');
		echo view('back/CRUDusuario/dashboard_ingreso');
		echo view('back/footer_dash');
	}
	public function usuariosDeBaja(){
		$session = session();
		//echo "Welcome back, ".$session->get('user_name');

		$data['titulo'] = 'Usuarios de Baja';
		echo view('back/CRUDusuario/dashboard_head_view',$data);
		echo view('back/navs/nav_view_usuarios');
		echo view('back/CRUDusuario/dashboard_baja');
		echo view('back/footer_dash');
	}
	public function muestra_usuarios_modifica($id =null){
		$userModel = new Usuarios_Model();
		$dato['usuario'] = $userModel->where('id',$id)->first();


		$data['titulo'] = 'Modificacion de Usuario';
				echo view('back/CRUDusuario/dashboard_head_view', $data);
				echo view('back/navs/nav_view_usuarios');
				echo view('back/CRUDusuario/editar',$dato);
				echo view('back/footer_dash');
	}
	
	public function formValidationDash() {
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
			  echo view('footer_view');
	  } else {
		  $formModel->save([
			  'nombre' => $this->request->getVar('nombre'),
			  'apellido' => $this->request->getVar('apellido'),
			  'email'  => $this->request->getVar('email'),
			  'usuario' => $this->request->getVar('usuario'),
			  'password'  => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT)
		  ]);  
			  //Si el formulario es llenado correctamente se redirecciona a esa pagina
			return $this->response->redirect(site_url('ingreso'));
	  }
  }

	public function eliminar_usuario($id){
		// $id = $this->uri->segment(2);
		$Usuarios = new Usuarios_model();
		$data = array (
			'baja' => 'SI'
		);
		$Usuarios->update($id,$data);
		return $this->response->redirect(site_url('user-list'));
	}

	public function usuarios_modifica() {
		$id = $this->request->getVar('id');
		$userModel = new Usuarios_model();
		// $input = $this->validate([
        //     'nombre'   => 'required|min_length[3]',
        //     'apellido' => 'required|min_length[3]|max_length[25]',
        //     'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
        //     'usuario'  => 'required|min_length[3]',
        //     'password'     => 'required|min_length[3]|max_length[10]',
		// 	// 'perfil_id'     => 2,
		// 	// 'baja'     => 'NO'
        // ]);
        // if (!$input) {
		// 		$data['titulo'] = 'Modificacion de Usuario';
		// 		echo view('Back/dashboard_head_view', $data);
		// 		echo view('nav_view');
		// 		echo view('Back/editar', [
        //         'validation' => $this->validator
        //     ]);
        //         echo view('back/footer_dash');
        // } else {
        $data = [
				// 'id' => $id,
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email'  => $this->request->getVar('email'),
                'usuario' => $this->request->getVar('usuario'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
				'perfil_id'  => $this->request->getVar('perfil_id'),
                // 'baja' => $this->request->getVar('baja')
              //  'password'  => $this->request->getVar('pass'),
            ];
             $userModel->update($id,$data);
             return $this->response->redirect(site_url('user-list'));
        // }
	}

	public function alzar_usuario($id){
		// $id = $this->uri->segment(2);
		$Usuarios = new Usuarios_model();
		$data = array (
			'baja' => 'NO'
		);
		$Usuarios->update($id,$data);
		return $this->response->redirect(site_url('usuarios-baja'));
	}

//-----------------------------------------------------------------------------------------------------------------------------------------------------
	//------CRUD productos-------
	public function store() {
		$input = $this->validate([
			'nombre_prod' => 'required|min_length[2]',
			'categoria' => 'is_not_unique[categorias.id]',
			'precio' => 'required|numeric',
			'precio_vta' => 'required|numeric',
			'stock' => 'required|numeric',
			'stock_min' => 'required|numeric'
 		]);

		$productoModel = new Producto_Model();

		if(!$input)  {
			$dato['titulo'] = 'Alta productos';
			echo view('back/CRUDusuario/dashboard_head_view', $dato);
			echo view('back/navs/producto_nav_view');
			echo view('back/CRUDproducto/ingreso_productos', [
			'validation' => $this->validator
			]);
			echo view('footer_view');
		} else {

			$img = $this->request->getFile('imagen');
			$nombre_aleatorio = $img->getRandomName();
			$img->move(ROOTPATH.'public/assets/uploads',$nombre_aleatorio);

			$data = [
				'nombre_prod' => $this->request->getVar('nombre_prod'),
				'imagen' => $img->getName(),
				//Demas campos
				'categoria_id' => $this->request->getVar('categoria'),
				'precio' => $this->request->getVar('precio'),
				'precio_vta' => $this->request->getVar('precio_vta'),
				'stock' => $this->request->getVar('stock'),
				'stock_min' => $this->request->getVar('stock_min')
				//'eliminado' => NO
			];

			$producto = new Producto_Model();
			$producto->insert($data);

			return $this->response->redirect(site_url('producto-list'));
		}
	}
	//Productos en alta
	public function list_productos(){
		$session = session();
		//echo "Welcome back, ".$session->get('user_name');

		$data['titulo'] = 'CRUD Producto';
		echo view('back/CRUDusuario/dashboard_head_view',$data);
		echo view('back/navs/producto_nav_view');
		echo view('back/CRUDproducto/lista_productos');
		echo view('back/footer_dash');
	}
	//Vista para el ingreso de los productos
	public function ingreso_producto(){
		$session = session();
		//echo "Welcome back, ".$session->get('user_name');

		$data['titulo'] = 'Ingreso';
		echo view('back/CRUDusuario/dashboard_head_view',$data);
		echo view('back/navs/producto_nav_view');
		echo view('back/CRUDproducto/ingreso_productos');
		echo view('back/footer_dash');
	}
	//Vista de productos eliminados
	public function productosEliminados(){
		$session = session();
		//echo "Welcome back, ".$session->get('user_name');

		$data['titulo'] = 'Productos de Baja';
		echo view('back/CRUDusuario/dashboard_head_view',$data);
		echo view('back/navs/producto_nav_view');
		echo view('back/CRUDproducto/baja_producto_view');
		echo view('back/footer_dash');
	}
	//Vista para modificar productos
	public function muestra_productos_modifica($id =null){
		$productoModel = new Producto_Model();
		$dato['producto'] = $productoModel->where('id',$id)->first();


		$data['titulo'] = 'Modificacion de Producto';
				echo view('back/CRUDusuario/dashboard_head_view', $data);
				echo view('back/navs/producto_nav_view');
				echo view('back/CRUDproducto/editar_productos',$dato);
				echo view('back/footer_dash');
	}
	//Funcion para modificar productos
	public function productos_modifica() {
		$id = $this->request->getVar('id');
		$producModel = new Producto_Model();

		$img = $this->request->getFile('imagen');
		if ($img != '') {
			$nombre_aleatorio = $img->getRandomName();
			$img->move(ROOTPATH.'public/assets/uploads',$nombre_aleatorio);

        $data = [
				// 'id' => $id,
                'nombre_prod' => $this->request->getVar('nombre_prod'),
                'imagen' => $img->getName(),
                'categoria_id'  => $this->request->getVar('categoria_id'),
                'precio' => $this->request->getVar('precio'),
                'precio_vta' => $this->request->getVar('precio_vta'),
				'stock'  => $this->request->getVar('stock'),
				'stock_min'  => $this->request->getVar('stock_min')
                // 'eliminado' => $this->request->getVar('eliminado')
            ];
             $producModel->update($id,$data);
             return $this->response->redirect(site_url('producto-list'));
		} else {
			$data = [
				// 'id' => $id,
                'nombre_prod' => $this->request->getVar('nombre_prod'),
                // 'imagen' => $img->getName(),
                'categoria_id'  => $this->request->getVar('categoria_id'),
                'precio' => $this->request->getVar('precio'),
                'precio_vta' => $this->request->getVar('precio_vta'),
				'stock'  => $this->request->getVar('stock'),
				'stock_min'  => $this->request->getVar('stock_min')
                // 'eliminado' => $this->request->getVar('eliminado')
            ];
             $producModel->update($id,$data);
			return $this->response->redirect(site_url('producto-list'));
		}
		
	}
	//Alta y Baja de producto
	public function eliminar_producto($id){
		// $id = $this->uri->segment(2);
		$Productos = new Producto_Model();
		$data = array (
			'eliminado' => 'SI'
		);
		$Productos->update($id,$data);
		return $this->response->redirect(site_url('producto-list'));
	}
	public function alzar_producto($id){
		// $id = $this->uri->segment(2);
		$Productos = new Producto_Model();
		$data = array (
			'eliminado' => 'NO'
		);
		$Productos->update($id,$data);
		return $this->response->redirect(site_url('productos-baja'));
	}
}