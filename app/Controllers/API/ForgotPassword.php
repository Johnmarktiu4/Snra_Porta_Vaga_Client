<?php
namespace App\Controllers\API;

use App\Controllers\BaseController;
use App\Models\Accountmodel;
use CodeIgniter\API\ResponseTrait;

class ForgotPassword extends BaseController
{
    use ResponseTrait;

    public function OTP()
    {
        try{
            $data = $this->request->getJSON(true);
            $key = $this->request->getHeaderLine('Authorization');

            if (empty($data['username'])) {
                return $this->fail('Username is required', 400);
            }

            $rules = [
                'username' => 'required|valid_email|min_length[6]|max_length[100]',
            ];

            if (!$this->validate($rules)) {
                return $this->respondCreated([
                    'status' => 'error',
                    'message' => $this->validator->getErrors(),
                ]);
            }

            $accountModel = new Accountmodel();
            $account = $accountModel->where('fld_Username', $data['username'])->where('fld_Status', 'Active')
            ->first();

            if (!$account) {
                return $this->respondCreated([
                    'status' => 'error',
                    'message' => 'Account not found',
                ]);
            }

            $from = 'Snraportavaga@gmail.com';
            $to = $account['fld_Username'];
            $subject = 'OTP for Password Reset';
            $otp = rand(100000, 999999);
            $message = "Hello " . $account['fld_Username'] . ",<br><br>
            We receive a request to reset your password.<br>
            Your OTP for password reset is: " . $otp . "<br><br>
            If you did not request this, please ignore this email.<br><br>
            Best regards,<br>
            SPV Team";
            $email = \Config\Services::email();
            $email->setFrom($from, 'SPV Team');
            $email->setTo($to);
            $email->setSubject($subject);
            $email->setMessage($message);
            if ($email->send()) {
                return $this->respondCreated([
                    'status' => 'success',
                    'message' => 'OTP sent to your email',
                    'data' => ['otp' => strval($otp)]
                ]);
            } else {
                return $this->respondCreated([
                    'status' => 'error',
                    'message' => 'Failed to send OTP',
                ]);
            }
        } catch (\Exception $e) {
            return $this->respondCreated([
                'status' => 'error',
                'message' => 'Internal Server Error',
            ]);
        }
    }

    public function resets()
    {
        try {
            $data = $this->request->getJSON(true);

            $rules = [
                'username'         => 'required|valid_email',
                'password'         => 'required|min_length[8]',
                'confirm_password' => 'required|matches[password]',
            ];

            if (!$this->validate($rules)) {
                return $this->respondCreated([
                    'status'  => 'error',
                    'message' => $this->validator->getErrors(),
                ]);
            }

            $accountModel = new Accountmodel();
            $account = $accountModel->where('fld_Username', $data['username'])
                ->where('fld_Status', 'Active')
                ->first();

            if (!$account) {
                return $this->respondCreated([
                    'status'  => 'error',
                    'message' => 'Account not found',
                ]);
            }

            $accountModel->update($account['fld_UserId'], [
                'fld_Password' => password_hash($data['password'], PASSWORD_DEFAULT),
            ]);

            return $this->respondCreated([
                'status'  => 'success',
                'message' => 'Password updated successfully',
            ]);
        } catch (\Exception $e) {
            return $this->respondCreated([
                'status'  => 'error',
                'message' => 'Internal Server Error',
            ]);
        }
    }
}
