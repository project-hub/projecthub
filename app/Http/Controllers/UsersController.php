<?php 

namespace App\Http\Controllers;
use Response;
use \Storage;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Skill;
use App\Models\User_Skill;
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
        // $data['users'] = User::all();
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
        // dd(User::find($id)->skills);
        $data['skills'] = Skill::all();
        return view('users.profile')->with($data);
    }

// ******************* STORE RESUME ************************************
     protected function updateResume($name, $file)
     {
        // Storage::put(
        //     $name.'.pdf',
        //     $file
        // );
        $result = Storage::get($name.'.pdf');
        return $result;
     }
// ******************* RETRIEVE RESUME ************************************
    protected function pullResume($name, $file)
     {
        Storage::get(
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
        'zip_code' => 'required|min:5',
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
        $user->linkedin_id = $request->linkedin_id;
        $user->github = $request->github;
        $user->website = $request->website;
        $user->save();

        // foreach ($request->get('skillz') as $key=>$value) {
            // $user->skills()->sync($request->get('skillz'[$id]));
        // dd($value);
        // }

    // $user->skills()->sync([$request->get('skillz')]);

    
    // $skill = App\Models\Skill::find(4);
    // $skills2 = App\Models\Skill::find(5);

        $request->session()->flash('SUCCESS_MESSAGE', 'User updated successfully');
        return redirect()->action('UsersController@show', $user->id);
    }

// ******************* UPLOAD RESUME ************************************
    public function upload(Request $request, $id)
    {   
        $user = User::find($id);
        if($request->file('resume')->isValid()){
            $file = self::updateResume('resume'.$user->id, file_get_contents($request->file('resume')->getRealPath()));
            return response()->download($file);
        }

        $request->session()->flash('SUCCESS_MESSAGE', 'User updated successfully');
        return redirect()->action('UsersController@show', $user->id);
    }
// ******************* DOWNLOAD RESUME ************************************
    public function download(Request $request, $id)
    {       
        $user = User::find($id);
        // if(file('resume')->isValid()){
            // self::pullResume('resume'.$user->id, file_get_contents($request->file('resume')->getRealPath()));

        // dd(file('resume11')->getRealPath());
          // self::pullResume('resume'.$user->id, response()->download('resume'.$user->id));

        $filename = 'resume'.$user->id;
        $path = storage_path($filename);

// return Response::make(file_get_contents($filename), 200, [
//     'Content-Type' => 'application/pdf',
//     'Content-Disposition' => 'inline; filename="'.$filename.'"'
// ]);

        // Storage::get('resume'.$user->id);
        // }
          // dd($resume);
        // return response()->download(Storage::get('resume'.$user->id));
        return redirect()->action('UsersController@show', $user->id);
    }

    // ******************* USER SKILLS ************************************


    public function userSkills(Request $request, $id)
    {
        $user = User::find($id);
        // dd($request->get('skillz'));
        $user->skills()->sync($request->get('skillz'));
        // $user->skills()->attach(5);//->sync([4, 5]);
        // dd($user->skills);

        // $newSkills = $request->has('skillz') ? $request->get('skillz') : [];

        // $ids = [];

        // foreach ($user->skills as $skill) {
        //     $ids[] = $skill->id;
        // }

        // foreach ($newSkills as $id) {
        //     if (!in_array($id,$ids)) {
        //         $newSkill = new User_Skill;
        //         $newSkill->user_id = $user->id;
        //         $newSkill->skill_id = $id;
        //         $newSkill->save();
        //     }
        // }

        $request->session()->flash('SUCCESS_MESSAGE', 'Skills added');
        return redirect()->action('UsersController@show', $user->id);
    }


// ******************* DISPLAY USER SKILLS ************************************
    // public function displaySkills 
    // {     
    //     $user = User::with('user_skills')->find(11);
    //     dd($user);

    //     // $skillsArray = $user->f->lists('posts');
    //     return view('users.profile');
    // }





    public function changePassword(Request $request, $id) 
    {
        $rules = [
        'email' => 'required',
        'password' => 'required',
        'confirm_password' => 'required|same:password',
        ];
        // validates input for user edit form
        $this->validate($request, $rules);

        $user = User::find($id);
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Password changed successfully');
        return redirect()->action('UsersController@show', $user->id);

    }

}