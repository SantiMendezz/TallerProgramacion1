<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Home';
        echo view('head_view', $data);
        echo view('nav_view');
        echo view('principal');
        echo view('footer_view');
    }
    public function tienda()
    {
        $data['titulo'] = 'Tienda';
        echo view('head_view', $data);
        echo view('nav_view');
        echo view('tienda');
        echo view('footer_view');
    }
    public function comercializacion()
    {
        $data['titulo'] = 'Comercialización';
        echo view('head_view', $data);
        echo view('nav_view');
        echo view('comercializacion');
        echo view('footer_view');
    }
    public function nosotros()
    {
        $data['titulo'] = 'Nosotros';
        echo view('head_view', $data);
        echo view('nav_view');
        echo view('nosotros');
        echo view('footer_view');
    }
    public function contactanos()
    {
        $data['titulo'] = 'Contactanos';
        echo view('head_view', $data);
        echo view('nav_view');
        echo view('contactanos');
        echo view('footer_view');
    }
    public function terminosCondiciones()
    {
        $data['titulo'] = 'Términos y condiciones';
        echo view('head_view', $data);
        echo view('nav_view');
        echo view('terminos_condiciones');
        echo view('footer_view');
    }
}
