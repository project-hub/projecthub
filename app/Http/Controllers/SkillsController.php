<?php 

namespace App\Http\Controllers;

use \Storage;
use Illuminate\Http\Request;

use App\Models\Skill;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {	   
        $data['skills'] = Skill::orderBy('name')->paginate(5);
        return view('posts.index')->with($data);
    }

    public function show($id)
    {
        $data['skills'] = Skill::find($id);
        return view('posts.index')->with($data);
        dd($skills);
    }