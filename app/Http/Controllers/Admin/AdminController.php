<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;

class AdminController extends Controller
{
    public function create(){

        return view('admin.create');
    }

    public function store(StoreAdminRequest $request){


            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password)
            ]);
    }
}
