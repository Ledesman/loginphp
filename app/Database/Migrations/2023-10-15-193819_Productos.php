<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Productos extends Migration
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
            'descripcion' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'imagen' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'cantidad' => [
                'type'       => 'INT',
                'constraint' => 5,
            ], 'precio' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('productos');
    }

    public function down()
    {
        $this->forge->dropTable('productos');
    }
}
