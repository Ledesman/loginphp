<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $usuario = "admin";
        $password = password_hash("123",PASSWORD_DEFAULT);
        $nombre = "carlos";
        
        $data = [
            'usuario' => $usuario,
            'password'    => $password,
            'nombre' => $nombre
        ];

       

        // Using Query Builder
        $this->db->table('usuario')->insert($data);
    }
}
