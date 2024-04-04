<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Bugsnag\BugsnagLaravel\Facades\Bugsnag;

class EditController extends Controller
{
   public function __invoke(Post $post, Request $request)
   {
       /* $posts = Post::query()->find(7);
         dump($post->title);
  //       dd($post->tags->pluck('id'));
         dump($post->title);
         dump('--------------------------------------------------------------');
         foreach ($post->tags as $tag)
         {
             dump($tag->title);
         }

  //         $tags = Tag::query()->pluck('title', 'id');
  /* dd($tags->posts);*/

       /*$count = 1;
       foreach ($tags as $tag)
       {
             if(in_array($tag->id, $post->tags->pluck('id')->toArray()))
             {

                 var_dump(in_array($tag->id, $post->tags->pluck('id')->toArray()));
                 dump($tag->title);
                 dump($count++);
             }
             else
             {
                 var_dump(in_array($tag->id, $post->tags->pluck('id')->toArray()));
                 dump('Сработал else в блоке');
                 dump($count+2);
             }

         }
       dd('---------------------------------------');
       dd($post->pluck('id'));
       dump($post->tags); // - приходит сюда Illuminate\Database\Eloquent\Collection
       dd($post->tags()); // - приходит сюда Illuminate\Database\Eloquent\Relations\BelongsToMany*/
       $tags = Tag::all();
       $categories = Category::query()->pluck('title', 'id')->all();
//       dd($tags);
       return view('admin.post.edit', compact('post', 'categories', 'tags'));
   }
}
