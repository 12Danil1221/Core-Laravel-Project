<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }
    public function register_view(){
        return view('register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
        ]);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        return response()->json(['message'=> 'Вы успешно зарегестрировались!'], 201)->redirect()->route('login_view');
    }
    public function login_view(){

        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $credentials = $request->only(['email', 'password']);

        if(!$token = JWTAuth::attempt($credentials)){
            return response()->json(['error'=>'Unauthorized'], 401);
        }

         response()->json(['token'=>$token]);
         return redirect()->route('fitnes-livewire');
        // $request->session()->put('user_id',Auth::id());


        // return redirect()->route('fitnes-livewire');
    }
    public function logout(){
        JWTAuth::invalidate();

        return redirect()->route('login');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}