<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
   public function __invoke(Category $category)
   {
       dump(Request::segment(1));
//       return 'Привет из папки Admin\Category';
//       $category = DB::table('category')->get();
       return view('admin.category.show', compact('category'));
   }
}
