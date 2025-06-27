<?php //Crearlo con Laravel y luego hacer esto; con el nombre correspondiente y cambiarlo en las rutas
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usuario extends Controller {
    public function index() {
        $usuarios = User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }
}