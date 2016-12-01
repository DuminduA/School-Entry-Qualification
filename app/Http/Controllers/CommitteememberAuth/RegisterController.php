<?php

namespace App\Http\Controllers\CommitteememberAuth;

use App\Committeemember;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/committeemember/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('committeemember.guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {//var_dump($data);
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:committeemembers',
            'password' => 'required|min:6|confirmed',
            'NIC'   => 'required|min:9|unique:committeemembers',

           // 'school' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Committeemember
     */
//    protected function create(array $data)
//    {     //echo $data['name'];
//        return Committeemember::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//            'NIC'=> $data['NIC'],
//            'type' =>$data['NIC'],
//
//           // 'type'=>$data['type'],
//           // 'school' => $data['school'],
//        ]);
//
//    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('committeemember.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('committeemember');
    }
    public function register(Request $request)                  // Registers a new Committee Member Overided from
    {
       // echo "abjkbasdj";
        $this->validator($request->all())->validate();
        //
        $commitmem = new Committeemember();
        $commitmem->name=$request['name'];
        $commitmem->email=$request['email'];
        $commitmem->password=$request['password'];
        $commitmem->NIC=$request['NIC'];
        $commitmem->type=1;                     //TODO must implement Type to be choosed in the view
        $commitmem->save();
        event(new Registered($commitmem));
         $this->guard()->login($commitmem);

        return $this->registered($request, $commitmem)
            ?: redirect($this->redirectPath());
   }
}
