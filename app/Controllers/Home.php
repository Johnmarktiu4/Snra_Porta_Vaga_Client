<?php

namespace App\Controllers;
use App\Models\Accountmodel;

class Home extends BaseController
{
    public function index(){
        ini_set('display_errors', 'On');
        error_reporting(E_ALL);
        $session = session();
        $model = new Accountmodel();
        $data = [];

        helper(['form']);
        try{
            if($this->request->getPost()){
                $rules = [
                    'login-email' => 'required|min_length[6]|max_length[100]|valid_email',
                    'login-password' => 'required|min_length[8]|max_length[255]',
                ];

                if (!$this->validate($rules)) {
                    $session->setFlashdata('error', $this->validator->getErrors());
                    return view('index',$data);
                } else {
                    $session->destroy();
                    $username = $this->request->getVar('login-email');
                    $password = $this->request->getVar('login-password');

                    $user = $model->where('fld_Username', $username)->where('fld_Status', 'Active')->first();

                    if ($user && password_verify($password, $user['fld_Password'])) {
                        $sessionData = [
                            'user_id' => $user['fld_UserId'],
                            'username' => $user['fld_Username'],
                            'naame' => $user['fld_Name'],
                            'contact' => $user['fld_ContactNumber'],
                            'email' => $user['fld_Email'],
                            'address' => $user['fld_Address'],
                            'isLoggedIn' => true,
                        ];
                        $session->set($sessionData);
                        $session->setFlashdata('success', 'Successfully Logged in');
                        return view('index', $data);
                    } else {
                        $session->setFlashdata('error', 'Invalid username or password');
                        return view('index', $data);    
                    }
                }
            }
        }
        catch (Exception $e){
            $session = session();
            $session->setFlashdata('error', 'An error occured: ' . $e->getMessage());
        }
        return view('index');
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url() . '');
    }

    public function corss()
    {
        $request = \Config\Services::request();
        $response = \Config\Services::response();

        $response->setHeader('Access-Control-Allow-Origin', 'http://localhost:3000');
        $response->setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, OPTIONS');
        $response->setHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        return $response;
    }
}
