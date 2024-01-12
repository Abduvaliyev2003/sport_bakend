<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RegisterUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Models\Fillial;
use App\Models\Pasport;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        /*$this->middleware('auth:web', ['except'=> ['login', 'authenticate']]);*/
    }

    public function login(){
        $id = 2;
        $users = User::find($id);
      
        // $password  = $users->password;
       

        // dd(           $password );
        return view('Admin.login');
    }

    public function authenticate(LoginUserRequest $request)
    {
        $request->validated();
        $credentials = $request->only('login', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        
        return  redirect()->intended('/');
    }

    public function register(){
        return view('Admin.register');
    }

    public function create(RegisterUserRequest $request){
        $request->validated();

        $user = User::create([
            'login' => $request->login,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            'fillial_id' => $request->fillial_id,
            'pasport_id' => $request->passport_id
        ]);

        return redirect()->route('admins');
    }

    public function edit(User $user){
        $passports = Pasport::all();
        $roles = Role::all();
        $fillials = Fillial::all();
        return view('Admin.edit')
            ->with([
                'user'=>$user,
                'passposts'=>$passports,
                'roles'=>$roles,
                'fillials'=>$fillials
            ]);
    }

    public function update(Request $request){
        $request->validated();

        $user = User::update([
            'login' => $request->login,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            'fillial_id' => $request->fillial_id,
            'pasport_id' => $request->passport_id
        ]);

        return redirect()->route('admins');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
