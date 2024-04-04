<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
   public function __invoke()
   {
//       return 'Привет из папки Admin\User';
//       $user = DB::table('user')->get();
       $users = User::all();
       $title = '';
       return view('admin.user.index', compact('users'));
   }
}
