<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCmsAboutMissionVisionTable extends Migration
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
            'fld_Type' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'default'    => 'mission',
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
        $this->forge->createTable('tbl_cms_about_mission_vision', true);
    }

    public function down()
    {
        $this->forge->dropTable('tbl_cms_about_mission_vision');
    }
}
