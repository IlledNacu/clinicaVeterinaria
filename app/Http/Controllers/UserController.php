<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $usuarios = User::all();
        return view('admin.usuarios.index', compact('usuarios'));
    }

    public function create(){
        return view('admin.usuarios.create');
    }

    public function store(Request $request){
        // $datos = request()->all();
        // return response()->json($datos);
        $request->validate([
            'name'=>'required|max:250',
            'email'=>'required|max:250|unique:users',
            'password'=>'required|max:250|confirmed',
        ]); //qué pasa con el password_confirmation? cómo funciona esto?
        //porque para que confirmed tenga efecto, el verificador de contraseña (en el repetir) tiene que decir name="password_confirmation", si no no anda
        //y cómo me aseguro que si alguien le saca el required al html, el verificador lo va a seguir teniendo si no se lo aclaro desde acá?

        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request['password']);
        $usuario->save();

        return redirect()->route('admin.usuarios.index')
            ->with('mensaje', 'Se registró el usuario correctamente')
            ->with('icono', 'success');
    }

    public function show($id){
        $usuario = User::findOrFail($id); //el OrFail hace que se muestre un error 404 si no existe ese ID
        return view('admin.usuarios.show', compact('usuario'));
    }

    public function edit($id){
        $usuario = User::findOrFail($id);
        return view('admin.usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id){
        $usuario = User::find($id); //Acá no es necesario OrFail porque ya va a haber sido filtrado en edit
        //Este find se hace antes del validate en este caso solo porque lo necesitamos en el validate
        $request->validate([
            'name'=>'required|max:250',
            'email'=>'required|max:250|unique:users,email,'.$usuario->id,
            'password'=>'nullable|max:250|confirmed',
        ]);
        if($request->filled('name')){
            $usuario->name = $request->name;
        }
        if($request->filled('email')){
            $usuario->email = $request->email;
        }
        if($request->filled('password')){
            $usuario->password = Hash::make($request['password']);
        }
        $usuario->save();
        return redirect()->route('admin.usuarios.index')
            ->with('mensaje', 'Se actualizó el usuario correctamente')
            ->with('icono', 'success');
    }

    public function confirmDelete($id){
        $usuario = User::findOrFail($id);
        return view('admin.usuarios.delete', compact('usuario'));
    }

    public function destroy($id){
        User::destroy($id);
        return redirect()->route('admin.usuarios.index')
            ->with('mensaje', 'Se eliminó el usuario correctamente')
            ->with('icono', 'success');
    }

}
