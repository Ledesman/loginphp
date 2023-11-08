<?php namespace App\Controllers;
   
   use App\Models\ConfiguracionModel;

class Configuracion extends BaseController
{

    protected $reglas;

    public function __construct(){
       $this->configuracion = new ConfiguracionModel();

       helper(['form']);
       $this->reglas = 
       ['nombre' =>[
         'rules' => 'required',
         'errors' =>[
            'required' => 'El campo {field} es obligatorio.'
         ]
         ],
    
       
         ];
       
    }
    public function nuevo(){
        $data =[
            'titulo' => 'Creando Nuevo'
        ];
        echo view('header');
        echo view('inicio');
        echo view('configuracion/nuevo', $data );
        echo view('footer');
    }


    public function index( $activo =1){
        $config = $this->configuracion->where('activo', $activo)->findAll();
        $data =[
            'titulo' => 'configuraciones', 'datos' => $config
        ];

        echo view('header');
        echo view('inicio');
        echo view('configuracion', $data );
        echo view('footer');
    }


    public function editar($id, $valid=null){

        $config = $this->configuracion->where('id', $id)->first();
        if ($valid != null) {
             $data =[
            'titulo' => 'Actualizado', 'datos' => $config, 'validation' =>$valid
        ];
        }else{
            $data =[
                'titulo' => 'Nuevos Cambios', 'datos' => $config
            ];
        }
        
       
        echo view('header');
        echo view('inicio');
        echo view('configuracion/editar', $data );
        echo view('footer');
    }
   
    public function actualizar(){
       
        if ($this->request->getMethod()=="post" && $this->validate($this->reglas)) {
            $this->configuracion->update($this->request->getPost('id'), [
                'nombre' => $this->request->getPost('nombre'),
            'Tiket_leyenda' => $this->request->getPost('Tiket_leyenda'),
            'Tienda_rfc' => $this->request->getPost('Tienda_rfc'),
            'Tienda_telefono' => $this->request->getPost('Tienda_telefono'),
            'Tienda_email' => $this->request->getPost('Tienda_email'),
            'Tienda_direccion' => $this->request->getPost('Tienda_direccion'),
            ]);
           
        return redirect()->to(base_url().'/configuracion');
            }
            else{
                return $this->editar($this->request->getPost('id'), $this->validator);
            }
        
        //}
       // $this->configuracion->update($this->request->getPost('id'), [
         //   'tienda_nombre' => $this->request->getPost('tienda_nombre'),
            //  ]);
            // return redirect()->to(base_url().'/configuracion');
       // }
        
    
        }

       


}    