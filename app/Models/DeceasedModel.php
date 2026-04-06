<?php

namespace App\Models;

use CodeIgniter\Model;

class DeceasedModel extends Model
{
    protected $table      = 'tbl_deceased';
    protected $primaryKey = 'fld_DeceasedId';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'fld_UserId',
        'fld_FirstName',
        'fld_MiddleName',
        'fld_LastName',
        'fld_DateOfBirth',
        'fld_DateOfDeath',
        'fld_BurialDate',
        'fld_BurialTime',
        'fld_TimeOfDeath',
        'fld_Age',
        'fld_Sex',
        'fld_CivilStatus',
        'fld_Religion',
        'fld_Citizenship',
        'fld_Occupation',
        'fld_Address',
        'fld_FatherName',
        'fld_MotherName',
        'fld_Cemetery',
        'fld_Informant',
        'fld_Relationship',
        'fld_InformantAddress',
        'fld_ContactNumber',
        'fld_Package',
        'fld_PackagePrice',
        'fld_Payment',
        'fld_PickupAddress',
        'fld_ObituaryImage',
        'fld_TransactionNumber',
        'fld_TransactionStatus',
    ];
}
