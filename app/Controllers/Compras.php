<?php namespace App\Controllers;
   
   use App\Models\ComprasModel;
   use App\Models\ProductosModel;

class Compras extends BaseController
{

    protected $reglas;

    public function __construct(){
       $this->compras = new ComprasModel();
       helper(['form']);
     
       
    }

    public function index( $activo =1){

        $compras = $this->compras->where('activo', $activo)->findAll();
        $data =[
            'titulo' => 'compras', 'datos' => $compras
        ];

        echo view('header');
        echo view('inicio');
        echo view('compras', $data );
        echo view('footer');
    }

    public function eliminados ($activo =0){

        $compras = $this->compras->where('activo', $activo)->findAll();
        $data =[
            'titulo' => 'compras Eliminados', 'datos' => $compras
        ];

        echo view('header');
        echo view('inicio');
        echo view('compras/eliminados', $data );
        echo view('footer');
    }
    public function reingresar($id){
    
        $this->compras->update($id, ['activo' =>1]);
                return redirect()->to(base_url().'/compras');
           
        }
    public function nuevo(){
        $data =[
            'titulo' => 'Creando Nuevo Compra'
        ];
        echo view('header');
        echo view('inicio');
        echo view('compras/nuevo', $data);
        echo view('footer');
    }

    public function insertar(){
       if ($this->request->getMethod()=="post" && $this->validate($this->reglas)) {
           $datos =[
            "nombre" => $_POST['nombre'],
            "nombre_corto" => $_POST['nombre_corto'],
            
        ];
        $Crud = new  UnidadesModel();

        $respuesta = $Crud->insertar($datos);
            return redirect()->to(base_url().'/compras');
       }else{
        $data =[
            'titulo' => 'Creando Nuevo', 'validation'=>$this->validator
        ];
        echo view('header');
        echo view('inicio');
        echo view('compras/nuevo', $data );
        echo view('footer');
       }

       
    
        
        // $this->compras->save(['nombre' => $this->request->getPost('nombre'),
        // 'nombre_corto' => $this->request->getPost('nombre_corto')]);

        // return redirect()->to(base_url().'');
    }
    public function editar($id, $valid=null){

        $unidad = $this->compras->where('id', $id)->first();
        if ($valid != null) {
             $data =[
            'titulo' => 'Creando Nuevo', 'datos' => $unidad, 'validation' =>$valid
        ];
        }else{
            $data =[
                'titulo' => 'Creando Nuevo', 'datos' => $unidad
            ];
        }
        
       
        echo view('header');
        echo view('inicio');
        echo view('compras/editar', $data );
        echo view('footer');
    }
   
    public function actualizar(){
        if ($this->request->getMethod()=="post" && $this->validate($this->reglas)) {

        $this->compras->update($this->request->getPost('id'), ['nombre' => $this->request->getPost('nombre'),
        'nombre_corto' => $this->request->getPost('nombre_corto')]);
                return redirect()->to(base_url().'/compras');
        }
        else{
            return $this->editar($this->request->getPost('id'), $this->validator);
        }
       
    
        }

        public function eliminar($id){
    
            $this->compras->update($id, ['activo' =>0]);
                    return redirect()->to(base_url().'/compras');
               
            }
            // public function buscarPorCodigo(){

            //     $valor= trim($this->request->getPost('valor')); 
                
            //     $data = $this->ProductosModel->get_producto($valor);
            //      echo json_encode($data);
         
            //  }

}    