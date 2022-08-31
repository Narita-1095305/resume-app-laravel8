<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'family_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'family_furigana' => 'required|string|max:255',
            'first_furigana' => 'required|string|max:255',
            'birth_year' => 'required|integer|digits:4',
            'birth_month' => 'required|integer|digits_between:1,2',
            'birth_day' => 'required|integer|digits_between:1,2',
            'gender' => 'required|integer|digits_between:1,3',

            'telephone_number' => 'required|string|max:20',
            'zip_code' => 'required|string|size:7',
            'address' => 'required|string|max:255',
            'address_furigana' => 'required|string|max:255',
            'building' => 'nullable|string|max:255',

            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        
        $user = User::create([
            'family_name' => $request->family_name,
            'first_name' => $request->first_name,
            'family_furigana' => $request->family_furigana,
            'first_furigana' => $request->first_furigana,
            'birth_year' => $request->birth_year,
            'birth_month' => $request->birth_month,
            'birth_day' => $request->birth_day,
            'gender' => $request->gender,

            'telephone_number' => $request->telephone_number,
            'zip_code' => $request->zip_code,
            'address' => $request->address,
            'address_furigana' => $request->address_furigana,
            'building' => is_null($request->building) ? '' : $request->building,

            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
