<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDeceasedTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'fld_DeceasedId' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'fld_UserId' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'fld_FirstName'        => ['type' => 'VARCHAR', 'constraint' => 100],
            'fld_MiddleName'       => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'fld_LastName'         => ['type' => 'VARCHAR', 'constraint' => 100],
            'fld_DateOfBirth'      => ['type' => 'DATE', 'null' => true],
            'fld_DateOfDeath'      => ['type' => 'DATE'],
            'fld_TimeOfDeath'      => ['type' => 'TIME', 'null' => true],
            'fld_Age'              => ['type' => 'TINYINT', 'constraint' => 3, 'null' => true],
            'fld_Sex'              => ['type' => 'VARCHAR', 'constraint' => 10, 'null' => true],
            'fld_CivilStatus'      => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'fld_Religion'         => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'fld_Citizenship'      => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'fld_Occupation'       => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'fld_Address'          => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'fld_FatherName'       => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'fld_MotherName'       => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'fld_Cemetery'         => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'fld_Informant'        => ['type' => 'VARCHAR', 'constraint' => 150],
            'fld_Relationship'     => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true],
            'fld_InformantAddress' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'fld_ContactNumber'    => ['type' => 'VARCHAR', 'constraint' => 20, 'null' => true],
            'fld_Package'          => ['type' => 'VARCHAR', 'constraint' => 150, 'null' => true],
            'fld_PackagePrice'     => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'created_at'           => ['type' => 'DATETIME', 'null' => true],
            'updated_at'           => ['type' => 'DATETIME', 'null' => true],
            'fld_Payment'           => ['type' => 'LONGBLOB', 'null' => true],
        ]);

        $this->forge->addPrimaryKey('fld_DeceasedId');
        $this->forge->createTable('tbl_deceased', true);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_deceased');
    }
}
