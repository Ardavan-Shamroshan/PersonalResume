<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\Rules\Password;

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
        $photoPath = null;

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'photo' => ['required'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        if ($request->hasFile('photo')) {
            // set name for image to upload - current timestamp.image extension (1662656825.jpg)
            $userImageName = Carbon::now()->timestamp . '.' . $request->photo->extension();
            // set image address in data['image'] field to save in database
            $photoPath = "images/user/$userImageName";
            $request->file('photo')->storeAs('user', $userImageName);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'photo' => $photoPath ?? null,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
