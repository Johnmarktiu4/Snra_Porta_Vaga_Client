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

            // handle payment file — store as LONGBLOB
            $file        = $this->request->getFile('payment');
            $paymentData = null;

            if ($file && $file->isValid() && !$file->hasMoved()) {
                $paymentData = file_get_contents($file->getTempName());
            }

            // handle obituary image — store as LONGBLOB
            $obituaryFile  = $this->request->getFile('obituary_image');
            $obituaryImage = null;

            if ($obituaryFile && $obituaryFile->isValid() && !$obituaryFile->hasMoved()) {
                $obituaryImage = file_get_contents($obituaryFile->getTempName());
            }

            $model = new DeceasedModel();
            $model->insert([
                'fld_UserId'            => $userId,
                'fld_TransactionNumber' => $data['transaction_number'] ?? null,
                'fld_TransactionStatus' => 'PENDING',
                'fld_FirstName'        => $data['first_name']        ?? null,
                'fld_MiddleName'       => $data['middle_name']       ?? null,
                'fld_LastName'         => $data['last_name']         ?? null,
                'fld_DateOfBirth'      => $data['date_of_birth']     ?? null,
                'fld_DateOfDeath'      => $data['date_of_death']     ?? null,
                'fld_BurialDate'       => $data['burial_date']       ?? null,
                'fld_BurialTime'       => $data['burial_time']       ?? null,
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
                'fld_Payment'          => $paymentData,
                'fld_PickupAddress'    => $data['pickup_address']    ?? null,
                'fld_ObituaryImage'    => $obituaryImage,
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

    public function getAll()
    {
        try {
            $model   = new DeceasedModel();
            $records = $model->orderBy('created_at', 'DESC')->findAll();

            // base64-encode binary fields for JSON transport
            foreach ($records as &$row) {
                if (!empty($row['fld_ObituaryImage'])) {
                    $row['fld_ObituaryImage'] = base64_encode($row['fld_ObituaryImage']);
                }
                if (!empty($row['fld_Payment'])) {
                    $row['fld_Payment'] = base64_encode($row['fld_Payment']);
                }
            }

            return $this->respondCreated([
                'status' => 'success',
                'data'   => $records,
            ]);
        } catch (\Exception $e) {
            return $this->respondCreated([
                'status'  => 'error',
                'message' => 'Internal Server Error: ' . $e->getMessage(),
            ]);
        }
    }

    public function payment($id)
    {
        try {
            $model  = new DeceasedModel();
            $record = $model->find($id);

            if (!$record || empty($record['fld_Payment'])) {
                return $this->response->setStatusCode(404)
                    ->setBody('Payment receipt not found');
            }

            $paymentData = $record['fld_Payment'];

            // handle legacy file path (e.g. "payments/filename.jpg")
            if (ctype_print($paymentData) && strpos($paymentData, '/') !== false) {
                $filePath = WRITEPATH . 'uploads/' . $paymentData;
                if (!file_exists($filePath)) {
                    return $this->response->setStatusCode(404)->setBody('File not found');
                }
                $paymentData = file_get_contents($filePath);
            }

            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $mime  = $finfo->buffer($paymentData) ?: 'application/octet-stream';

            return $this->response
                ->setStatusCode(200)
                ->setHeader('Content-Type', $mime)
                ->setHeader('Content-Disposition', 'inline; filename="payment_' . $id . '"')
                ->setBody($paymentData);

        } catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setBody($e->getMessage());
        }
    }

    public function obituary($id)
    {
        try {
            $model  = new DeceasedModel();
            $record = $model->find($id);

            if (!$record || empty($record['fld_ObituaryImage'])) {
                return $this->response->setStatusCode(404)
                    ->setBody('Obituary image not found');
            }

            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $mime  = $finfo->buffer($record['fld_ObituaryImage']) ?: 'image/jpeg';

            return $this->response
                ->setStatusCode(200)
                ->setHeader('Content-Type', $mime)
                ->setHeader('Content-Disposition', 'inline; filename="obituary_' . $id . '"')
                ->setBody($record['fld_ObituaryImage']);

        } catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setBody($e->getMessage());
        }
    }
}
