<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Tag\UpdateRequest;
use App\Models\Tag;

class UpdateController extends Controller
{
   public function __invoke(UpdateRequest $request, Tag $tag)
   {
       $data = $request->validated();
       $tag->update($data);
      /* $data = $request->input('title');
       $tag = new Category();
       $tag->title = $data;
       $tag->save();*/
//       dd($valid);

       return redirect()->route('tag.index');
//       return view('admin.tag.create');
   }
}
