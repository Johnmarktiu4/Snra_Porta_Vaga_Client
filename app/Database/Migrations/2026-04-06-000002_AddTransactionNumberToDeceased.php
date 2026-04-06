<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTransactionNumberToDeceased extends Migration
{
    public function up()
    {
        $fields = $this->db->getFieldNames('tbl_deceased');

        if (!in_array('fld_TransactionNumber', $fields)) {
            $this->forge->addColumn('tbl_deceased', [
                'fld_TransactionNumber' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 20,
                    'null'       => true,
                    'after'      => 'fld_UserId',
                ],
            ]);
        }
    }

    public function down()
    {
        $this->forge->dropColumn('tbl_deceased', 'fld_TransactionNumber');
    }
}
