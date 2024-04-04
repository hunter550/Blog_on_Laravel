<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UpdateController extends Controller
{
   public function __invoke(UpdateRequest $request, Category $category)
   {
       dump(Request::segment(1));
       $data = $request->validated();
       $category->update($data);
      /* $data = $request->input('title');
       $category = new Category();
       $category->title = $data;
       $category->save();*/
//       dd($valid);

       return redirect()->route('category.index');
//       return view('admin.category.create');
   }
}
