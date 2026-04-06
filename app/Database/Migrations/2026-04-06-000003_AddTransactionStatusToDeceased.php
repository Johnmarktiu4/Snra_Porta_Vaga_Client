<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTransactionStatusToDeceased extends Migration
{
    public function up()
    {
        $fields = $this->db->getFieldNames('tbl_deceased');

        if (!in_array('fld_TransactionStatus', $fields)) {
            $this->forge->addColumn('tbl_deceased', [
                'fld_TransactionStatus' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 20,
                    'default'    => 'PENDING',
                    'after'      => 'fld_TransactionNumber',
                ],
            ]);
        }
    }

    public function down()
    {
        $this->forge->dropColumn('tbl_deceased', 'fld_TransactionStatus');
    }
}
