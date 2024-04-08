<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index()
   {
//       return 'Привет из папки Main';
       return view('main.index');
   }

   public function show()
   {
       $id = 1;
//       return 'Привет из папки Main.Post';
       return view('post.show', compact('id'));
   }

    public function about()
    {

        return view('main.about');
    }

    public function soon()
    {
        $date = Carbon::now()->locale('ru');
        return view('main.soon', compact('date'));
    }
}
