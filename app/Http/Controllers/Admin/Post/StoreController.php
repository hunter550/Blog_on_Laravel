<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Exception;


class StoreController extends Controller
{
   public function __invoke(StoreRequest $request)
   {

       try {
           $data = $request->validated();
           $tagIds = $data['tag_ids'];
           unset($data['tag_ids']);
//       dd(empty($data['preview_image']));
//       $data = $request->input('title');
//       $data = $request->all();
//       $preview = $data['preview_image'];
//       $preview_path = Storage::put('/images', $preview);
           //---------- Загрузка картинок (файлов) локально в папку Storage --------------
//       $request->file('preview_image')->storeAs('image', 'Chrysanthemum.jpg');
           if (isset($data['preview_image']) and isset($data['main_image'])) {
               $data['preview_image'] = Storage::disk('public')->putFileAs('/images', $data['preview_image'], 'girya-chugun.jpg'); // вариант загрузки в папку Storage
               $data['main_image'] = Storage::disk('public')->putFileAs('/images', $data['main_image'], 'prised.jpeg');
           }
           //---------- Правила и сообщения для проверки (валидации) --------------
//       $request->validate(['title' => 'required|unique:posts|string']); // вариант валидации
           //------ Создаём валидацию с нашими правилами и сообщениями ------

           //---------- Через метод Post обращаемся к БД и сохраняем туда все полученные данные из формы (если уже такие данные существуют (first), то ничего не делаем, а если нет (Create), то создаём новую запись)--------------

           $post = Post::query()->firstOrCreate($data);
//           dd($post);
           $post->tags()->attach($tagIds);
       } catch(Exception $exception) {
                echo "Ошибка: $exception";
       }
       //----- Делаем редирект по имени роута ('post.index') на главную страницу --------
       return redirect()->route('post.index');
   }
}
