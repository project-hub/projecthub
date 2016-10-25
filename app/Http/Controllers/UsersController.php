<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller 
{
	/**
     * Display a listing of users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['users'] = ($request->has('search')) ?  User::searchUsers($request->search)->paginate(10) : User::with('posts')->paginate(10);
        return view('users.index')->with($data);
    }

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['user'] = User::find($id);
        return view('users.profile')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $rules = [
    //     'first_name' => 'required|min:3',
    //     'last_name' => 'required'
    //     'email' => 'required',
    //     'password' => 'required',
    //     'confirm_password' => 'required|same:password',
    //     ];
    //     // validates input for user edit form
    //     $this->validate($request, $rules);

    //     $user = User::find($id);
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);
    //     $user->save();

    //     $request->session()->flash('SUCCESS_MESSAGE', 'User updated successfully');
    //     return redirect()->action('UsersController@show', $user->id);
    // }


}