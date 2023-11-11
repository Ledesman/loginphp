<?php namespace App\Models;
    use CodeIgniter\Model;
    
    class CajasModel extends Model {
        protected $table      = 'cajas';
        protected $primaryKey = 'id';
    
        protected $useAutoIncrement = true;
    
        protected $returnType     = 'array';
        protected $useSoftDeletes = false;
    
        protected $allowedFields = ['numero_caja', 'nombre', 'folio ','activo'];
    
        // Dates
        protected $useTimestamps = true;
        protected $dateFormat    = 'datetime';
        protected $createdField  = 'fecha_alta';
        protected $updatedField  = 'fecha_midifica';
        protected $deletedField  = 'deleted_at';
    
        // Validation
        protected $validationRules      = [];
        protected $validationMessages   = [];
        protected $skipValidation       = false;
        protected $cleanValidationRules = true;
    
     public function insertar($datos){
             $Nombres = $this->db->table('cajas');
             $Nombres->insert($datos);

             return $this->db->insertID();
         }
        // public function obtenerNombre($data){
        //     $Nombres = $this->db->table('unidades');
        //     $Nombres->where($data);

        //     return $Nombres->get()->getResultArray();
        // }

        public function actualice($data, $id){
            $Nombres = $this->db->table('cajas');
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