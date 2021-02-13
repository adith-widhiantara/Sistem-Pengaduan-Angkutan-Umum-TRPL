<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class Profil2Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profil2()
    {
        $user = Auth::user();
        return view('profil2', compact('user', $user));
    }

    public function edit2()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if ($user) {
                return view('owner.profil2')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function update2(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $validate = null;
            if (Auth::user()->email === $request['email']) {
                $validate = $request->validate([
                    'name' => 'required|min:1',
                    'address' => 'required|min:1',
                    'telp' => 'required|numeric',
                    'email' => 'required|email',
                    'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);
            } else {
                $validate = $request->validate([
                    'name' => 'required|min:1',
                    'address' => 'required|min:1',
                    'telp' => 'required|numeric',
                    'email' => 'required|email|unique:users',
                    'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ]);
            }

            if ($validate) {
                $user->name = $request['name'];
                $user->address = $request['address'];
                $user->telp = $request['telp'];
                $user->email = $request['email'];
                $user->avatar = $request['avatar'];

                $user = Auth::user();

                $avatarName = $user->id . '_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();

                $request->avatar->storeAs('avatars', $avatarName);

                $user->avatar = $avatarName;

                $user->save();

                $request->session()->flash('success', 'Profil telah di perbaharui');
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
}
