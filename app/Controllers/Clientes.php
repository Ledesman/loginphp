<?php namespace App\Controllers;
   
   use App\Models\ClientesModel;

class clientes extends BaseController
{
    protected $clientes;

    public function __construct(){
       $this->clientes = new ClientesModel();
       
       helper(['form']);
       $this->reglas = 
       ['nombre' =>[
         'rules' => 'required',
         'errors' =>[
            'required' => 'El campo {field} es obligatorio.'
         ]
         ]
         ];
       
    }

    public function index($activo =1){

        $clientes = $this->clientes->where('activo', $activo)->findAll();
        $data =[
            'titulo' => 'Clientes', 'datos' => $clientes
        ];

        echo view('header');
        echo view('inicio');
        echo view('clientes', $data );
        echo view('footer');
    }

    public function eliminados ($activo =0){

        $clientes = $this->clientes->where('activo', $activo)->findAll();
        $data =[
            'titulo' => 'Clientes Eliminados', 'datos' => $clientes
        ];

        echo view('header');
        echo view('inicio');
        echo view('clientes/eliminados', $data );
        echo view('footer');
    }
    public function reingresar($id){
    
        $this->clientes->update($id, ['activo' =>1]);
                return redirect()->to(base_url().'/clientes');
           
        }
    public function nuevo(){
        $data =[
            'titulo' => 'Creando Nuevo Cliente'
        ];
        echo view('header');
        echo view('inicio');
        echo view('clientes/nuevo', $data );
        echo view('footer');
    }

    public function insertar(){
        if ($this->request->getMethod()=="post" && $this->validate($this->reglas)) {
            $datos =[
             "nombre" => $_POST['nombre'],
             "direccion" => $_POST['direccion'],
             "telefono" => $_POST['telefono'],
             "correo" => $_POST['correo'],

             
         ];
         $Crud = new  ClientesModel();
 
         $respuesta = $Crud->insertar($datos);
             return redirect()->to(base_url().'/clientes');
        }else{
         $data =[
             'titulo' => 'Creando Nuevo', 'validation'=>$this->validator
         ];
         echo view('header');
         echo view('inicio');
         echo view('clientes/nuevo', $data );
         echo view('footer');
        }
    }
    public function editar($id){
        $cliente = $this->clientes->where('id', $id)->first();
        $data =[
            'titulo' => 'Editanto Cliente', 'datos' => $cliente
        ];
        echo view('header');
        echo view('inicio');
        echo view('clientes/editar', $data );
        echo view('footer');
    }
   
    public function actualizar(){
        if ($this->request->getMethod()=="post" && $this->validate($this->reglas)) {

            $this->clientes->update($this->request->getPost('id'), [
                'nombre' => $this->request->getPost('nombre'),
                'direccion' => $this->request->getPost('direccion'),
                'telefono' => $this->request->getPost('telefono'),
                'correo' => $this->request->getPost('correo')
        ]);
        return redirect()->to(base_url().'/clientes');
            }
            else{
                return $this->editar($this->request->getPost('id'), $this->validator);
            }
        
        }

        public function eliminar($id){
    
            $this->clientes->update($id, ['activo' =>0]);
                    return redirect()->to(base_url().'/clientes');
               
            }


}    