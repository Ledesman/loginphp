<?php namespace App\Controllers;

   use App\Models\UsuariosModel;
   use App\Models\CajasModel;
   use App\Models\RolesModel;

class Usuarios extends BaseController
{

    protected $reglas, $cajas, $roles,
    $reglasLogin;

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

    }

    public function index( $activo =1){

        $usuarios = $this->usuarios->where('activo', $activo)->findAll();
        $data =[
            'titulo' => 'Usuarios', 'datos' => $usuarios
        ];

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
                "nombre"=> $_POST['nombre'],
                 "id_caja" => $_POST['id_caja'],
                "id_rol" => $_POST['id_rol'],
                'activo' => 1
    
    
            ];

        //   $this->usuarios->save([
        //     'usuario'=>$this->request->getPost('usuario'),
        //     'password'=> $hash,
        //     'id_caja'=>$this->request->getPost('id_caja'),
        //     'id_rol'=>$this->request->getPost('id_rol'),
        //     'activo' => 1

        //   ]);
          //return redirect()->to(base_url().'/usuarios');
        
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

        $unidad = $this->usuarios->where('id_usuario', $id)->first();
        if ($valid != null) {
             $data =[
            'titulo' => 'Editando Usuario', 'datos' => $unidad, 'validation' =>$valid
        ];
        }else{
            $data =[
                'titulo' => 'Editando Nuevo Usuario', 'datos' => $unidad
            ];
        }


        echo view('header');
        echo view('inicio');
        echo view('usuarios/editar', $data );
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
                                "id_usuario" => $datosUsuario['id_usuario '],
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
}