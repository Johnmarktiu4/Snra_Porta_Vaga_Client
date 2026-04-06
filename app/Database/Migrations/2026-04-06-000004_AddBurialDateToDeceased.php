<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBurialDateToDeceased extends Migration
{
    public function up()
    {
        $fields = $this->db->getFieldNames('tbl_deceased');

        if (!in_array('fld_BurialDate', $fields)) {
            $this->forge->addColumn('tbl_deceased', [
                'fld_BurialDate' => [
                    'type' => 'DATE',
                    'null' => true,
                    'after' => 'fld_DateOfDeath',
                ],
            ]);
        }

        if (!in_array('fld_BurialTime', $fields)) {
            $this->forge->addColumn('tbl_deceased', [
                'fld_BurialTime' => [
                    'type' => 'TIME',
                    'null' => true,
                    'after' => 'fld_BurialDate',
                ],
            ]);
        }
    }

    public function down()
    {
        $this->forge->dropColumn('tbl_deceased', 'fld_BurialDate');
        $this->forge->dropColumn('tbl_deceased', 'fld_BurialTime');
    }
}
