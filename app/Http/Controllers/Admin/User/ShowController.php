<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
   public function __invoke(User $user)
   {
//       dump(Request::segment(1));
//       return 'Привет из папки Admin\User';
//       $user = DB::table('user')->get();
       return view('admin.user.show', compact('user'));
   }
}
