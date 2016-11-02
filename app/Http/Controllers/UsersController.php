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
        Storage::put(
            '/folder/'.$name.'.pdf',
            $file
        );
       Storage::disk('s3')->setVisibility($name, 'public');
        // $result = Storage::get($name.'.pdf');
        // return $result;
     }
// ******************* RETRIEVE RESUME ************************************
    protected function pullResume($name, $file)
     {
        Storage::get(
            $name,
            $file
        );
     }

     // ******************* STORE PROFILE PIC ************************************
     protected function updatePic($name, $file)
     {
        Storage::put(
            '/folder/'.$name,
            $file
        );
       Storage::disk('s3')->setVisibility($name, 'public');

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

        $request->session()->flash('SUCCESS_MESSAGE', 'User updated successfully');
        return redirect()->action('UsersController@show', $user->id);
    }

// ******************* UPLOAD RESUME ************************************
    public function upload(Request $request, $id)
    {   
        $user = User::find($id);
        
        if($request->file('resume'))
        {
            $file = self::updateResume('resume'.$user->id, file_get_contents($request->file('resume')->getRealPath()));
            $request->session()->flash('SUCCESS_MESSAGE', 'User updated successfully');    
        } 

        return redirect()->action('UsersController@show', $user->id);
    }
// ******************* DOWNLOAD RESUME ************************************
    public function download(Request $request, $id)
    {       
        $user = User::find($id);

        $key = env('S3_KEY');

        $file = "/folder/resume{$user->id}.pdf";
        $path = "https://s3-us-west-2.amazonaws.com/codeup-projecthub" . $file;
        return redirect()->to($path);

        ob_end_clean(); // <- this is important, i have forgotten why.
        // return $response;
    }

    // ******************* UPLOAD PROFILE PIC ************************************
    public function uploadPic(Request $request, $id)
    {   
        $user = User::find($id);
        if($request->file('image')->isValid()){
            $file = self::updatePic('image'.$user->id, file_get_contents($request->file('image')->getRealPath()));
        }

        $request->session()->flash('SUCCESS_MESSAGE', 'Picture updated successfully');
        return redirect()->action('UsersController@show', $user->id);
    }

    // ******************* VIEW PROFILE PIC ************************************
    // public function viewPic(){
    //     $user = User::find($id);
    //     $key = env('S3_KEY');

    //     $file = "/folder/image{$user->id}.png";
    //     $path = "https://s3-us-west-2.amazonaws.com/codeup-projecthub" . $file;
    //     return $path;
    // }

    // ******************* USER SKILLS ************************************


    public function userSkills(Request $request, $id)
    {
        $user = User::find($id);
        // dd($request->get('skillz'));
        if(!empty($request->get('skillz'))){
            $user->skills()->sync($request->get('skillz'));
            $request->session()->flash('SUCCESS_MESSAGE', 'Skills added');
        }
        return redirect()->action('UsersController@show', $user->id);
    }

    public function changePassword (Request $request, $id) 
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