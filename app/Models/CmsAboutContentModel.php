<?php

namespace App\Models;

use CodeIgniter\Model;

class CmsAboutContentModel extends Model
{
    protected $table      = 'tbl_cms_about_content';
    protected $primaryKey = 'fld_id';
    protected $useTimestamps = false;

    protected $allowedFields = [
        'fld_Content',
        'fld_Sort',
        'fld_Status',
    ];
}
