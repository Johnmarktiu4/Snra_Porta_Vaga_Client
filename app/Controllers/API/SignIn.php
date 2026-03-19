<?php
namespace App\Controllers\API;

use App\Controllers\BaseController;
use App\Models\Accountmodel;
use CodeIgniter\API\ResponseTrait;

class SignIn extends BaseController
{
    use ResponseTrait;

    public function verify()
    {
        try {
        $data = $this->request->getJSON(true);
        $key = $this->request->getHeaderLine('Authorization');

        if (empty($data['username']) || empty($data['password'])) {
            return $this->fail('Username and password are required', 400);
        }
        $accountModel = new Accountmodel();
        $account = $accountModel->where('fld_Username', $data['username'])
            ->where('fld_Status', 'Active')
            ->first();
      
        if (!empty($account['fld_Image'])) {
            $account['fld_Image'] = base64_encode($account['fld_Image']);
        }

        if (!$account || !password_verify($data['password'], $account['fld_Password'])) {
            return $this->respondCreated(['status' => 'error', 'message' => 'Invalid username or password']);
        }

        return $this->respondCreated(['status' => 'success', 'message' => 'Login successful', 'data' => $account]);
        }
        catch (\Exception $e) {
            return $this->respondCreated(['status' => 'error', 'message' => 'An error occurred while signing in: ' . $e->getMessage()]);
        }
    }
}