<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }
    public function store(Request $request) {
        // dd($request);
        $request->request->add(['identificacion'=>Str::slug($request->identificacion)]);

        $this->validate($request, [
            'name'=> 'required | min:3',
            'apellidos'=> 'required | min:3',
            'identificacion'=> 'required | min:5 | unique:users',
            'email'=> 'required | min:5',
            'password'=> 'required | min:3'
        ]);

        User::create([
            'name'=> $request->name,
            'apellidos'=> $request->apellidos,
            'identificacion'=> $request->identificacion,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        //autenticar
        // auth()->attempt([
        //     'email'=>$request->email,
        //     'password'=>$request->password
        // ]);

        auth()->attempt($request->only('email','password'));

        //redireccionar
        return redirect() -> route('post.index');
    }
}
