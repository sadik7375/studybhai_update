<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class profileEditController extends Controller
{


        public function updateProfile(Request $request)
        {
            $request->validate([
                'full_name' => 'string|max:255',
                'institute_name' => 'string|max:255',
                'phone_number' => 'string|max:20',
                'address' => 'string|max:255',
                'current_status' => 'string|max:255',
            ]);

            // Get the authenticated user
            $user = Auth::user();

            // Update user's profile information
            $user->profile->update([
                'full_name' => $request->input('full_name'),
                'institute_name' => $request->input('institute_name'),
                'phone_number' => $request->input('phone_number'),
                'address' => $request->input('address'),
                'current_status' => $request->input('current_status'),

            ]);

            return redirect()->back()->with('success', 'Profile updated successfully');
        }





    }











