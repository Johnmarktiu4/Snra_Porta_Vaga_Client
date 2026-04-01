<?php

namespace App\Controllers\API;

use App\Controllers\BaseController;
use App\Models\CmsAboutContentModel;
use App\Models\CmsAboutMissionVisionModel;
use App\Models\CmsAboutImageModel;
use CodeIgniter\API\ResponseTrait;

class CmsAbout extends BaseController
{
    use ResponseTrait;

    // ── GET ──────────────────────────────────────────────────────────

    public function content()
    {
        try {
            $records = (new CmsAboutContentModel())
                ->where('fld_Status', 'Active')
                ->orderBy('fld_Sort', 'ASC')
                ->findAll();

            return $this->respondCreated(['status' => 'success', 'data' => $records]);
        } catch (\Exception $e) {
            return $this->respondCreated(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function missionVision()
    {
        try {
            $records = (new CmsAboutMissionVisionModel())
                ->where('fld_Status', 'Active')
                ->orderBy('fld_Sort', 'ASC')
                ->findAll();

            return $this->respondCreated(['status' => 'success', 'data' => $records]);
        } catch (\Exception $e) {
            return $this->respondCreated(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function image()
    {
        try {
            $records = (new CmsAboutImageModel())->where('fld_Status', 'Active')->findAll();

            foreach ($records as &$row) {
                if (!empty($row['fld_Image'])) {
                    $row['fld_Image'] = base64_encode($row['fld_Image']);
                }
            }

            return $this->respondCreated(['status' => 'success', 'data' => $records]);
        } catch (\Exception $e) {
            return $this->respondCreated(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    // ── UPDATE ───────────────────────────────────────────────────────

    public function updateContent($id)
    {
        try {
            $data  = $this->request->getJSON(true);
            $model = new CmsAboutContentModel();

            if (!$model->find($id)) {
                return $this->respondCreated(['status' => 'error', 'message' => 'Record not found']);
            }

            $allowed = [];
            if (isset($data['fld_Content'])) $allowed['fld_Content'] = $data['fld_Content'];
            if (isset($data['fld_Sort']))    $allowed['fld_Sort']    = $data['fld_Sort'];
            if (isset($data['fld_Status']))  $allowed['fld_Status']  = $data['fld_Status'];

            $model->update($id, $allowed);

            return $this->respondCreated(['status' => 'success', 'message' => 'Content updated']);
        } catch (\Exception $e) {
            return $this->respondCreated(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function updateMissionVision($id)
    {
        try {
            $data  = $this->request->getJSON(true);
            $model = new CmsAboutMissionVisionModel();

            if (!$model->find($id)) {
                return $this->respondCreated(['status' => 'error', 'message' => 'Record not found']);
            }

            $allowed = [];
            if (isset($data['fld_Content'])) $allowed['fld_Content'] = $data['fld_Content'];
            if (isset($data['fld_Type']))    $allowed['fld_Type']    = $data['fld_Type'];
            if (isset($data['fld_Sort']))    $allowed['fld_Sort']    = $data['fld_Sort'];
            if (isset($data['fld_Status']))  $allowed['fld_Status']  = $data['fld_Status'];

            $model->update($id, $allowed);

            return $this->respondCreated(['status' => 'success', 'message' => 'Mission/Vision updated']);
        } catch (\Exception $e) {
            return $this->respondCreated(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function updateImage($id)
    {
        try {
            $model = new CmsAboutImageModel();

            if (!$model->find($id)) {
                return $this->respondCreated(['status' => 'error', 'message' => 'Record not found']);
            }

            $allowed = [];

            $file = $this->request->getFile('fld_Image');
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $allowed['fld_Image'] = file_get_contents($file->getTempName());
            }

            if ($this->request->getPost('fld_Alt'))    $allowed['fld_Alt']    = $this->request->getPost('fld_Alt');
            if ($this->request->getPost('fld_Status')) $allowed['fld_Status'] = $this->request->getPost('fld_Status');

            $model->update($id, $allowed);

            return $this->respondCreated(['status' => 'success', 'message' => 'Image updated']);
        } catch (\Exception $e) {
            return $this->respondCreated(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
