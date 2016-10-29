<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Post_Skill;
use App\Models\Skill;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class SkillsController extends Controller
{
    public function index()
    {	   
        $data['skills'] = Skill::with('posts')->with('skills')->orderBy('name')->get();
        //dd($data['skills']);

        return view('layouts.partials.skills')->with($data);
        // return view('posts.index')->with($data);
    }

    // public function store(Request $request)
    // {
    //     $skill = new Skill;
    //     $skill = $request->all();
    //     $skill->save();

    //     // $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully');

    //     // Log::info('Post was created.' . $post);
    //     return redirect()->action('PostsController@index');
    // }

// *********************** THIS IS HOW TO RETREIVE INFO FROM SELECT FORMS ****************************
    // public function show(Request $request)
    // {
    //     $data['skills'] = $request->all('skillz');
    //     // dd($data);
    // }
    // ************************************************************************************************

// **************************************** CREATE POST_SKILL ********************************************************
    public function store(Request $request)
    {
        // $post_skill = new Post_Skill;
        // $post_skill->post_id = 1;
        // $post_skill->skill_id = $request->skill()->id;
        // // dd($post_skill);
        // $post_skill->save();
        // $post->title = $request->get('title');
        // $post->content = $request->get('content');

        $post_skill = new Post_Skill;
        // $post_skill->post_id = $request->post()->id;
        $post_skill->post_id = 1;

            // dd($request->get('skillz'));
    

        // $post_skill->skill_id = $request->get('skillz');
        // // dd($post_skill);
        // $post_skill->save();
        // $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully');

        // Log::info('Post was created.' . $post);
        return redirect()->action('PostsController@index');
    }



}