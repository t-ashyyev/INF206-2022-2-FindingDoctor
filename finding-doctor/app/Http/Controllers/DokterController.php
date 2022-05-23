<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Content;
use App\Models\Doctor;
use App\Models\Pasien;
use App\Models\Surat;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class DokterController extends Controller
{
    public function index()
    {
        return view('HomeDokter', [
            "data" => Doctor::where('id', auth('doctor')->user()->id)->get()->first()
        ]);
    }

    public function login()
    {
        return View('loginDokter', [
            "title" => "Log In Dokter",
        ]);
    }

    public function authenticate(Request $request)
    {

        // validate username and password
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // ddd($credentials);

        if (Auth::guard('doctor')->attempt($credentials)) {
            // dd('gagal');
            $request->session()->regenerate();
            return Redirect::intended('/HomeDokter')->with('success', 'Log In Success!');
        }

        return Redirect::intended('/loginDokter')->with('toast_error', 'Log In Failed! <br> Username or Password Wrong!');
    }

    public function logout(Request $request)
    {
        Auth::guard('doctor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Log Out Success!');
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'post_code' => 'required',
            'experience' => 'required',
            'additional' => 'required',
            'picture' => 'image|file|max:8024',
        ]);

        if ($request->file('picture')) {
            $validatedData['picture'] = $request->file('picture')->store('picture');
        }

        Doctor::where([
            'id' => $request->id,
        ])->update($validatedData);


        return redirect('/HomeDokter')->with('success', 'Data has been updated!');
    }
}
