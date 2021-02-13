<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pengaduan2;

class Pengaduan2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan2 = Pengaduan2::latest()->paginate(10);
        return view('owner.tabelpengaduan2', compact('pengaduan2'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index1()
    // {
    //     $pengaduan2 = Pengaduan2::all();

    //     return view('owner.pengaduan2', compact('pengaduan2'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owner.buatpengaduan2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'uraian' => 'required',
            'nama' => 'required',
            'nomor' => 'required',
            'tempat' => 'required',
            'foto' => 'required|image|max:2048'
        ]);

        $foto = $request->file('foto');

        $foto_name = rand() . '.' . $foto->getClientOriginalExtension();
        $foto->move(public_path('foto'), $foto_name);
        $form_data = array(
            'judul' => $request->judul,
            'uraian' => $request->uraian,
            'nama' => $request->nama,
            'nomor' => $request->nomor,
            'tempat' => $request->tempat,
            'foto' => $foto_name,
            'user_id' => auth()->id()
        );

        Pengaduan2::create($form_data);

        return redirect('buatpengaduan2')->with('success', 'Pengaduan telah di kirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan2 = Pengaduan2::findOrFail($id);
        return view('owner.lihatpengaduan2', compact('pengaduan2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan2 = Pengaduan2::findOrFail($id);
        return view('owner.ubahpengaduan2', compact('pengaduan2'));
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
        $foto_name = $request->hidden_foto;
        $foto = $request->file('foto');
        if ($foto != '') {
            $request->validate([
                'judul' => 'required',
                'uraian' => 'required',
                'nama' => 'required',
                'nomor' => 'required',
                'tempat' => 'required',
                'foto' => 'required|image|max:2048'
            ]);
            $foto_name = rand() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('foto'), $foto_name);
        } else {
            $request->validate([
                'judul' => 'required',
                'uraian' => 'required',
                'nama' => 'required',
                'nomor' => 'required',
                'tempat' => 'required'
            ]);
        }

        $form_data = array(
            'judul' => $request->judul,
            'uraian' => $request->uraian,
            'nama' => $request->nama,
            'nomor' => $request->nomor,
            'tempat' => $request->tempat,
            'foto' => $foto_name
        );

        Pengaduan2::whereId($id)->update($form_data);

        return redirect('tabelpengaduan2')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan2 = Pengaduan2::findOrFail($id);
        $pengaduan2->delete();
        return redirect('tabelpengaduan2')->with('success', 'Data berhasil di hapus');
    }
}
