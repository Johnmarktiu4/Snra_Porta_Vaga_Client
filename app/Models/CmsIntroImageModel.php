<?php

namespace App\Models;

use CodeIgniter\Model;

class CmsIntroImageModel extends Model
{
    protected $table      = 'tbl_cms_intro_image';
    protected $primaryKey = 'fld_id';
    protected $useTimestamps = false;

    protected $allowedFields = [
        'fld_Image',
        'fld_Alt',
        'fld_Status',
    ];
}
