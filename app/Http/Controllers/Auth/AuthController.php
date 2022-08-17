<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'password' => 'required'
        ]);
        
        $user = User::where('name', $request->name)->first();
        
        if(!$user)
        {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }
        
        if(!Hash::check($request->password, $user->password))
        {
            return response()->json([
                'message' => 'Password is incorrect'
            ], 401);
        }

        if($user->role === 'adminit')
        {
            return redirect()->route('dashboard_IT');
        } else if($user->role === 'adminkeuangan')
        {
            return redirect()->route('dashboard_keuangan');
        } else if($user->role === 'user')
        {
            return redirect()->route('dashboard_user');
        }
    }
    
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}