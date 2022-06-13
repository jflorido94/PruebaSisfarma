<?php

namespace App\Controllers;

use App\Entities\EntUser;
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

        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if($data){
            $pass = $data->clave;
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data->id,
                    'name' => $data->nombre,
                    'email' => $data->email,
                    'rol' => $data->rolId,
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to(route_to('dashboard'));


            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');

               return redirect()->to('login');
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

    public function informe()
    {
        return view('informe');
    }

    public function cliente()
    {
        return view('cliente');
    }

    public function registrar()
    {
        $data = [
            'nombre'    => 'Usuario',
            'apellidos' => 'Sisfarma',
            'usuario'   => 'User',
            'clave'     => '123456',
            'email'     => 'usuario@sisfarma.com',
            'rolId'     => 2,
            // 'fechaBaja',
            // 'ultimoAcceso',
            // 'regenerandoVentas'
        ];

        $user = new EntUser($data);

        $model = model('UserModel');

        // $model->save($user);

        d($user);
    }

}