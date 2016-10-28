<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Post_Skill;
use App\Models\Skill;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    /**
     * Display a listing of the posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] = Post::with('users')->orderBy('created_at', 'desc')->paginate(5);
        $data['skills'] = Skill::all();
        return view('posts.index')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $rules = [
            'title'   => 'required|min:5',
            'content' => 'required',
        ];

        // $request->session()->flash('ERROR_MESSAGE', 'Post was not saved. Please see messages under inputs');
        // will redirect back with $errors object populated if validation fails
        $this->validate($request, $rules);
        // $request->session()->flash('SUCCESS_MESSAGE', 'Post was saveed successfully');
        // $request->session()->forget('ERROR_MESSAGE');


        $post_skill = new Post_Skill($request->get('skillz'));

        $post = new Post;
        $post->created_by = $request->user()->id;
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        // $post->on_site = $request->get('on_site');
        $post->save();
       

       // $post->skills()->sync($request->get('skillz'));
        // $user = User::find(5);
        // $skill = Skill::find(4);
        // $skills2 = Skill::find(5);
        // $user->skills()->sync([4, 5]);

        return redirect()->action('PostsController@index');
    }

    // public function postSkill(Request $request)
    // {
    //     $user = App\Models\User::find(10);
    //  $skill = App\Models\Skill::find(4);
    //  $skills2 = App\Models\Skill::find(5);
    //  $user->skills()->sync([4, 5]);
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $this->voteScore($id);
        $data['post'] = Post::find($id);
        return view('posts.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $data = ['post' => $post];
        return view('posts.edit')->with($data);
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
        $post = Post::findOrFail($id);
        $post->title = $request->title;               
        $post->content = $request->content;
        // $post->on_site = $request->on_site;
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully');

        return redirect()->action('PostsController@show', $post->id);       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->action('PostsController@index');
    }

    public function search(Request $request)
    {
        $term = $request->searchQuery;
        $data['results'] = Post::search($term)->paginate(5);
        return view('posts.results')->with($data);
    }

// ******************* POST SKILLS ************************************

    // public function post_store(Request $request)
    // {
    //     $post_skill = new Post_Skill;
        

    //     // foreach ($request->get('skillz') as $skills) {
    //     //     return $skills;
    //     // }
    //         // dd($request->get('skillz'));
        
    // }



}