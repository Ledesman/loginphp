<?php namespace App\Controllers;
   
   use App\Models\ProductosModel;
   use App\Models\CategoriasModel;
   use App\Models\UnidadesModel;


class Productos extends BaseController
{

    public function __construct(){
       $this->productos = new ProductosModel();
       $this->categorias = new CategoriasModel();
       $this->unidades = new UnidadesModel();

    }

    public function index( $estado =1){

        $productos = $this->productos->where('estado', $estado)->findAll();
        $data =[
            'titulo' => 'Productos', 'datos' => $productos
        ];

        echo view('header');
        echo view('inicio');
        echo view('productos', $data );
        echo view('footer');
    }

    public function eliminados ($estado =0){

        $productos = $this->productos->where('estado', $estado)->findAll();
        $data =[
            'titulo' => 'productos Eliminados', 'datos' => $productos
        ];

        echo view('header');
        echo view('inicio');
        echo view('productos/eliminados', $data );
        echo view('footer');
    }
    public function reingresar($id){
    
        $this->productos->update($id, ['estado' =>1]);
                return redirect()->to(base_url().'/productos');
           
        }
    public function nuevo(){
        $categorias = $this->categorias->where('estado', 1)->findAll();
        $unidades = $this->unidades->where('activo', 1)->findAll();
        $data =[
            'titulo' => 'Creando Nuevo Producto', 'unidades'=>$unidades, 'categorias'=>$categorias
        ];
        echo view('header');
        echo view('inicio');
        echo view('productos/nuevo', $data );
        echo view('footer');
    }

    public function insertar(){
       if ($this->request->getMethod()=="post" ) {
           $datos =[
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST['descripcion'],
            "imagen" => $_POST['imagen'],
            "cantidad" => $_POST['cantidad'],
            "precio" => $_POST['precio'],
            "id_unidad" => $_POST['id_unidad'],
            "id_categoria" => $_POST['id_categoria'],

            
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
    }
    public function editar($id){
        $categorias = $this->categorias->where('estado', 1)->findAll();
        $unidades = $this->unidades->where('activo', 1)->findAll();
        $producto = $this->productos->where('id', $id)->first();
        $data =[
            'titulo' => 'Editando Productos', 'producto' => $producto, 'unidades'=>$unidades, 'categorias'=>$categorias
        ];
        echo view('header');
        echo view('inicio');
        echo view('productos/editar', $data );
        echo view('footer');
    }
   
    public function actualizar(){
        

        $this->productos->update($this->request->getPost('id'), [
            'nombre' => $this->request->getPost('nombre'),
        'descripcion' => $this->request->getPost('descripcion'),
        'imagen' => $this->request->getPost('imagen'),
        'cantidad' => $this->request->getPost('cantidad'),
        'precio' => $this->request->getPost('precio'),
        'id_unidad' => $this->request->getPost('id_unidad'),
        'id_categoria' => $this->request->getPost('id_categoria')]);
                return redirect()->to(base_url().'/productos');
       
    
        }

        public function eliminar($id){
    
            $this->productos->update($id, ['estado' =>0]);
                    return redirect()->to(base_url().'/productos');
               
            }


}    