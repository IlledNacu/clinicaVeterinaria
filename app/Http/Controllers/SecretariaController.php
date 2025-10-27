<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secretarias = Secretaria::with('user')->get();
        return view('admin.secretarias.index', compact('secretarias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $datos = request()->all();
        // return response()->json($datos);
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'ci' => 'required|unique:secretarias',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
            'email' => 'required|max:250|unique:users',
            'password' => 'required|max:250|confirmed'
        ]);

        $usuario = new User();
        $usuario->name = $request->nombre;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request['password']);
        $usuario->save();

        $secretaria = new Secretaria();
        $secretaria->user_id = $usuario->id;
        $secretaria->nombre = $request->nombre;
        $secretaria->apellido = $request->apellido;
        $secretaria->ci = $request->ci;
        $secretaria->fecha_nacimiento = $request->fecha_nacimiento;
        $secretaria->direccion = $request->direccion;
        $secretaria->save();

        return redirect()->route('admin.secretarias.index')
            ->with('mensaje','Se registró a la secretaria de la manera correcta.')
            ->with('icono','success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Secretaria $secretaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Secretaria $secretaria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Secretaria $secretaria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Secretaria $secretaria)
    {
        //
    }
}
