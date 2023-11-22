<?php namespace App\Models;
    use CodeIgniter\Model;
    
    class ProductosModel extends Model {
        protected $table      = 'productos';
        protected $primaryKey = 'id';
    
        protected $useAutoIncrement = true;
    
        protected $returnType     = 'array';
        protected $useSoftDeletes = false;
    
        protected $allowedFields = ['codigo','nombre', 'descripcion', 'imagen',
         'cantidad', 'precio', 'id_unidad', 'id_categoria','estado'];
    
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
             $Nombres = $this->db->table('productos');
             $Nombres->insert($datos);

             return $this->db->insertID();
         }
        public function get_producto($codigo){
            $sql= "SELECT * FROM productos WHERE codigo='$codigo';";
            
            $query = $this->db->query($sql);
            $result->$query->getResult();

            if (count($result) > 1) {
                return $result;
            }else{
                return NULL;
            }

            return $Nombres->get()->getResultArray();
        }

        public function actualice($data, $id){
           
            $Nombres = $this->db->table('productos');
            $Nombres->set($data);

            $Nombres->where('id', $id);
            return $Nombres->update();
        }
        public function porCodigoDeBarras($codigoDeBarras){
            return $this->db->get_where("productos", array("codigo" => $codigoDeBarras))->row();
        }

    }