<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Session;
use Redirect;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;



class UsersController extends Controller
{
    
    public function index()
    {
        $users = User::orderBy('id','DESC')->paginate(5);
        return view('admin.users.index', compact('users'));
    }
   
    public function create()
    {
        return view('admin.users.create');
    }
   
    public function store(UserRequest $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        Session::flash('message','Usuario creado correctamente');
        return redirect::to('admin/users');
    }
  
    public function show($id)
    {
        //
    }
  
    public function edit($id)
    {
        $user= User::find($id);
       return view('Usuario.edit',compact('user'));
    }
   
    public function update(Request $request, $id)
    {
         $user= User::find($id);
         $user->fill($request->all());
         $user->save();
         Session::flash('message','Usuario actualizado correctamente');
        return redirect::to('admin/users');
         
    }
   
    public function destroy($id)
    {
        
        $user= User::find($id);
        $user->delete();
      Session::flash('message','Usuario eliminado correctamente');
        return redirect::to('admin/users');
    }
}