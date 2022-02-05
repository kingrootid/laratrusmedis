<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;

class ApiAuthController extends Controller
{
    public function signin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = Auth::user();
            $success['token'] =  $authUser->createToken('token')->plainTextToken;
            $success['name'] =  $authUser->name;
            return response()->json([
                'success' => true,
                'message' => 'Login Successful',
                'data' => $success
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }
    }
    public function signup(Request $request)
    {
        $validateData = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'address' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'phone' => 'required|string|min:10|max:14|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        $input = $validateData;
        $check = User::where('email', $input['email'])->first();
        if ($check) {
            return response()->json([
                'success' => false,
                'message' => 'Email already exists or Error in validation',
            ], 401);
        } else {
            $input['role'] = "Pasien";
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);
            $success['token'] =  $user->createToken('MyAuthApp')->plainTextToken;
            $success['name'] =  $user->name;
            return response()->json([
                'success' => true,
                'message' => 'Successfully created user!',
            ], 200);
        }
    }
}
