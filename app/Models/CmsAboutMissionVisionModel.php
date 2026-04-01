<?php

namespace App\Models;

use CodeIgniter\Model;

class CmsAboutMissionVisionModel extends Model
{
    protected $table      = 'tbl_cms_about_mission_vision';
    protected $primaryKey = 'fld_id';
    protected $useTimestamps = false;

    protected $allowedFields = [
        'fld_Content',
        'fld_Type',
        'fld_Sort',
        'fld_Status',
    ];
}
