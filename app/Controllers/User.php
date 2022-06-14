<?php

namespace App\Controllers;

use App\Entities\EntUser;
use App\Models\AccesoModel;
use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        if(session()->get('isLoggedIn')) {
			return redirect()->to(route_to('dashboard'));
		} else {
			// helper(['form']);

            return view('login');  
		}
        
    }

    public function login()
    {
        $session = session();

        $user_obj = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $user_obj->where('email', $email)->first();

        if($data){
            $pass = $data['clave'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){

                $acceso = [
                    'idUsuario' => $data['id'],
                    'fecha'=> date('Y-m-d H:i:s'),
                ];

                $acceso_obj = new AccesoModel();
                $acceso_obj->insert($acceso);
                
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['nombre']." ". $data['apellidos'],
                    'email' => $data['email'],
                    'rol' => $data['rolId'],
                    'ultimoAcceso' => $data['ultimoAcceso'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to(route_to('dashboard'));


            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');

               return redirect()->to(route_to('login'));
            }

        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
			//$session->set('isLoggedIn', FALSE);
            return redirect()->to(route_to('login'));
        }
    }

    public function logout() {
		$session = session();
        $session->destroy();
        return redirect()->to(route_to('login'));
	}

    public function dashboard()
    {
        if(!session()->get('isLoggedIn')) {
			return redirect()->to(route_to('login'));
		} else {
			helper(['form']);

            return view('dashboard');  
		}
    }

    public function registrar()
    {
        $data = [
            'nombre'    => 'Usuario',
            'apellidos' => 'Sisfarma',
            'usuario'   => 'User2',
            'clave'     => '123456',
            'email'     => 'usuario2@sisfarma.com',
            'rolId'     => 2,
            // 'fechaBaja',
            // 'ultimoAcceso',
            // 'regenerandoVentas'
        ];


        $user_obj = new UserModel();

        $user_obj->insert($data);

        // d($data);
    }

}