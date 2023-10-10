<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremasyarakatRequest;
use App\Http\Requests\UpdatemasyarakatRequest;
use Illuminate\Http\Request;
use App\Models\masyarakat;
use Illuminate\Support\Facades\DB;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masyarakats = DB::table('masyarakats')->get();
        return view('beranda.data', compact('masyarakats'));
     
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
    public function store(StoremasyarakatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function sktm($id)
    {
        $masyarakat = masyarakat::findOrFail($id);
        return view('sktm.sktm', compact('masyarakat'));
    }
    public function statusperkawinan($id)
    {
        $masyarakat = masyarakat::findOrFail($id);
        return view('surat.dudajanda', compact('masyarakat'));
    }
    public function bebaspajak($id)
    {
        $masyarakat = masyarakat::findOrFail($id);
        return view('surat.bebaspajak', compact('masyarakat'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = masyarakat::find($id);
    
        if (!$data) {
            return redirect()->route(data)->with('error', 'Data tidak ditemukan.');
        }
    
        return view('beranda.update', compact('data'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = masyarakat::find($id);
    
        if (!$data) {
            return redirect()->route('data')->with('error', 'Data tidak ditemukan.');
        }
    
        // Validasi input data
        $validatedData = $request->validate([
            'no_kk' => ['required', 'max:255'],
            'nik' => ['required', 'max:255'],
            'nama' => ['required', 'max:255'],
            'tempat_lahir' => ['required', 'max:255'],
            'tanggal_lahir' => ['required', 'date'],
            'status_perkawinan' => ['required', 'boolean'],
            'jenis_kelamin' => ['required', 'max:255'],
            'alamat' => ['required', 'max:255'],
            'pekerjaan' => ['required', 'max:255'],
            'agama' => ['required', 'max:255'],
            'rt' => ['required', 'max:255'],
            'rw' => ['required', 'max:255'],
        ]);
    
        // Simpan perubahan data
        $data->update($validatedData);
    
        return redirect()->route('data')->with('success', 'Data berhasil diperbarui.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $data = masyarakat::find($id);

        if (!$data) {
            return redirect()->route('data')->with('error', 'Data tidak ditemukan.');
        }

        $data->delete();

        return redirect()->route('data')->with('success', 'Data berhasil dihapus.');
    }
    public function search(Request $request)
    {
        $keyword = $request->input('query');

        $masyarakats = masyarakat::where('nama', 'LIKE', "%{$keyword}%")->get();

        return view('sktm.result', compact('masyarakats'));
    }

    public function caridata(Request $request)
    {
        $keyword = $request->input('query');

        $masyarakats = masyarakat::where('nama', 'LIKE', "%{$keyword}%")->get();

        return view('beranda.data', compact('masyarakats'));
    }
    public function tambah(Request $request)
    {
        
        
        $validatedData = $request->validate([
            'no_kk' => 'required|max:255',
            'nik' => 'required|max:255',
            'nama' => 'required|max:255',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|date',
            'status_perkawinan' => 'required|boolean',
            'jenis_kelamin' => 'required|max:255',
            'alamat' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
            'agama' => 'required|max:255',
            'rt' => 'required|max:255',
            'rw' => 'required|max:255',
        ]);
    
      
        masyarakat::create($validatedData);
        return redirect('/')->with('success', 'Data Masyarakat berhasil diunggah!');
    }

}
