<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Socialite;
use App\Models\User;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/';
    protected $redirectAfterLogout = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $request->session()->flash('SUCCESS_MESSAGE', 'User created successfully! Please complete your profile');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
            
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'employer' => $data['employer'],
            'company_name' => $data['company_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $request->session()->flash('SUCCESS_MESSAGE', 'User created successfully! Please complete your profile');
    }

     /**
     * Redirect the user to the LinkedIn authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    /**
     * Obtain the user information from LinkedIn.
     *
     * @return Response
     */
    public function handleProviderCallbackLinkedIn()
    {
        try {
            $user = Socialite::driver('linkedin')->user();
            $create['email'] = $user->email;
            $create['linkedin_id'] = $user->id;
        
            
            $userModel = new User;
            $createdUser = $userModel->addNew($create);
            Auth::loginUsingId($createdUser->id);
            return redirect()->route('http://projecthub.us');
        } catch (Exception $e) {
            return redirect('auth/linkedin');
        }
            // $token = $user->token;
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProviderGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallbackGithub()
    {
        try{
        $user = Socialite::driver('github')->user();
    } catch(Exception $e) {
        return Redirect::to('auth/github');
    }
        $authUser = $this->findOrCreateUser($user);
        session([
            'login_' . md5("Illuminate\Auth\Guard") => $authUser->id,
            ]);
        return redirect()->action('UsersController@show', $authUser->id );
        // Auth::login($authUser, true);

        // return Redirect::to('http://projecthub.us/users/{$users->id}');
    }

        // $token = $user->token;
    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $githubUser
     * @return User
     */
    private function findOrCreateUser($githubUser)
    {
        if ($authUser = User::where('email', $githubUser->email)->first()) {
            return $authUser;
        }

        return User::create([
            'email' => $githubUser->email,
            'github' => $githubUser->user['url'],
            'image' => $githubUser->avatar
        ]);
    }
    
}
