<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fillial;
use App\Models\Pasport;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class SportAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $users = User::all();
        $passports = Pasport::all();
        $roles = Role::all();
        $fillials = Fillial::all();

        return view('index',[
            'users'=>$users,
            'passports'=>$passports,
            'roles'=>$roles,
            'fillials'=>$fillials
        ]);

    }

    public function admins(){
        $users = User::where('role_id','<', 3)->get();
        $passports = Pasport::all();
        $roles = Role::where('id','<', 3)->get();
        $fillials = Fillial::all();

        return view('Admin.admins',[
            'users'=>$users,
            'passports'=>$passports,
            'roles'=>$roles,
            'fillials'=>$fillials
        ]);
    }
    public function users(){
        $users = User::where('role_id', 3)->get();
        $passports = Pasport::all();
        $roles = Role::where('id', 3)->first();
        $fillials = Fillial::all();

        return view('User.users',[
            'users'=>$users,
            'passports'=>$passports,
            'role'=>$roles,
            'fillials'=>$fillials
        ]);
    }



}
