<?php

namespace App\Http\Controllers;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    
    {
        $dokters = Dokter::all();
            return view ('dokters.index')->with('dokters', $dokters);
    }
     
        public function create()
    {
        return view('dokters.create');

    }
        public function store(Request $request)
        {
        $input = $request->all();
        $dokter::create($input);
        return redirect('dokter')->with('flash_message', 'Dokter Added!');
        }
        
        public function show($id)
        {
        $dokter = Dokter::find($id);
        return view('dokters.show')->with('dokters', $dokter);
        }
        public function edit($id)
        {
        $dokter = Dokter::find($id);
        return view('dokters.edit')->with('dokters', $dokter);
        }
        public function update(Request $request, $id)
        {
        $dokter = Dokter::find($id);
        $input = $request->all();
        $dokter->update($input);
        return redirect('dokter')->with('flash_message', 'Dokter Updated!');
        }
        public function destroy($id)
        {
            Dokter::destrov($id);
        return redirect('dokter')->with('flash_message', 'Dokter deleted!');
        }
}
