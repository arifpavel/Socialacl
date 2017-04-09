<?php

namespace App\Http\Controllers;
use App\LoginUser;
use Illuminate\Http\Request;
use App\Exceptions\SocialAuthException;
use Illuminate\Support\Facades\Auth;
use App\User;
use Entrust;
class LoginController extends Controller
{
    protected $loginUser;
    //Concstructor get LoginUser instance.
    public function __construct(LoginUser $loginUser)
    {
        $this->loginUser = $loginUser;
    }
    // Function to show login page to guest.
    public function showLoginPage()
    {
       return view('login');
    }

    // Function to show dashboard to user.
    public function showDashboard()
    {
        $user = User::where('id',Auth::id())->get();
        //dd($user);
        //if($user->hasRole(['admin'])) echo 'yes!'; die();
        return view('dashboard',['user' => $user]);
    }

    public function auth($provider)
     {
         return $this->loginUser->authenticate($provider);
     }

   public function login($provider)
   {
       try {
           $this->loginUser->login($provider);
           return redirect()->action('LoginController@showDashBoard');
       } catch (SocialAuthException $e) {
           return redirect()->action('LoginController@showLoginPage')
               ->with('flash-message', $e->getMessage());
       }
   }

   public function logout()
   {
      auth()->logout();
      return redirect()->to('/');
   }
}
