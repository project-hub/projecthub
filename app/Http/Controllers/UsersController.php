<?php 

namespace App\Http\Controllers;

use \Storage;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Skill;
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
        $data['skills'] = Skill::all();
        // dd($data['skills']);
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
        $data['users'] = User::find($id);
        $data['skills'] = Skill::all();

        return view('users.profile')->with($data);
    }


     protected function updateResume($name, $file)
     {
        Storage::put(
            $name,
            $file
        );
     }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
        'email' => 'required',
        ];
        // validates input for user edit form
        $this->validate($request, $rules);

        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->company_name = $request->company_name;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zip_code = $request->zip_code;
        $user->email = $request->email;
        $user->employer = $request->employer;
        $user->content = $request->content;
        $user->linkedin = $request->linkedin;
        $user->github = $request->github;
        $user->website = $request->website;
        $user->save();

        // $user = User::find($id);   

        // if($request->file('resume')->isValid()){
        //     self::updateResume('resume'.$user->id, file_get_contents($request->file('resume')->getRealPath()));
        // }

        $request->session()->flash('SUCCESS_MESSAGE', 'User updated successfully');
        return redirect()->action('UsersController@show', $user->id);
    }

    // ******************* USER SKILLS ************************************

    // public function post_index()
    // {      
    //     $data['skills'] = Skill::orderBy('name');

    //     return view('layouts.partials.skills')->with($data);
    // }


}