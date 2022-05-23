<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Pasien;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index()
    {
        return view('Regis', [
            "title" => "Registration",
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|same:confirm_password|min:5|max:255',
            'confirm_password' => 'required|min:5|max:255',
        ]);

        unset($validatedData["confirm_password"]);
        $validatedData["password"] = Hash::make($validatedData["password"]);

        if($request->level === "pasien") {
            Pasien::create($validatedData);
            return redirect('/loginPasien')->with('success', 'Success! Please Log In as Pasien!');
        } else if($request->level === "dokter") {
            Doctor::create($validatedData);
            return redirect('/loginDokter')->with('success', 'Success! Please Log In as Doctor!');
        }

    }
}
