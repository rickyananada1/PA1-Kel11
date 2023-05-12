<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(){
        // $forums = Forum::paginate(10);
        return view('users.forum.index');
    }
}

