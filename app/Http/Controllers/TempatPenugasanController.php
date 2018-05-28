<?php

namespace App\Http\Controllers;

use App\Tempat_penugasan;
use Illuminate\Http\Request;

class TempatPenugasanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 0;
        $tempat_penugasan = Tempat_penugasan::orderBy('nama', 'asc')->get();
        return view('tempat_penugasan.index', compact('tempat_penugasan'))->with('i', $i);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tempat_penugasan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nama' => 'required|unique:tempat_penugasan,nama',
            'alamat' => 'required',
            'nama_contact_person' => 'required',
            'no_hp_contact_person' => 'required'

        ], [
            'nama.required' => 'Mohon mengisi nama tempat penugasan',
            'nama.unique' => 'Mohon maaf, tempat penugasan dengan nama '.$request->input('nama').' sudah ada',
            'alamat.required' => 'Mohon mengisi alamat tempat penugasan',
            'nama_contact_person.required' => 'Mohon mengisi nama contact person tempat penugasan',
            'no_hp_contact_person.required' => 'Mohon mengisi no hp contact person tempat penugasan'
        ]);

        Tempat_penugasan::create([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'nama_contact_person' => $request->input('nama_contact_person'),
            'no_hp_contact_person' => $request->input('no_hp_contact_person')
        ]);

        $message = "Tempat penugasan dengan nama ".$request->input('nama')." berhasil ditambahkan";

        return redirect()->route('tempat_penugasan.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tempat_penugasan  $tempat_penugasan
     * @return \Illuminate\Http\Response
     */
    public function show(Tempat_penugasan $tempat_penugasan)
    {
        return view('tempat_penugasan.show', compact('tempat_penugasan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tempat_penugasan  $tempat_penugasan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tempat_penugasan $tempat_penugasan)
    {
        return view('tempat_penugasan.edit', compact('tempat_penugasan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tempat_penugasan  $tempat_penugasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tempat_penugasan $tempat_penugasan)
    {
        $new_tempat_penugasan = Tempat_penugasan::find($request->input('nama_pelatihan'));
        if ($new_tempat_penugasan && $new_tempat_penugasan->nama != $tempat_penugasan->nama){
            $message = "Mohon maaf, tempat penugasan dengan nama ".$request->input('nama')." sudah ada";
            return view('tempat_penugasan.edit')->with('failed', $message);
        }
        request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nama_contact_person' => 'required',
            'no_hp_contact_person' => 'required'
        ], [
            'nama.required' => 'Mohon mengisi nama tempat penugasan',
            'alamat.required' => 'Mohon mengisi alamat tempat penugasan',
            'nama_contact_person.required' => 'Mohon mengisi nama contact person tempat penugasan',
            'no_hp_contact_person.required' => 'Mohon mengisi no hp contact person tempat penugasan'
        ]);

        $tempat_penugasan->nama = $request->input('nama');
        $tempat_penugasan->alamat = $request->input('alamat');
        $tempat_penugasan->nama_contact_person = $request->input('nama_contact_person');
        $tempat_penugasan->no_hp_contact_person = $request->input('no_hp_contact_person');
        $tempat_penugasan->save();

        $message = "Tempat penugasan dengan nama ".$request->input('nama')." berhasil diubah";

        return redirect()->route('tempat_penugasan.index')->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tempat_penugasan  $tempat_penugasan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tempat_penugasan $tempat_penugasan)
    {
        $message = "Tempat penugasan dengan nama ".$tempat_penugasan->nama." berhasil dihapus";
        foreach ($tempat_penugasan->kelompok as $kelompok){
            $kelompok->penugasan()->dissociate($tempat_penugasan);
            $kelompok->save();
        }
        $tempat_penugasan->delete();
        return redirect()->route('tempat_penugasan.index')->with('success', $message);
    }
}
