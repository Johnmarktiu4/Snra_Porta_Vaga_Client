<?php

namespace App\Models;

use CodeIgniter\Model;

class CmsIntroContentModel extends Model
{
    protected $table      = 'tbl_cms_intro_content';
    protected $primaryKey = 'fld_id';
    protected $useTimestamps = false;

    protected $allowedFields = [
        'fld_Content',
        'fld_Status',
        'fld_Type',
        'fld_Sort',
    ];
}
