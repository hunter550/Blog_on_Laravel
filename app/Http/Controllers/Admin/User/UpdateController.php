<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateController extends Controller
{
   public function __invoke(UpdateRequest $request, User $user)
   {

       $data = $request->validated();
//       $data['password'] = Hash::make($data['password']);
       $user->update($data);
      /* $data = $request->input('title');
       $user = new Category();
       $user->title = $data;
       $user->save();*/
//       dd($valid);

       return redirect()->route('user.index');
//       return view('admin.user.create');
   }
}
