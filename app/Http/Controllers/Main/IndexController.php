<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function __invoke()
   {
//       return 'Привет из папки Main';
       return view('main.index');
   }
}
