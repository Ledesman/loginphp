<?php namespace App\Controllers;
   
   use App\Models\CategoriasModel;

class categorias extends BaseController
{

    public function __construct(){
       $this->categorias = new CategoriasModel();
    }

    public function index( $activo =1){

        $categorias = $this->categorias->where('activo', $activo)->findAll();
        $data =[
            'titulo' => 'Categorias', 'datos' => $categorias
        ];

        echo view('header');
        echo view('inicio');
        echo view('categorias', $data );
        echo view('footer');
    }

    public function eliminados ($activo =0){

        $categorias = $this->categorias->where('activo', $activo)->findAll();
        $data =[
            'titulo' => 'categorias Eliminados', 'datos' => $categorias
        ];

        echo view('header');
        echo view('inicio');
        echo view('categorias/eliminados', $data );
        echo view('footer');
    }
    public function reingresar($id){
    
        $this->categorias->update($id, ['activo' =>1]);
                return redirect()->to(base_url().'/categorias');
           
        }
    public function nuevo(){
        $data =[
            'titulo' => 'Creando Nuevo'
        ];
        echo view('header');
        echo view('inicio');
        echo view('categorias/nuevo', $data );
        echo view('footer');
    }

    public function insertar(){
        $datos =[
            "nombre" => $_POST['nombre'],
            
            
        ];
        $Crud = new  categoriasModel();

        $respuesta = $Crud->insertar($datos);
            return redirect()->to(base_url().'/categorias');
        
        // $this->categorias->save(['nombre' => $this->request->getPost('nombre'),
        // 'nombre_corto' => $this->request->getPost('nombre_corto')]);

        // return redirect()->to(base_url().'');
    }
    public function editar($id){
        $unidad = $this->categorias->where('id', $id)->first();
        $data =[
            'titulo' => 'Creando Nuevo', 'datos' => $unidad
        ];
        echo view('header');
        echo view('inicio');
        echo view('categorias/editar', $data );
        echo view('footer');
    }
   
    public function actualizar(){
        

        $this->categorias->update($this->request->getPost('id'), ['nombre' => $this->request->getPost('nombre'),
        ]);
                return redirect()->to(base_url().'/categorias');
       
    
        }

        public function eliminar($id){
    
            $this->categorias->update($id, ['activo' =>0]);
                    return redirect()->to(base_url().'/categorias');
               
            }


}    