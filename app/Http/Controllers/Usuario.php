<?php //Crearlo con Laravel y luego hacer esto; con el nombre correspondiente y cambiarlo en las rutas
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller {
    public function index() {
        return view('admin.usuarios.index');
    }
}