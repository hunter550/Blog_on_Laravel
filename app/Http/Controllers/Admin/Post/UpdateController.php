<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UpdateController extends Controller
{
   public function __invoke(UpdateRequest $request, Post $post)
   {
       $data = $request->validated();
       $tagIds = $data['tag_ids'];
       unset($data['tag_ids']);
//       dd(redirect()->route('post.index'));
       //---------- Загрузка картинок (файлов) локально в папку Storage --------------
       if (isset($data['preview_image']) and isset($data['main_image'])) {
           $data['preview_image'] = Storage::disk('public')->putFileAs('/images', $data['preview_image'], 'girya-chugun.jpg'); // вариант загрузки в папку Storage
           $data['main_image'] = Storage::disk('public')->putFileAs('/images', $data['main_image'], 'prised.jpeg');
       $post->update($data);
//       $post->tags->sync($tagIds);
       $post->tags()->sync($tagIds);
       return redirect()->route('post.index');

   }
}
}
