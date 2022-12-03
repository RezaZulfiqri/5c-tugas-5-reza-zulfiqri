<?php

namespace App\Http\Controllers;

use App\Models\Voli;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class VoliController extends Controller
{
    public function index()
    {
        $volis = Voli::get();
        return view('voli.index', ['volis' => $volis]);
    }

    public function create()
    {
        return view('voli.create');
    }

    public function store(Request $request)
    {
        $validatevoli = $request->validate([
            'nama_voli' => 'required|min:3',
            'negara' => 'required|min:4'
        ]);
        $negara = $request->validate([
            'kode_negara' => 'required',
            'nama_negara' => 'required|min:3',
        ]);

        $voli = Voli::create($validatevoli);
        $voli->negara()->create($negara);
        return redirect()->route('voli.index')->with('message', "Data voli {$validatevoli['nama_voli']} berhasil ditambahkan");
    }

    public function destroy(Voli $voli)
    {
        $voli->negara()->delete($voli->id);
        $voli->delete_T($voli->id);
        return redirect()->route('voli.index')->with('message', "Data voli $voli->nama_voli berhasil dihapus");
    }

    public function edit(Voli $voli)
    {
        return view('voli.edit', ['voli' => $voli]);
    }

    public function update(Request $request, Voli $voli)
    {
        $validatevoli = $request->validate([
            'nama_voli' => 'required|min:3',
            'negara' => 'required|min:4'
        ]);

        $negara = $request->validate([
            'kode_negara' => 'required',
            'nama_negara' => 'required|min:3',
        ]);

        $voli1 = Voli::find($voli->id);
        $voli1->update($validatevoli);
        $voli1->negara()->update($negara);

        return redirect()->route('voli.index')->with('message', "Data voli $voli->nama_voli berhasil diubah");
    }
}