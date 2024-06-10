<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Rol;


class UserController extends Controller
{
    public function index()
    {   $staff = User::where('rol_id', '<=', '2')->paginate(5);
        $cliente = User::where('rol_id','>','2')->paginate(10);
        $rol= Rol::all();
        
        return view('users.index', [
            'cliente' => $cliente, 'rol' => $rol, 'staff'=> $staff,
        ]);
    }


}
