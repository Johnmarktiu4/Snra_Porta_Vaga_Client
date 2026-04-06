<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPickupAndObituaryToDeceased extends Migration
{
    public function up()
    {
        $fields = $this->db->getFieldNames('tbl_deceased');

        if (!in_array('fld_PickupAddress', $fields)) {
            $this->forge->addColumn('tbl_deceased', [
                'fld_PickupAddress' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 255,
                    'null'       => true,
                    'after'      => 'fld_Payment',
                ],
            ]);
        }

        if (!in_array('fld_ObituaryImage', $fields)) {
            $this->forge->addColumn('tbl_deceased', [
                'fld_ObituaryImage' => [
                    'type' => 'LONGBLOB',
                    'null' => true,
                    'after' => 'fld_PickupAddress',
                ],
            ]);
        }
    }

    public function down()
    {
        $this->forge->dropColumn('tbl_deceased', 'fld_PickupAddress');
        $this->forge->dropColumn('tbl_deceased', 'fld_ObituaryImage');
    }
}
