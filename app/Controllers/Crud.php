<?php namespace App\Controllers;
   
   use App\Models\CrudModel;

class Crud extends BaseController
{
    public function index(){


        $Crud = new CrudModel();
    $datos = $Crud->listarNombres();

    $mensaje = session('mensaje');
      
    $data =[
            "datos" => $datos,
            "mensaje" =>$mensaje
        ];

        echo view('header');
        echo view('inicio');
        echo view('listado', $data );
        echo view('footer');

    }
// public function guardar(){
//     $Crud = new CrudModel();
    

//     if ($imagen=$this->request->getFile('imagen')) {
//         $nuevoNombre = $imagen->getRandonName();
//         $imagen->move('../public/imagen/',$nuevoNombre);
//         $datos=[
//             'nombre'=>$this->request->getVar('nombre'),
//             'imagen'=>$nuevoNombre
//         ];
//         $Crud->insert($datos);
//     }

// }
    public function actualizar(){
        $datos =[
            
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST['descripcion'],
            "imagen" => $_POST['imagen'],
            "cantidad" => $_POST['cantidad'],
            "precio" => $_POST['precio'],
        ];
       $id  = $_POST['id'];

        $Crud = new CrudModel();

        $respuesta = $Crud->actualizar($datos, $id);

        if ($respuesta) {
            return redirect()->to(base_url().'/listado')->with('mensaje', '2');
        } else{
            return redirect()->to(base_url().'/listado')->with('mensaje', '3');

        } 
    
    }

    public function crear(){
        $datos =[
            "nombre" => $_POST['nombre'],
            "descripcion" => $_POST['descripcion'],
            "imagen" => $_POST['imagen'],
            "cantidad" => $_POST['cantidad'],
            "precio" => $_POST['precio'],
        ];
        $Crud = new CrudModel();

        $respuesta = $Crud->insertar($datos);

        if ($respuesta > 0) {
            return redirect()->to(base_url().'/listado')->with('mensaje', '1');
        } else{
            return redirect()->to(base_url().'/listado')->with('mensaje', '0');

        }

    }

    public function obtenerNombre($id){
       
        $data =[
            'id' => $id
       ];
       $Crud = new CrudModel();

       $respuesta = $Crud->obtenerNombre($data);

       $datos =[
                "datos" =>$respuesta
       ];
        return view('actualizar', $datos);
    }

    public function eliminar($id){
       
        $Crud = new CrudModel();
        $data =[
            'id' => $id
       ];
       $respuesta = $Crud->eliminar($data);

       if ($respuesta > 0) {
        return redirect()->to(base_url().'/listado')->with('mensaje', '4');
    } else{
        return redirect()->to(base_url().'/listado')->with('mensaje', '5');

    }
    }
 
}