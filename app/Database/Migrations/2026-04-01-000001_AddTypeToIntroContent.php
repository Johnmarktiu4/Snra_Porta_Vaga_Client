<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTypeToIntroContent extends Migration
{
    public function up()
    {
        // column may already exist if added manually
        $fields = $this->db->getFieldNames('tbl_cms_intro_content');
        if (!in_array('fld_Type', $fields)) {
            $this->forge->addColumn('tbl_cms_intro_content', [
                'fld_Type' => [
                    'type'       => 'VARCHAR',
                    'constraint' => 20,
                    'default'    => 'paragraph',
                    'after'      => 'fld_Content',
                ],
            ]);
        }
    }

    public function down()
    {
        $this->forge->dropColumn('tbl_cms_intro_content', 'fld_Type');
    }
}
