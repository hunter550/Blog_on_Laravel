<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
   public function __invoke(Request $request)
   {
//       $data = $request->input('title');
       $data = $request->all();
       $rules = ['title' => 'required|unique:tags|string'];
       $messages = [
            'title.required' => 'Это поле обязательно для заполнения',
            'title.unique' => 'Название, должно быть уникальным',
            'title.string' => 'Можно вводить только строку'
       ];
       $valid = Validator::make($data, $rules, $messages)->validate();
       Tag::query()->create($data);
//       $request->validate(['title' => 'required|unique:tags|string']);
//       dd($valid);
       return redirect()->route('tag.index');
//       return view('admin.tag.create');
   }
}
