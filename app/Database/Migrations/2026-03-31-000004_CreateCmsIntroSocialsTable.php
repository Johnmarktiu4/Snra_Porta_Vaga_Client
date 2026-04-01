<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCmsIntroSocialsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'fld_Id' => [
                'type'           => 'INT',
                'constraint'     => 4,
                'auto_increment' => true,
            ],
            'fld_SocialMedia' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'fld_URL' => [
                'type'       => 'VARCHAR',
                'constraint' => 500,
            ],
            'fld_Status' => [
                'type'       => 'VARCHAR',
                'constraint' => 10,
            ],
        ]);

        $this->forge->addPrimaryKey('fld_Id');
        $this->forge->createTable('tbl_cms_intro_socials', true);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_cms_intro_socials');
    }
}
