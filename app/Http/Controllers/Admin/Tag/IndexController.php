<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends Controller
{
   public function __invoke()
   {
//       return 'Привет из папки Admin\Tag';
//       $tag = DB::table('tag')->get();
       $tags = Tag::all();
       $title = '';
       return view('admin.tag.index', compact('tags'));
   }
}
