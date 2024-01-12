<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePosportRequest;
use App\Models\Fillial;
use App\Models\Pasport;
use App\Models\Role;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    public function passport(){
        return view('Admin.passport');
    }

    public function store(StorePosportRequest $request){

        $request->validated();

        $pasport = Pasport::create([
            'pnfl' => $request->pnfl,
            'pasport_seria'=>$request->pasport_seria,
            'pasport_seria_code' => $request->pasport_seria_code,
        ]);

        if ($pasport){
            $roles = Role::all();
            $fillials = Fillial::all();
            return view('Admin.register', [
                'roles'=> $roles,
                'fillials' => $fillials,
                'passport_id'=> $pasport->id
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function edit(){
        return view();
    }
}
