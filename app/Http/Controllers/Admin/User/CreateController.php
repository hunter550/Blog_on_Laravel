<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class CreateController extends Controller
{
   public function __invoke()
   {
//       dump(Request::segment(1));
       $statuses = User::getRoles();
//       dd($statuses);
       return view('admin.user.create', compact('statuses'));
   }
}
