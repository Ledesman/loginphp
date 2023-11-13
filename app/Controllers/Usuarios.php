<?php namespace App\Controllers;

   use App\Models\UsuariosModel;
   use App\Models\CajasModel;
   use App\Models\RolesModel;

class Usuarios extends BaseController
{

    protected $reglas, $cajas, $roles,
    $reglasLogin, $reglasCambia;

    public function __construct(){
       $this->usuarios = new UsuariosModel();
       $this->cajas = new CajasModel();
       $this->roles = new RolesModel();


       helper(['form']);
       $this->reglas =
       ['usuario' =>[
        'rules' => 'required| is_unique[usuario.usuario]',
        'errors' =>[
           'required' => 'El campo {field} es obligatorio.',
           'is_unique' => 'El campo {field} debe ser unico.'
         ]
         ],
       'password' =>[
        'rules' => 'required',
        'errors' =>[
           'required' => 'El campo {field} es obligatorio.'
        ]
        ],

         'nombre' =>[
          'rules' => 'required',
          'errors' =>[
             'required' => 'El campo {field} es obligatorio.'
          ]
          ],

          'id_caja' =>[
           'rules' => 'required',
           'errors' =>[
              'required' => 'El campo {field} es obligatorio.'
           ]
           ],

           'id_rol' =>[
            'rules' => 'required',
            'errors' =>[
               'required' => 'El campo {field} es obligatorio.'
            ]
            ]
         ];
         $this->reglasLogin =
       ['usuario' =>[
        'rules' => 'required',
        'errors' =>[
           'required' => 'El campo {field} es obligatorio.'
          
         ]
         ],
       'password' =>[
        'rules' => 'required',
        'errors' =>[
           'required' => 'El campo {field} es obligatorio.'
        ]
        ]
         ];
         $this->reglasCambia =
         ['type' =>[
          'rules' => 'required',
          'errors' =>[
             'required' => 'El campo {field} es obligatorio.'
            
           ]
           ],
         'password' =>[
          'rules' => 'required',
          'errors' =>[
             'required' => 'El campo {field} es obligatorio.'
          ]
          ]
           ];

    }

    public function versesio(){
        $mensaje = session('mensaje');

        return view('usuarios', ["mensaje" => $mensaje ]);
    }
    public function index( $activo =1){
      

        $usuario = $this->usuarios->where('activo', $activo)->findAll();
        
        $data =[
            'titulo' => 'Usuarios', 'datos' => $usuario
        ];
        $session = session();
        $session->set($data);

        echo view('header');
        echo view('inicio');
         echo view('usuarios', $data );
        echo view('footer'); 
  
    }

        


    public function eliminados ($activo =0){

        $usuarios = $this->usuarios->where('activo', $activo)->findAll();
        $data =[
            'titulo' => 'usuarios Eliminados', 'datos' => $usuarios
        ];

        echo view('header');
        echo view('inicio');
        echo view('usuarios/eliminados', $data );
        echo view('footer');
    }
    public function reingresar($id){

        $this->usuarios->update($id, ['activo' =>1]);
                return redirect()->to(base_url().'/usuarios');

        }
    public function nuevo(){
        $cajas = $this->cajas->where('activo', 1)->findAll();
        $roles = $this->roles->where('activo', 1)->findAll();

        $data =[
            'titulo' => 'Creando Nuevo Usuario','cajas' =>$cajas,'roles' =>$roles
        ];
        echo view('header');
        echo view('inicio');
        echo view('usuarios/nuevo', $data );
        echo view('footer');
    }

    public function insertar(){
        if ($this->request->getMethod()=="post" && $this->validate($this->reglas)) {
            $hash= password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
            $datos =[
                "usuario" => $_POST['usuario'],
                "password"=> $hash,
                "type"=> $_POST['type'],
                 "id_caja" => $_POST['id_caja'],
                "id_rol" => $_POST['id_rol'],
                'activo' => 1
    
    
            ];
        
        $Crud = new  UsuariosModel();

        $respuesta = $Crud->insertar($datos);
            return redirect()->to(base_url().'/usuarios');
       }else{
        $cajas = $this->cajas->where('activo', 1)->findAll();
        $roles = $this->roles->where('activo', 1)->findAll();

        $data =[
            'titulo' => 'Creando Nuevo Usuario','cajas' =>$cajas,'roles' =>$roles,
            'validation' =>$this->validator
        ];
        echo view('header');
        echo view('inicio');
        echo view('usuarios/nuevo', $data );
        echo view('footer');
       }

        // $this->usuarios->save(['nombre' => $this->request->getPost('nombre'),
        // 'nombre_corto' => $this->request->getPost('nombre_corto')]);

        // return redirect()->to(base_url().'');
    }
    public function editar($id, $valid=null){
      
        $sesion = session();

        $usuario = $this->usuarios->where('id_usuario', $id)->first();
         $cajas = $this->cajas->where('activo', 1)->findAll();
         $roles = $this->roles->where('activo', 1)->findAll();

        $data =[
            'titulo' => 'Editando Usuario', 'usuario'=> $usuario,'cajas' =>$cajas,'roles' =>$roles,
        ];
        echo view('header');
        echo view('inicio');
        echo view('usuarios/nuevo', $data );
        echo view('footer');
    }

    public function actualizar(){
        if ($this->request->getMethod()=="post" && $this->validate($this->reglas)) {

        $this->usuarios->update($this->request->getPost('id'), ['nombre' => $this->request->getPost('nombre'),
        'nombre_corto' => $this->request->getPost('nombre_corto')]);
                return redirect()->to(base_url().'/usuarios');
        }
        else{
            return $this->editar($this->request->getPost('id'), $this->validator);
        }


        }

        public function eliminar($id){

            $this->usuarios->update($id, ['activo' =>0]);
                    return redirect()->to(base_url().'/usuarios');

            }
            public function login(){
                echo view('loginP');
            }
    public function valida(){
                if ($this->request->getMethod()=="post" && $this->validate($this->reglasLogin)) {
                    $usuario = $this->request->getPost('usuario');
                    $password = $this->request->getPost('password');
                    $datosUsuario = $this->usuarios->where('usuario', $usuario)->first();
                    
                    if ($datosUsuario =! null) {
                        if (password_verify($password, $datosUsuario['password'])) {
                            $datosSession =[
                                "id_usuario" => $datosUsuario['id_usuario'],
                              "type" => $datosUsuario['type'],
                              "id_caja" => $datosUsuario['id_caja'],
                              "id_rol" => $datosUsuario['id_rol']
                            ];
        
                            $sesion = session();
                            $sesion->set($datosSession);
                            return redirect()->to(base_url('/inicio'));
        
                        }else {
                            $data['error']= "El usuario no existe";
                            echo view('login', $data);
                        }
        
                    }else {
                        $data['error']= "contraseña incorrecata";
                        echo view('login', $data);
                    }
                }else{
                    $data=[
                        'validation' =>$this->validator
                    ];
                    echo view('login', $data);
                }
     }
     public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
     }
     public function cambiaPassword($activo =1){
        $session = session();
        // $session->set($data);
        $usuario = $this->usuarios->where('activo', $activo)->first();
         
        $data =[
            'titulo' => 'Cambio Contraseña de Usuario', 'usuario'=> $usuario
        ];
       
        echo view('header');
        echo view('inicio');
        echo view('cambia_password', $data );
        echo view('footer');
     }

     public function actualizar_pass($activo =1){
        if ($this->request->getMethod()=="post" && $this->validate($this->reglasCambia)) {
            $sesion = session();
            $idUsuario = $sesion->id_usuario;

 $hash= password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

            $this->usuarios->update($this->request->getPost($idUsuario), 
            [
                'password' => $hash,
                'type' => $this->request->getPost('type'),

        ]);
                 
       // $usuario = $this->usuarios->where('id_usuario', $sesion->id_usuario)->first();
        $usuario = $this->usuarios->where('activo', $activo)->first();
         
        $data =[
            'titulo' => 'Cambio Contraseña de Usuario', 'usuario'=> $usuario,'mensaje'=>
            'cambio de contraseña correcto'
        ];
       
        echo view('header');
        echo view('inicio');
        echo view('cambia_password', $data );
        echo view('footer');
       }else{
        $session = session();
        // $session->set($data);
        $usuario = $this->usuarios->where('activo', $activo)->first();
         
        $data =[
            'titulo' => 'Cambio Contraseña de Usuario', 'usuario'=> $usuario,
            'validation' => $this->validator
        ];
       
        echo view('header');
        echo view('inicio');
        echo view('cambia_password', $data );
        echo view('footer');
       }

     }

}