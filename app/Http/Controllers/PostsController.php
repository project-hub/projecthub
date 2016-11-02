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
        $this->validate($request, $rules);

        $post = new Post;
        $post->created_by = $request->user()->id;
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->on_site = $request->get('location');
        $post->save();
    
        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully');
        return redirect()->action('PostsController@index');
    }



    // ******************* POST SKILLS ************************************************************************


    public function postSkills(Request $request, $id)
    {
        $post = Post::find($id);

        if(!empty($request->get('skillz'))){
            $post->skills()->sync($request->get('skillz'));
            $request->session()->flash('SUCCESS_MESSAGE', 'Skills added');
        }         
         return redirect()->action('PostsController@show', $post->id);
    }
// ************************************************************************************************************

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
        // $data['users'] = User::find($id);
        $data['skills'] = Skill::all();


        // self::displaySkills($data['post']);
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
        $post->on_site = $request->location;
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

}