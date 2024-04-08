<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index()
   {
       return 'Привет из папки Post';
       return view('post.index');
   }

}
