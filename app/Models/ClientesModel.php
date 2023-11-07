<?php namespace App\Models;
    use CodeIgniter\Model;
    
    class ClientesModel extends Model {
        protected $table      = 'clientes';
        protected $primaryKey = 'id';
    
        protected $useAutoIncrement = true;
    
        protected $returnType     = 'array';
        protected $useSoftDeletes = false;
    
        protected $allowedFields = ['nombre','direccion','telefono',
        'correo','activo'];
    
        // Dates
        protected $useTimestamps = true;
        protected $dateFormat    = 'datetime';
        protected $createdField  = 'fecha_alta';
        protected $updatedField  = 'fecha_edit';
        protected $deletedField  = 'deleted_at';
    
        // Validation
        protected $validationRules      = [];
        protected $validationMessages   = [];
        protected $skipValidation       = false;
        protected $cleanValidationRules = true;
    
     public function insertar($datos){
             $Nombres = $this->db->table('clientes');
             $Nombres->insert($datos);

             return $this->db->insertID();
         }
        // public function obtenerNombre($data){
        //     $Nombres = $this->db->table('unidades');
        //     $Nombres->where($data);

        //     return $Nombres->get()->getResultArray();
        // }

        public function actualice($data, $id){
            $Nombres = $this->db->table('clientes');
            $Nombres->set($data);

            $Nombres->where('id', $id);
            return $Nombres->update();
        }
        //     public function eliminar($data){
        //         $Nombres= $this->db->table('unidades');
        //         $Nombres->where($data);

        //         return $Nombres->delete();
        //     }

    }