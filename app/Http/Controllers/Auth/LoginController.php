<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

       protected $redirectTo = '/';
//    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {

//        $data = $request->only('email', 'password');

        /*if (Auth::attempt($data))
            {
                return redirect('/admin');

            }*/
        $this->middleware('guest')->except('logout');
    }
    public function authenticated(Request $request, $user)
    {
        if(Auth::user()->status == User::ROLE_ADMIN)
        {
            return redirect(route('admin.main.index'));
//            abort(404);
        }
        else {
            return redirect(route('personal.main.index'));

        }
    }

}
