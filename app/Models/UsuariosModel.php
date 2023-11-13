<?php namespace App\Models;
    use CodeIgniter\Model;
    
    class UsuariosModel extends Model {
        protected $table      = 'usuario';
        protected $primaryKey = 'id_usuario';
    
        protected $useAutoIncrement = true;
    
        protected $returnType     = 'array';
        protected $useSoftDeletes = false;
    
        protected $allowedFields = ['usuario', 'password', 'type', 
        'id_caja', 'id_rol', 'activo'];
    
        // Dates
        protected $useTimestamps = true;
        protected $dateFormat    = 'datetime';
        protected $createdField  = 'fecha_alta';
        protected $updatedField  = 'fecha_modifica';
        protected $deletedField  = 'deleted_at';
    
        // Validation
        protected $validationRules      = [];
        protected $validationMessages   = [];
        protected $skipValidation       = false;
        protected $cleanValidationRules = true;
    
     public function insertar($datos){
             $Nombres = $this->db->table('usuario');
             $Nombres->insert($datos);

             return $this->db->insertID();
         }
        // public function obtenerNombre($data){
        //     $Nombres = $this->db->table('unidades');
        //     $Nombres->where($data);

        //     return $Nombres->get()->getResultArray();
        // }

        public function actualice($data, $id){
            $Nombres = $this->db->table('usuario');
            $Nombres->set($data);

            $Nombres->where('id_usuario', $id);
            return $Nombres->update();
        }
        //     public function eliminar($data){
        //         $Nombres= $this->db->table('unidades');
        //         $Nombres->where($data);

        //         return $Nombres->delete();
        //     }

    }