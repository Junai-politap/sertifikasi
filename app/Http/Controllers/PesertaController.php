<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['junior_web'] = Peserta::where('jenis_sertifikasi', 'Junior Web Programing')->get();
        $data['junior_desain'] = Peserta::where('jenis_sertifikasi', 'Junior Grapich Designer')->get();

        return view('peserta.pendaftar', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $peserta = Peserta::find(request('nim'));
		if($peserta) return back()->with('success', 'Data Anda Sudah Terdaftar');

        $peserta = New Peserta();
        $peserta->nim = request('nim');
        $peserta->nama_mahasiswa = request('nama_mahasiswa');
        $peserta->jenis_sertifikasi = request('jenis_sertifikasi');
        $peserta->save();

        return redirect('/')->with('success', 'Data Berhasil Dikirim');

    }

    public function dataPendaftar() {
        $data['list_data_pendaftar'] = Peserta::all();
        
        return view('peserta.data-pendaftar', $data);
    }
}
