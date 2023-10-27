<?php namespace App\Controllers;
   
   use App\Models\UnidadesModel;

class Unidades extends BaseController
{

    public function __construct(){
       $this->unidades = new UnidadesModel();
    }

    public function index( $activo =1){

        $unidades = $this->unidades->where('activo', $activo)->findAll();
        $data =[
            'titulo' => 'unidades', 'datos' => $unidades
        ];

        echo view('header');
        echo view('inicio');
        echo view('unidades', $data );
        echo view('footer');
    }

    public function eliminados ($activo =0){

        $unidades = $this->unidades->where('activo', $activo)->findAll();
        $data =[
            'titulo' => 'unidades Eliminados', 'datos' => $unidades
        ];

        echo view('header');
        echo view('inicio');
        echo view('unidades/eliminados', $data );
        echo view('footer');
    }
    public function reingresar($id){
    
        $this->unidades->update($id, ['activo' =>1]);
                return redirect()->to(base_url().'/unidades');
           
        }
    public function nuevo(){
        $data =[
            'titulo' => 'Creando Nuevo'
        ];
        echo view('header');
        echo view('inicio');
        echo view('unidades/nuevo', $data );
        echo view('footer');
    }

    public function insertar(){
        $datos =[
            "nombre" => $_POST['nombre'],
            "nombre_corto" => $_POST['nombre_corto'],
            
        ];
        $Crud = new  UnidadesModel();

        $respuesta = $Crud->insertar($datos);
            return redirect()->to(base_url().'/unidades');
        
        // $this->unidades->save(['nombre' => $this->request->getPost('nombre'),
        // 'nombre_corto' => $this->request->getPost('nombre_corto')]);

        // return redirect()->to(base_url().'');
    }
    public function editar($id){
        $unidad = $this->unidades->where('id', $id)->first();
        $data =[
            'titulo' => 'Creando Nuevo', 'datos' => $unidad
        ];
        echo view('header');
        echo view('inicio');
        echo view('unidades/editar', $data );
        echo view('footer');
    }
   
    public function actualizar(){
        

        $this->unidades->update($this->request->getPost('id'), ['nombre' => $this->request->getPost('nombre'),
        'nombre_corto' => $this->request->getPost('nombre_corto')]);
                return redirect()->to(base_url().'/unidades');
       
    
        }

        public function eliminar($id){
    
            $this->unidades->update($id, ['activo' =>0]);
                    return redirect()->to(base_url().'/unidades');
               
            }


}    