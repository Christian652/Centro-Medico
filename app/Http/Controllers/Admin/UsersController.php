<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Gate;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.user.index')->with('users', $users);
    }

    public function edit(User $user)
    {
        if (Gate::denies('user-edit')) {
            return redirect()->route('admin.users.index');
        }

        $roles = Role::all();
        
        return view('admin.user.edit')->with([
            'user'=>$user,
            'roles'=>$roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if(!empty($request->roles)):
            $user->roles()->sync($request->roles);
        endif;

        if(!empty($request->name) && !empty($request->email)):
            $user->name = $request->name;
            $user->email = $request->email;
        endif;

            $user->save();

        return redirect()->route('admin.users.index');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Gate::denies('user-edit')) {
            return redirect()->route('admin.users.index');
        }

        $user->roles()->detach();
        $user->delete();

        return redirect()->route('admin.users.index')->withErrors(['erro'=>['opan', 'opan', 'eae']]);
    }
}
