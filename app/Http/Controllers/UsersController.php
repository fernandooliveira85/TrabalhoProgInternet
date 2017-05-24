<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UsersController extends Controller
{
    public function index()
    {
    	//return \App\Post::all();
    	//$posts = post::all();
    	$users = User::paginate(5);
    	return view('users.index', compact('users'));
    }

    public function create()
	{
	    return view('users.create');
	}

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('users');
    }

    public function show ($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        User::find($id)->update($request->all());
        return redirect('users');
    }

    public function destroy($id){
        User::find($id)->delete();
        return redirect('users');
    }
    /*public function destroy(Request $request, $id){
        User::find($id)->delete();
        return redirect('users');
    }*/
}
