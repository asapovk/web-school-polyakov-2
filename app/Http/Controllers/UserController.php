<?php
namespace App\http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

  public function getDashboard(){
    return view('dashboard');
  }

  public function postSignUp(Request $request)
  {
    $this->validate($request,[
      'email' => 'required|email|unique:users',
      'password' =>'required|min:4',
      'username' => 'required|unique:users|max:24'
    ]);
    $email = $request['email'];
    $username = $request['username'];
    $password = bcrypt($request['password']);

    $user = new User();
    $user->email = $email;
    $user->username = $username;
    $user->password = $password;

    $user->save();
    Auth::login($user);

    return redirect()->route('dashboard');
  }

  public function postSignIn(Request $request)
  {
    $this->validate($request,[
      'password' =>'required',
      'username' => 'required'
    ]);

    if (Auth::attempt(['username' => $request['username'],'password' => $request['password']])){
      return redirect()->route('dashboard');
    }
    return redirect()->back();
  }
}
