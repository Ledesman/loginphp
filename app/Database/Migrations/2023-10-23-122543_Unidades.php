<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Unidades extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            
            'nombre_corto' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'activo' => [
                'type' => 'BOOL',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('unidades');
    }

    public function down()
    {
        $this->forge->dropTable('unidades');
    }
}
