<?php

namespace App\Http\Controllers;

use App\Karyawan;
use App\Kriteria;
use App\Penilaian;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penilaians = Penilaian::with(['karyawan', 'kriteria'])->get();

        return view('pages.penilaian.index', [
            'penilaians' => $penilaians
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawans = Karyawan::all();
        $kriterias = Kriteria::all();

        return view('pages.penilaian.create', [
            'karyawans' => $karyawans,
            'kriterias' => $kriterias
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Penilaian::create($data);

        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($karyawans_id)
    {
        $penilaians = Penilaian::with(['karyawan'])->where('karyawans_id', $karyawans_id)->get();
        $karyawan = Karyawan::findOrFail($karyawans_id);

        return view('pages.penilaian.detail', [
            'penilaians' => $penilaians,
            'karyawan' => $karyawan,
            'karyawans_id' => $karyawans_id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penilaian = Penilaian::with(['karyawan'])->findOrFail($id);
        // $karayawans = Karyawan::all();

        return view('pages.penilaian.edit', [
            'penilaian' => $penilaian,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $penilaian = Penilaian::findOrFail($id);
        $penilaian->update($data);

        return redirect()->route('penilaian.show', $penilaian->karyawan->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penilaian = Penilaian::findOrFail($id);
        $penilaian->delete();

        return redirect()->route('karyawan.index');
    }
}
