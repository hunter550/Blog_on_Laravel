<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
   public function __invoke(Category $category)
   {
       dump(Request::segment(1));
       $category->delete();
       return redirect()->route('category.index');
//       return view('admin.category.create');
   }
}
