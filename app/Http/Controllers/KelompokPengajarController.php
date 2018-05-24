<?php

namespace App\Http\Controllers;

use App\Kelompok_pengajar;
use App\Pengajar;
use App\Tempat_penugasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class KelompokPengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i = 0;
        $kelompok_pengajar = Kelompok_pengajar::orderBy('nama', 'asc')->get();
        return view('kelompok_pengajar.index', compact('kelompok_pengajar'))->with('i', $i);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengajar = Pengajar::where([['id_kelompok_pengajar', '=', NULL], ['status_kelulusan', '=', 1]])->get();
        $tempat_penugasan = Tempat_penugasan::all();
        return view('kelompok_pengajar.create', compact('pengajar', 'tempat_penugasan'));
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
            'namaKelompok' => 'required|unique:kelompok_pengajar,nama',
        ], [
            'namaKelompok.required' => 'Mohon mengisi nama kelompok_pengajar',
            'namaKelompok.unique' => 'Mohon maaf, kelompok pengajar dengan nama '.$request->input('namaKelompok').' sudah ada',
        ]);

        $kelompok_pengajar = new Kelompok_pengajar();
        $kelompok_pengajar->id_tempat_penugasan = $request->input('tempatPenugasan');
        $kelompok_pengajar->nama = $request->input('namaKelompok');
        $kelompok_pengajar->save();

        for ($i = 1 ; $i <= 3 ; $i++){
            $pengajar = Pengajar::find($request->input('idPengajar_'. $i ));
            $kelompok_pengajar->pengajar()->save($pengajar);
            $pengajar->kelompok()->associate($kelompok_pengajar);
            $pengajar->save();
        }

        $message = "Kelompok pengajar dengan nama ".$request->input('namaKelompok')." berhasil ditambahkan";

        return redirect()->route('kelompok_pengajar.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelompok_pengajar  $kelompok_pengajar
     * @return \Illuminate\Http\Response
     */
    public function show(Kelompok_pengajar $kelompok_pengajar)
    {
        $i = 0;
        return view('kelompok_pengajar.show', compact('kelompok_pengajar'))->with('i', $i);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kelompok_pengajar  $kelompok_pengajar
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelompok_pengajar $kelompok_pengajar)
    {
        $tempat_penugasan = Tempat_penugasan::all();
        $pengajar = Pengajar::where([['id_kelompok_pengajar', '=', NULL], ['status_kelulusan', '=', 1]])->get();
        return view('kelompok_pengajar.edit', compact('kelompok_pengajar', 'tempat_penugasan'))->with('pengajar', $pengajar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kelompok_pengajar  $kelompok_pengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelompok_pengajar $kelompok_pengajar)
    {
        request()->validate([
            'namaKelompok' => 'required|unique:kelompok_pengajar,nama',
        ], [
            'namaKelompok.required' => 'Mohon mengisi nama kelompok_pengajar',
            'namaKelompok.unique' => 'Mohon maaf, kelompok pengajar dengan nama '.$request->input('namaKelompok').' sudah ada',
        ]);

        $kelompok_pengajar->id_tempat_penugasan = $request->input('tempatPenugasan');
        $kelompok_pengajar->nama = $request->input('namaKelompok');
        $kelompok_pengajar->save();

        for ($i = 1 ; $i <= 3 ; $i++){
            $pengajar = Pengajar::find($request->input('idPengajar_'. $i ));
            $kelompok_pengajar->pengajar()->save($pengajar);
            $pengajar->kelompok()->associate($kelompok_pengajar);
            $pengajar->save();
        }

        $message = "Kelompok pengajar dengan nama ".$request->input('namaKelompok')." berhasil dirubah";

        return redirect()->route('kelompok_pengajar.index')->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kelompok_pengajar  $kelompok_pengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelompok_pengajar $kelompok_pengajar)
    {
        $message = "Kelompok pengajar dengan nama ".$kelompok_pengajar->nama." berhasil dihapus";
        foreach ($kelompok_pengajar->pengajar as $pengajar){
            $pengajar->kelompok()->dissociate($kelompok_pengajar);
            $pengajar->save();
        }
        $kelompok_pengajar->delete();
        return redirect()->route('kelompok_pengajar.index')->with('success', $message);
    }

    public function select_pengajar_1(){
        $peng_id = request()->peng_id;
        if ($peng_id == -99999999){
            $pengajar = NULL;
        }
        else{
            $pengajar = Pengajar::where([['id', '!=', $peng_id],
                ['status_kelulusan', '=', 1],
                ['id_kelompok_pengajar', '=', NULL]])
                ->get();
        }
        return Response::json($pengajar);
     }
    public function select_pengajar_2(){
        $peng_id1 = request()->peng_id1;
        $peng_id2 = request()->peng_id2;
        if ($peng_id2 == -99999999){
            $pengajar = NULL;
        }
        else{
            $pengajar = Pengajar::where([['id', '!=', $peng_id1],
                ['id', '!=', $peng_id2],
                ['status_kelulusan', '=', 1],
                ['id_kelompok_pengajar', '=', NULL]])
                ->get();
        }
        return Response::json($pengajar);
    }
}
