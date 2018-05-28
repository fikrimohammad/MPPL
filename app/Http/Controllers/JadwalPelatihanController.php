<?php

namespace App\Http\Controllers;

use App\Jadwal_pelatihan;
use Illuminate\Http\Request;

class JadwalPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 0;
        $jadwal_pelatihan = Jadwal_pelatihan::orderBy('nama', 'asc')->get();
        return view('jadwal_pelatihan.index', compact('jadwal_pelatihan'))->with('i', $i);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal_pelatihan.create');
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
            'nama_pelatihan' => 'required|unique:jadwal_pelatihan,nama',
            'tgl_dan_waktu' => 'required',
            'alamat_tempat' => 'required'
        ], [
            'nama_pelatihan.required' => 'Mohon mengisi nama pelatihan',
            'nama_pelatihan.unique' => 'Mohon maaf, jadwal pelatihan dengan nama '.$request->input('nama_pelatihan').' sudah ada',
            'tgl_dan_waktu.required' => 'Mohon mengisi tanggal dan waktu pelatihan',
            'alamat_tempat.required' => 'Mohon mengisi alamat tempat pelatihan'
        ]);

        Jadwal_pelatihan::create([
            'nama' => $request->input('nama_pelatihan'),
            'alamat_tempat' => $request->input('alamat_tempat'),
            'tgl_dan_waktu' => $request->input('tgl_dan_waktu')
        ]);

        $message = "Jadwal pelatihan dengan nama ".$request->input('nama_pelatihan')." berhasil ditambahkan";

        return redirect()->route('jadwal_pelatihan.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jadwal_pelatihan  $jadwal_pelatihan
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal_pelatihan $jadwal_pelatihan)
    {
        return view('jadwal_pelatihan.show', compact('jadwal_pelatihan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jadwal_pelatihan  $jadwal_pelatihan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal_pelatihan $jadwal_pelatihan)
    {
        return view('jadwal_pelatihan.edit', compact('jadwal_pelatihan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jadwal_pelatihan  $jadwal_pelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal_pelatihan $jadwal_pelatihan)
    {
        $new_jadwal_pelatihan = Jadwal_pelatihan::find($request->input('nama_pelatihan'));
        if ($new_jadwal_pelatihan && $new_jadwal_pelatihan->nama != $jadwal_pelatihan->nama){
            $message = "Mohon maaf, jadwal pelatihan dengan nama ".$request->input('nama_pelatihan')." sudah ada";
            return view('jadwal_pelatihan.edit')->with('failed', $message);
        }
        request()->validate([
            'nama_pelatihan' => 'required',
            'alamat_tempat' => 'required',
            'tgl_dan_waktu' => 'required'
        ], [
            'nama_pelatihan.required' => 'Mohon mengisi nama pelatihan',
            'alamat_tempat.required' => 'Mohon mengisi alamat tempat pelatihan',
            'tgl_dan_waktu.required' => 'Mohon mengisi tanggal dan waktu pelatihan'
        ]);

        $jadwal_pelatihan->nama = $request->input('nama_pelatihan');
        $jadwal_pelatihan->alamat_tempat = $request->input('alamat_tempat');
        $jadwal_pelatihan->tgl_dan_waktu = str_replace('T', ' ', $request->input('tgl_dan_waktu'));
        $jadwal_pelatihan->save();

        $message = "Jadwal pelatihan dengan nama ".$request->input('nama_pelatihan')." berhasil diubah";

        return redirect()->route('jadwal_pelatihan.index')->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jadwal_pelatihan  $jadwal_pelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal_pelatihan $jadwal_pelatihan)
    {
        $message = "Jadwal pelatihan dengan nama ".$jadwal_pelatihan->nama." berhasil dihapus";
        $jadwal_pelatihan->materi()->delete();
        $jadwal_pelatihan->delete();
        return redirect()->route('jadwal_pelatihan.index')->with('success', $message);
    }
}
