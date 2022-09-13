<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.user.index',compact('user'));
    }
    public function edit($id){
        $user = User::find($id);
        return view('admin.user.editform',compact('user'));
    }

    public function delete($id){
        $user = User::find($id);
        $user :: destroy($id);
        return  redirect()->route('user.index');
    }
}
