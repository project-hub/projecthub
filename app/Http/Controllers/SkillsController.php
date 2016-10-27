<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Skill;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class SkillsController extends Controller
{
    public function index()
    {	   
        $data['skills'] = Skill::orderBy('name')->get();
        //dd($data['skills']);

        return view('layouts.partials.skills')->with($data);
        // return view('posts.index')->with($data);
    }

    // public function show($id)
    // {
    //     $data['skills'] = Skill::find($id);

    //     return view('posts.index')->with($data);
    // }
}