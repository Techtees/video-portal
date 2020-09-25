<?php

namespace App\Http\Controllers;

use App\User;
use App\Customer;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Services\VideoService;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $userService, $videoService;

    public function __construct(UserService $userService, VideoService $videoService)
    {
        $this->userService = $userService;
        $this->videoService = $videoService;
    }

    public function login(LoginRequest $request)
    {
        try {
            # credentials
            $credentials =  $request->only('email', 'password');
            # attempt login
            if (Auth::attempt($credentials)) {
                # Authentication passed...
                $success = "Welcome";
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
            'name' => 'required',
            'email' => 'required|max:255|email|unique:users,email',
            'password' => 'required|min:6'
        ];

        $this->validate($request, $rules);

        try {
            # create data
            $data = [
                "name" => $request->get('name'),
                "email" => $request->get('email'),
                "password" => $request->get('password'),
            ];

            # hash password
            $data["password"] = Hash::make($data["password"]);

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
        $videos = $this->videoService->index();
        return view('dashboard.home', compact('videos'));
    }
}
