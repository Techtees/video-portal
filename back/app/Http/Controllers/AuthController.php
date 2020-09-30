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
use Illuminate\Support\Facades\Storage;

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
            $data["photo"] = "noimage.png";

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

    public function channelVideos($user)
    {
        $user = decodeId($user);
        $videos = $this->videoService->findUserVideos($user);
        $user = $this->userService->find($user);
        return view('dashboard.channel', compact('user', 'videos'));
    }

    public function profileEdit($user)
    {
        $user = decodeId($user);  

        $user = $this->userService->find($user);

        return view('dashboard.profile-edit', compact('user'));
    }

    public function updateProfile(Request $request, $user)
    {
        $rules = [
            'name' => 'required',
            'photo' => 'file'
        ];

        $user = decodeId($user);  

        $user = $this->userService->find($user);

        $user->name =  $request->name;

        if($request->has('photo')) {
            $user->photo =  $request->photo->store('');                
        }

        $user->save();

        $success = "Profile Updated";

        return redirect( route('channel.videos', ['user' => $user->id]) )->with('data', $success);
        
        
    }
}
