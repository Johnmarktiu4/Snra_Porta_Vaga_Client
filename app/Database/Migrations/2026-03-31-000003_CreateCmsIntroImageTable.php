<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCmsIntroImageTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'fld_id' => [
                'type'           => 'INT',
                'constraint'     => 4,
                'auto_increment' => true,
            ],
            'fld_Image' => [
                'type' => 'LONGBLOB',
                'null' => true,
            ],
            'fld_Alt' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'fld_Status' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
        ]);

        $this->forge->addPrimaryKey('fld_id');
        $this->forge->createTable('tbl_cms_intro_image', true);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_cms_intro_image');
    }
}
