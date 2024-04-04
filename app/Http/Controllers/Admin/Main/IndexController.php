<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function __invoke()
   {
       $arr = [];
       $arr['usersCount'] = User::all()->count();
       $arr['categoriesCount'] = Category::all()->count();
       $arr['postsCount'] = Post::all()->count();
       $arr['tagsCount'] = Tag::all()->count();
//       return 'Привет из папки Admin\Main';
       return view('admin.main.index', compact('arr'));
   }
}
