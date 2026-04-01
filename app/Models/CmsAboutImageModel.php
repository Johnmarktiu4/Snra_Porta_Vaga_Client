<?php

namespace App\Models;

use CodeIgniter\Model;

class CmsAboutImageModel extends Model
{
    protected $table      = 'tbl_cms_about_image';
    protected $primaryKey = 'fld_id';
    protected $useTimestamps = false;

    protected $allowedFields = [
        'fld_Image',
        'fld_Alt',
        'fld_Status',
    ];
}
