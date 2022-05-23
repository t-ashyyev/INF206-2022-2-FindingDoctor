<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PasienController extends Controller
{
    public function index()
    {
        return view('HomePasien', [
            "title" => "Pasien",
        ]);
    }

    public function login()
    {
        return view('loginPasien', [
            "title" => "Log In Pasien",
        ]);
    }

    public function authenticate(Request $request)
    {

        // validate email and password
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return Redirect::intended('/HomePasien')->with('success', 'Log In Success!');
        }

        return Redirect::intended('/loginPasien')->with('toast_error', 'Log In Failed! <br> Username or Password Wrong!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Log Out Success!');
    }

    public function find(Request $request)
    {

        return view('FindDokter', [
            "data" => null
        ]);
    }

    public function find_doctor(Request $request)
    {
        // $doctors = Doctor::latest();

        $findDoctor = Doctor::where('first_name', 'like', '%' . $request->search . '%')
            ->orWhere('last_name', 'like', '%' . $request->search . '%')
            ->orWhere('address', 'like', '%' . $request->search . '%')->get();

        return view('FindDokter', [
            "data" => $findDoctor
        ]);
    }
}
