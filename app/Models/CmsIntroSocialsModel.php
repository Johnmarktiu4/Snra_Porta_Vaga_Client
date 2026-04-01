<?php

namespace App\Models;

use CodeIgniter\Model;

class CmsIntroSocialsModel extends Model
{
    protected $table      = 'tbl_cms_intro_socials';
    protected $primaryKey = 'fld_Id';
    protected $useTimestamps = false;

    protected $allowedFields = [
        'fld_SocialMedia',
        'fld_URL',
        'fld_Status',
    ];
}
