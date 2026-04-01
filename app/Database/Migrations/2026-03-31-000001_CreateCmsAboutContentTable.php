<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCmsAboutContentTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'fld_id' => [
                'type'           => 'INT',
                'constraint'     => 4,
                'auto_increment' => true,
            ],
            'fld_Content' => [
                'type'       => 'VARCHAR',
                'constraint' => 500,
            ],
            'fld_Sort' => [
                'type'       => 'INT',
                'constraint' => 4,
            ],
            'fld_Status' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
        ]);

        $this->forge->addPrimaryKey('fld_id');
        $this->forge->createTable('tbl_cms_about_content', true); // true = IF NOT EXISTS
    }

    public function down()
    {
        $this->forge->dropTable('tbl_cms_about_content');
    }
}
