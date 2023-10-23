<?php namespace App\Controllers;
   
//    use App\Models\CrudModel;

class Unidades extends BaseController
{
    public function index(){

        echo view('header');
        echo view('inicio');
        echo view('unidades' );
        echo view('footer');
    }


}    