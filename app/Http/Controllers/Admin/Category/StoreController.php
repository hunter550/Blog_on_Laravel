<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
   public function __invoke(Request $request)
   {
       dump(Request::segment(1));
//       $data = $request->input('title');
       $data = $request->all();
       $rules = ['title' => 'required|unique:category|string'];
       $messages = [
            'title.required' => 'Это поле обязательно для заполнения',
            'title.unique' => 'Название, должно быть уникальным',
            'title.string' => 'Можно вводить только строку'
       ];
       $valid = Validator::make($data, $rules, $messages)->validate();
       Category::query()->create($data);
//       $request->validate(['title' => 'required|unique:category|string']);
//       dd($valid);
       return redirect()->route('category.index');
//       return view('admin.category.create');
   }
}
