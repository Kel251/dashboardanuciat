<?php

namespace Anunciate\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Anunciate\type_user;

class LoginController extends Controller
{
    public function login(){
    	return view('login');
    }

    public function valida(Request $request){
    	$correo = $request->input('email');
    	$pass = $request->input('pass');

    	$consulta = usuarios::where('correo','=',$correo)
    	->where('pass','=',$pass)->get();

    	if(count($consulta)==0 or $consulta[0]->activo == '0'){
    		return view('login');
    	}else{
    		$request->session()->put('session_id',$consulta[0]->id);
    		$request->session()->put('session_name',$consulta[0]->nombre);
    		$request->session()->put('session_tipo',$consulta[0]->tipo);

    		$session_id   = $request->session()->get('session_id',$consulta[0]->id);
    		$session_name = $request->session()->get('session_name',$consulta[0]->nombre);
    		$session_tipo = $request->session()->get('session_tipo',$consulta[0]->tipo);

    		return redirect()->route('v_usuarios');
     	}
    }

    public function logout(Request $request){
    	$request->session()->forget('session_id');
    	$request->session()->forget('session_name');
    	$request->session()->forget('session_tipo');
    }

    public function valofcontrol(){
    	$session_tipo = session('session_tipo');

    	if(($session_tipo = '1') or ($session_tipo = '2') or ($session_tipo = '3')){
    		$locations = usuarios::get();
    		return view('gmaps',compact('locations'));
    	}else{
    		return view('login');
    	}
    }
}
