<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }
    public function registrar(RegisterRequest $request)
    {
        Log::info($request->all()); 
        $cuenta = new User();
        $cuenta->rut = $request->rut;
        $cuenta->password = $request->password;
        $cuenta->nombre = $request->nombre;
        $cuenta->apellido = $request->apellido;
        //bcrypt($request->password);
        $cuenta->save();
        Auth::login($cuenta);
        return redirect()->route('test.register');
        
    }
    public function test()
    {
        return view('auth.test');
    }
}