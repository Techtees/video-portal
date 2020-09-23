<?php

namespace App\Http\Controllers;

use App\User;
use App\Customer;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login(LoginRequest $request)
    {
        try {
            # credentials
            $credentials =  $request->only('email', 'password');
            # attempt login
            if (Auth::attempt($credentials)) {
                # Authentication passed...
                $success = "Welcome Admin";
                return redirect()->intended('dashboard')->with(['data' => $success]);
            }
            else{
                return back()->withInput()->withErrors(['Password incorrect']);
            }
        } catch (\Exception $ex) {
            dd($ex);
        }
    }

    public function register(Request $request)
    {
        $rules = [
            'surname' => 'required',
            'name' => 'required',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'required|min:6',
            "company_name" => 'required',
            "address" => 'required',
            "zip_code" => 'required',
            "city" => 'required',
            "phone" => 'required',
            "bank_name" => 'required',
            "iban" => 'required',
            "ibic" => 'required',
        ];

        $this->validate($request, $rules);

        try {
            # create data
            $data = [
                "surname" => $request->get('surname'),
                "name" => $request->get('name'),
                "email" => $request->get('email'),
                "password" => $request->get('password'),
            ];

            # hash password
            $data["password"] = Hash::make($data["password"]);
            $data["role"] = "affliate";

            # create user
            $user = $this->userService->create($data);

            # log user in
            Auth::loginUsingId($user->id);

            # redirect to dashboard
            return redirect()->intended('dashboard');
        } catch (\Exception $ex) {
            dump($ex);
        }
    }

    public function logout()
    {
        # logout
        Auth::logout();
        return redirect()->intended('login');
    }

    public function index()
    {
       
    }
}
