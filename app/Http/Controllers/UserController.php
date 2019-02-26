<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
	//Aqui esta toda la logica del proyecto. 
    public function index()
    {
    	
        $idusuario = \Auth::user()->id;

         $usuariologeado = User::where('id',$idusuario)->get();
        //dd($usuariologeado);

        $usuarios = User::all();
        return view('usuarios.inicio', compact('usuarios','usuariologeado'));
    }






    public function complementos()
    {
        return view('usuarios.inicio');
    }

    public function store(Request $request)
    {
        //dd($request);
    	$user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->foto = 2;
        $user->username = $request->xxx2;
        $user->save();

        return redirect('crudLaravel');
    }

    public function edit($id)
    {
        $usuario = User::find($id);

        return view('usuarios.actualizar', compact('usuario'));
    }

public function update(Request $request, $id)
    {
        $usuario = User::find($id);

        $usuario->username = $request->username;
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->save(); 

        return redirect('crudLaravel');
    }

    public function destroy($id)
    {
        //dd($id);
        $usuario = User::find($id);

        $usuario->delete();

        return redirect('crudLaravel');
    }

}
