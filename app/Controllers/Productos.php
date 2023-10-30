<?php namespace App\Controllers;
   
   use App\Models\ProductosModel;

class Productos extends BaseController
{

    public function __construct(){
       $this->productos = new ProductosModel();
    }

    public function index( $activo =1){

        $productos = $this->productos->where('activo', $activo)->findAll();
        $data =[
            'titulo' => 'productos', 'datos' => $productos
        ];

        echo view('header');
        echo view('inicio');
        echo view('productos', $data );
        echo view('footer');
    }

    public function eliminados ($activo =0){

        $productos = $this->productos->where('activo', $activo)->findAll();
        $data =[
            'titulo' => 'productos Eliminados', 'datos' => $productos
        ];

        echo view('header');
        echo view('inicio');
        echo view('productos/eliminados', $data );
        echo view('footer');
    }
    public function reingresar($id){
    
        $this->productos->update($id, ['activo' =>1]);
                return redirect()->to(base_url().'/productos');
           
        }
    public function nuevo(){
        $data =[
            'titulo' => 'Creando Nuevo'
        ];
        echo view('header');
        echo view('inicio');
        echo view('productos/nuevo', $data );
        echo view('footer');
    }

    public function insertar(){
       if ($this->request->getMethod()=="post" && $this->validate(['nombre' =>'required',
       'nombre_corto' =>'required'])) {
           $datos =[
            "nombre" => $_POST['nombre'],
            "nombre_corto" => $_POST['nombre_corto'],
            
        ];
        $Crud = new  productosModel();

        $respuesta = $Crud->insertar($datos);
            return redirect()->to(base_url().'/productos');
       }else{
        $data =[
            'titulo' => 'Creando Nuevo', 'validation'=>$this->validator
        ];
        echo view('header');
        echo view('inicio');
        echo view('productos/nuevo', $data );
        echo view('footer');
       }

       
    
        
        // $this->productos->save(['nombre' => $this->request->getPost('nombre'),
        // 'nombre_corto' => $this->request->getPost('nombre_corto')]);

        // return redirect()->to(base_url().'');
    }
    public function editar($id){
        $unidad = $this->productos->where('id', $id)->first();
        $data =[
            'titulo' => 'Creando Nuevo', 'datos' => $unidad
        ];
        echo view('header');
        echo view('inicio');
        echo view('productos/editar', $data );
        echo view('footer');
    }
   
    public function actualizar(){
        

        $this->productos->update($this->request->getPost('id'), ['nombre' => $this->request->getPost('nombre'),
        'nombre_corto' => $this->request->getPost('nombre_corto')]);
                return redirect()->to(base_url().'/productos');
       
    
        }

        public function eliminar($id){
    
            $this->productos->update($id, ['activo' =>0]);
                    return redirect()->to(base_url().'/productos');
               
            }


}    