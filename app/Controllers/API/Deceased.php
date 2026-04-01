<?php

namespace App\Controllers\API;

use App\Controllers\BaseController;
use App\Models\DeceasedModel;
use CodeIgniter\API\ResponseTrait;

class Deceased extends BaseController
{
    use ResponseTrait;

    public function register()
    {
        try {
            // multipart/form-data — use getPost() instead of getJSON()
            $data   = $this->request->getPost();
            $userId = $data['user_id'] ?? null;

            if (!$userId) {
                return $this->respondCreated([
                    'status'  => 'error',
                    'message' => 'Unauthorized. Please log in.',
                ]);
            }

            $rules = [
                'first_name'    => 'required|min_length[2]|max_length[100]',
                'last_name'     => 'required|min_length[2]|max_length[100]',
                'date_of_birth' => 'required|valid_date',
                'date_of_death' => 'required|valid_date',
                'informant'     => 'required|min_length[2]|max_length[100]',
                'payment'       => 'uploaded[payment]|max_size[payment,5120]|ext_in[payment,jpg,jpeg,png,pdf]',
            ];

            if (!$this->validate($rules)) {
                return $this->respondCreated([
                    'status'  => 'error',
                    'message' => $this->validator->getErrors(),
                ]);
            }

            // handle file upload
            $file        = $this->request->getFile('payment');
            $paymentPath = null;

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $newName     = $file->getRandomName();
                $file->move(WRITEPATH . 'uploads/payments', $newName);
                $paymentPath = 'payments/' . $newName;
            }

            $model = new DeceasedModel();
            $model->insert([
                'fld_UserId'           => $userId,
                'fld_FirstName'        => $data['first_name']        ?? null,
                'fld_MiddleName'       => $data['middle_name']       ?? null,
                'fld_LastName'         => $data['last_name']         ?? null,
                'fld_DateOfBirth'      => $data['date_of_birth']     ?? null,
                'fld_DateOfDeath'      => $data['date_of_death']     ?? null,
                'fld_TimeOfDeath'      => $data['time_of_death']     ?? null,
                'fld_Age'              => $data['age']               ?? null,
                'fld_Sex'              => $data['sex']               ?? null,
                'fld_CivilStatus'      => $data['civil_status']      ?? null,
                'fld_Religion'         => $data['religion']          ?? null,
                'fld_Citizenship'      => $data['citizenship']       ?? null,
                'fld_Occupation'       => $data['occupation']        ?? null,
                'fld_Address'          => $data['address']           ?? null,
                'fld_FatherName'       => $data['father_name']       ?? null,
                'fld_MotherName'       => $data['mother_name']       ?? null,
                'fld_Cemetery'         => $data['cemetery']          ?? null,
                'fld_Informant'        => $data['informant']         ?? null,
                'fld_Relationship'     => $data['relationship']      ?? null,
                'fld_InformantAddress' => $data['informant_address'] ?? null,
                'fld_ContactNumber'    => $data['contact_number']    ?? null,
                'fld_Package'          => $data['package']           ?? null,
                'fld_PackagePrice'     => $data['package_price']     ?? null,
                'fld_Payment'          => $paymentPath,
            ]);

            return $this->respondCreated([
                'status'  => 'success',
                'message' => 'Registration submitted successfully.',
            ]);

        } catch (\Exception $e) {
            return $this->respondCreated([
                'status'  => 'error',
                'message' => 'Internal Server Error: ' . $e->getMessage(),
            ]);
        }
    }
}
