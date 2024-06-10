<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Contacto;



class ContactoController extends Controller
{
   public function index(){
    $contactos = Contacto::where('id','>=', 1)->paginate(3);
    $users= User::all();
    return view('contacto.index',[
        'contactos'=>$contactos, 'users'=>$users 
    ]);
   } 
   
   public function create(){
    $user= User::all();
    return view('contacto.create', [
        'users'=> $user
    ]);
   }

   public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'consulta' => 'required|max:999999',
            
        ]);
        if ($validator->fails()) {
            return redirect()->route('contacto.create')->withErrors($validator)->withInput();
        }

        

        Contacto::create([
            'user_id' => $request->user_id,
            'consulta' => $request->consulta,
            
        ]);
        return redirect()->route('contacto.create')->with('status', 'La consulta se envio correctamente');

   
}
}