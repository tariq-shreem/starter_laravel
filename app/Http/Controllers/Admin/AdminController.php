<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;

class AdminController extends Controller
{

    public function index(){

        $users = User::all();
        return view('admin.index',compact('users'));
    }
    public function create(){

        return view('admin.create');
    }

    public function store(StoreAdminRequest $request){

            $user=User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password)
            ]);

            $user->attachRole('admin');
            $user->syncPermissions($request->permissions);

    }
}
