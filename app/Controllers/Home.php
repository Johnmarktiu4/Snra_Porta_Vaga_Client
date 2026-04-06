<?php

namespace App\Controllers;
use App\Models\Accountmodel;
use App\Models\CmsIntroContentModel;
use App\Models\CmsIntroImageModel;
use App\Models\CmsIntroSocialsModel;
use App\Models\CmsAboutContentModel;
use App\Models\CmsAboutMissionVisionModel;
use App\Models\CmsAboutImageModel;

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
                    } else {
                        $session->setFlashdata('error', 'Invalid username or password');
                    }
                }
            }
        }
        catch (\Exception $e){
            $session->setFlashdata('error', 'An error occured: ' . $e->getMessage());
        }

        // load CMS data directly from models
        $data['cms_content'] = (new CmsIntroContentModel())
            ->where('fld_Status', 'Active')
            ->orderBy('fld_Sort', 'ASC')
            ->findAll();
        $data['cms_socials'] = (new CmsIntroSocialsModel())->where('fld_Status', 'Active')->findAll();

        $images = (new CmsIntroImageModel())->where('fld_Status', 'Active')->findAll();
        foreach ($images as &$img) {
            if (!empty($img['fld_Image'])) {
                $img['fld_Image'] = base64_encode($img['fld_Image']);
            }
        }
        $data['cms_images'] = $images;

        $data['cms_about'] = (new CmsAboutContentModel())
            ->where('fld_Status', 'Active')
            ->orderBy('fld_Sort', 'ASC')
            ->findAll();

        $data['cms_mission_vision'] = (new CmsAboutMissionVisionModel())
            ->where('fld_Status', 'Active')
            ->orderBy('fld_Sort', 'ASC')
            ->findAll();

        // obituaries — approved deceased records with an obituary image
        $obituaries = (new \App\Models\DeceasedModel())
            ->where('fld_TransactionStatus', 'APPROVED')
            ->findAll();
        foreach ($obituaries as &$ob) {
            if (!empty($ob['fld_ObituaryImage'])) {
                $ob['fld_ObituaryImage'] = base64_encode($ob['fld_ObituaryImage']);
            }
        }
        $data['obituaries'] = $obituaries;

        $aboutImages = (new CmsAboutImageModel())->where('fld_Status', 'Active')->findAll();
        foreach ($aboutImages as &$img) {
            if (!empty($img['fld_Image'])) {
                $img['fld_Image'] = base64_encode($img['fld_Image']);
            }
        }
        $data['cms_about_images'] = $aboutImages;

        return view('index', $data);
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
