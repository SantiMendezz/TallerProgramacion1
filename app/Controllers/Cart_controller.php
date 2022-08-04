<?php
namespace App\Controllers;
Use App\Models\Usuarios_model;
Use App\Models\Producto_model;
Use App\Models\Ventas_detalle_model; 
Use App\Models\Ventas_cabecera_model;

use CodeIgniter\Controller;
class Cart_controller extends Controller{
    //Cargar carrito
    public function index(){
        $session = session();

		$data['titulo'] = 'Carrito';
		echo view('head_view',$data);
		echo view('nav_view');
		echo view('cart/carrito_view');
		echo view('footer_view');
    }

    //Agregar un producto al carrito
    public function add() {
        $cart = \Config\Services::Cart();

        $request = \Config\Services::request();
        $cart->insert(array(
            'id'    => $request->getPost('id'),
            'qty'   => 1,
            'price' => $request->getPost('precio_vta'),
            'name' => $request->getPost('nombre_prod')
        ));

        // El $cart->destroy();
        return redirect()->back()->withInput();
    }
    //Actualizar un producto al carrito
    public function actualiza_carrito() {
        $cart = \Config\Services::Cart();

        $request = \Config\Services::request();
        $cart->update(array(
            'id'    => $request->getPost('id'),
            'qty'   => 1,
            'price' => $request->getPost('precio_vta'),
            'name' => $request->getPost('nombre_prod')
        ));

        // El $cart->destroy();
        return redirect()->back()->withInput();
    }
    //Borra el carrito
    public function borrar_carrito() {
        $cart = \Config\Services::cart();
        $cart->destroy();

        return $this->response->redirect(site_url('mostrar-carrito'));
    }
    //Elimina un elemento del carrito
    public function eliminar_del_carrito($rowid) {
        $cart = \Config\Services::cart();
        $cart->remove($rowid);

        return $this->response->redirect(site_url('mostrar-carrito'));
    }

    //Muestra la pantalla para confirmar la compra
    public function comprar_carrito() {
        $session = session();

        $data['titulo'] = 'Confirmar compra';
		echo view('head_view',$data);
		echo view('nav_view');
		echo view('cart/carrito_pago');
		echo view('footer_view');
    }
    //Confirma la compra
    public function confirma_compra() {
        $session = session();
        $cart = \Config\Services::Cart();
        $cart = $cart->contents();
        $gran_total = 0;
        // Calcula gran total si el carrito tiene elementos
        if ($cart) {
            foreach ($cart as $item) {
                $gran_total = $gran_total + $item['subtotal'];
            }
        }

        $dato1 = [
            // 'id' => ,
            'fecha' => date('Y-m-d'),
            'usuario_id' => $_SESSION['id'],
            'total_venta' => $gran_total
        ];

        $ventaC = new Ventas_cabecera_model();
		$ventaC->insert($dato1);

        $model 		= new Ventas_cabecera_model();
        $idLast 		= $model->last();
        //Venta Detalle
        if ($cart):
			foreach ($cart as $item):
				$dato2 = [
					'venta_id' 		=> $idLast['id'],
					'producto_id' 	=> $item['id'],
					'cantidad' 		=> $item['qty'],
					'precio' 		=> $item['price'],
					'total' 		=> $item['subtotal']
                ];
        $ventaD = new Ventas_detalle_model();
        $ventaD->insert($dato2);
            endforeach;
        endif;

        $data['titulo'] = 'Compra Realizada';
		echo view('head_view',$data);
		echo view('nav_view');
		echo view('cart/carrito_gracias');
		echo view('footer_view');
    }
}