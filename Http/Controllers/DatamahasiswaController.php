<?php

namespace App\Http\Controllers;

use App\Models\Datamahasiswa;
use Illuminate\Http\Request;

class DatamahasiswaController extends Controller
{
    public function indexuser()
    {
        $data = Datamahasiswa::all();
        return view('datamahasiswauser', compact('data'));
    }

    public function index()
    {
        $data = Datamahasiswa::all();
        return view('datamahasiswaadmin', compact('data'));
    }

    public function tambahmahasiswa()
    {
        return view('tambahdata');
    }

    public function insertdata(Request $request)
    {
        Datamahasiswa::create($request->all());
        return redirect()->route('datamahasiswaadmin')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandata($nim)
    {
        $data = Datamahasiswa::find($nim);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $nim)
    {
        $data = Datamahasiswa::find($nim);
        $data->update($request->all());
        return redirect()->route('datamahasiswaadmin')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($nim)
    {
        $data = Datamahasiswa::find($nim);
        $data->delete();
        return redirect()->route('datamahasiswaadmin')->with('success', 'Data Berhasil Dihapus');
    }
}