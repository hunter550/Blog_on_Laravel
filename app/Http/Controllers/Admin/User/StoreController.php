<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Mail\User\PasswordMail;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class StoreController extends Controller
{
   public function __invoke(StoreRequest $request)
   {

//       $data = $request->input('title');
       $data = $request->validated();
//       dd($data);
       $pass = Str::random(10);
       $data['password'] = Hash::make($pass);
//       $data['password'] = Hash::make($data['password']);
       $user = User::query()->firstOrCreate(['email' => $data['email']], $data);
//       $request->validate(['title' => 'required|unique:category|string']);
//       dd($valid);
       Mail::to($data['email'])->send(new PasswordMail($pass));
       event(new Registered($user));
       return redirect()->route('user.index');
//       return view('admin.user.create');
   }
}
