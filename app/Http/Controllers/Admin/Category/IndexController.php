<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
   public function __invoke()
   {
//       return 'Привет из папки Admin\Category';
//       $category = DB::table('category')->get();
       $categories = Category::all();
       $title = '';
       return view('admin.category.index', compact('categories'));
   }
}
