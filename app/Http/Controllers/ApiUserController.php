<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;
use App\Models\User;
use App\Models\UserTank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use Socialite;

class ApiUserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function login() {
      if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {

        $user = Auth::user();

        $success['token'] = $user->createToken('appToken')->accessToken;

        //After successfull authentication, notice how I return json parameters

        return response()->json([

        'success' => true,

        'token' => $success,

        'user' => $user

      ]);

      } else {

      //if authentication is unsuccessfull, notice how I return json parameters

      return response()->json([

        'success' => false,

        'message' => 'Invalid Email or Password',

      ], 401);

      }

  }

  public function socialLogin(Request $request) {

    $user = User::all()->where('email', $request->email)->first();

    if($user) {

      if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {

        $user = Auth::user();
  
        $success['token'] = $user->createToken('appToken')->accessToken;
  
        return response()->json([
  
         'success' => true,
  
         'token' => $success,
  
         'user' => $user
  
       ]);
  
      } else {
    
        return response()->json([
    
          'success' => false,
    
          'message' => 'ERROR',
    
        ], 401);
    
      }
    }

    $input = $request->all();

    $input['password'] = bcrypt($input['password']);

    $userTank = UserTank::create(['strengh' => 25, 'health' => 100, 'speed' => 3, 
    'tower' => '../assets/tankConstructor/TowerEdits/Light1.png', 
    'body' => '../assets/tankConstructor/Hulls/SmallHullA.png', 
    'track' => '../assets/tankConstructor/Tracks/TrackAFrame1.png', 
    'bullet' => '../assets/tankConstructor/Bullets/01.png']);

    $input['user_tank_id'] = $userTank->id;

    $input['coins'] = 0;

    $user = User::create($input);

    $success['token'] = $user->createToken('appToken')->accessToken;

    return response()->json([

     'success' => true,

     'token' => $success,

     'user' => $user

   ]);

  }

  public function register(Request $request) {

    $validator = Validator::make($request->all(), [

      'name' => 'required',

      'email' => 'required|email|unique:users',

      'password' => 'required',

    ]);

    if ($validator->fails()) {

     return response()->json([

      'success' => false,

      'message' => $validator->errors(),

     ], 401);

    }

    $input = $request->all();

    $input['password'] = bcrypt($input['password']);

    $userTank = UserTank::create(['strengh' => 25, 'health' => 100, 'speed' => 3, 
    'tower' => '../assets/tankConstructor/TowerEdits/Light1.png', 
    'body' => '../assets/tankConstructor/Hulls/SmallHullA.png', 
    'track' => '../assets/tankConstructor/Tracks/TrackAFrame1.png', 
    'bullet' => '../assets/tankConstructor/Bullets/01.png']);

    $input['user_tank_id'] = $userTank->id;

    $input['coins'] = 0;

    $input['token'] = generateRandomString(10);

    $user = User::create($input);
    
    $success['token'] = $user->createToken('appToken')->accessToken;

    return response()->json([

     'success' => true,

     'token' => $success,

     'user' => $user

   ]);

  }

  public function users(){

    if (Auth::user()) {

      $users = User::all();

      return response()->json([

        'success' => true,

        'data' => $users

      ]);

    }else {

      return response()->json([

        'success' => false,

        'message' => 'Unable to Logout'

      ]);

    }

  }

  public function SocialSignup($provider) {

        $user = Socialite::driver('google')->stateless()->user();

        $userObj = (array)[
          "name" => $user->name,
          "email" => $user->email,
          "password" => bcrypt('1234'),
        ];

        $validator = Validator::make($userObj, [

          'email' => 'required|email|unique:users',

        ]);

        if ($validator->fails()) {

          // User already logged

          $user2 = User::all()->where('email', $user->email)->first();

          $success['token'] = $user2->createToken('appToken')->accessToken;

          return response()->json([

          'success' => true,

          'token' => $success,

          'user' => $user2

          ]);
     
        }

        $user = User::create($userObj);

        $success['token'] = $user->createToken('appToken')->accessToken;

         return response()->json([

         'success' => true,

         'token' => $success,

         'user' => $user

         ]);
  }

  public function user() {

    if (Auth::user()) {

      $userId = Auth::id();
      $username = Auth::user()->name;
      $email = Auth::user()->email;

      $user = (object)[
        "username" => $username,
        "email" => $email,
      ];

      return response()->json([

        'success' => true,

        'data' => $user

      ]);

    } else {

      return response()->json([

        'success' => false,

        'message' => 'Unable to get User'

      ]);

    }

  }

  public function logout(Request $res){

   if (Auth::user()) {

    $user = Auth::user()->token();

    $user->revoke();

    return response()->json([

     'success' => true,

     'message' => 'Logout successfully'

   ]);

   }else {

    return response()->json([

     'success' => false,

     'message' => 'Unable to Logout'

    ]);

   }

  }

  public function getCoins() {

    if (Auth::user()) {

      $userId = Auth::id();

      $user = User::all()->where('id', $userId)->first();

      return response()->json($user->coins);
    
    } else {

      return response()->json([

        'success' => false,

        'message' => 'Unable to get coins'

      ]);

    }
   
  }

  public function addCoins(Request $request) {

    if (Auth::user()) {

      $userId = Auth::id();

      $user = User::all()->where('id', $userId)->first();

      $newCoins = $user->coins + $request->coins;

      $user->update(['coins' => $newCoins]);

      return response()->json($user);
    
    } else {

      return response()->json([

        'success' => false,

        'message' => 'Unable to add coins'

      ]);

    }

  }

  public function resCoins(Request $request) {
    if (Auth::user()) {

      $userId = Auth::id();

      $user = User::all()->where('id', $userId)->first();

      $newCoins = $user->coins - $request->coins;

      $user->update(['coins' => $newCoins]);

      return response()->json($user);
    
    } else {

      return response()->json([

        'success' => false,

        'message' => 'Unable to res coins'

      ]);

    }
  }

  public function sendResetPasswordEmail(Request $request) {

    $user = User::where('email', $request->email)->first();

    if ($user) {

      $url = "https://survival-tanks.herokuapp.com/reset-password/" . $user->token;

      $mailable = new ResetPassword($url);
      Mail::to($request->email)->send($mailable);
      return;

    }

    return response()->json([

      'success' => false,

      'message' => 'Unable to send email'

    ]);

    
  }

  public function resetPassword(Request $request) {

    $user = User::where('token', $request->token)->first();
    
    $user->update(['password' => bcrypt($request->password)]);

  }

}

function generateRandomString($length = 10) {
  return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
