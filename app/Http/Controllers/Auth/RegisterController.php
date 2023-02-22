<?php

namespace App\Http\Controllers\Auth;

//use App\Http\Controllers\Controller;
//use App\Providers\RouteServiceProvider;
//use App\Models\User;
//use Illuminate\Foundation\Auth\RegistersUsers;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Validator;
//現在登録機能休止中
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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            //'comment' => ['required', 'unique:users'],
            //'はいなら0いいえなら1　左からスタート現在8個' => ['required', 'unique:users'],
            //'性別' => ['required', 'unique:users'],
            //'年齢' => ['required', 'unique:users'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

