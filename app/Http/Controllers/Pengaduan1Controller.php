<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pengaduan1;

class Pengaduan1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan1 = Pengaduan1::latest()->paginate(10);
        return view('dinas.tabelpengaduan1', compact('pengaduan1'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $pengaduan1 = Pengaduan1::all();

        return view('owner.pengaduan2', compact('pengaduan1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dinas.buatpengaduan1');
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
            'foto' => 'required|image|max:2048',
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

        Pengaduan1::create($form_data);

        return redirect('buatpengaduan1')->with('success', 'Pengaduan telah di kirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $pengaduan1 = Pengaduan1::findOrFail($id);
        // return view('dinas.lihatpengaduan1', compact('pengaduan1'));

        $pengaduan1 = \App\Pengaduan1::where('id', '=', $id)->first();
        $creator = \App\User::where('id', '=', $pengaduan1->user_id)->first();
        $comment = \App\Comment::select("*")
            ->join('users', 'users.id', '=', 'comments.user_id')
            ->where('post_id', '=', $pengaduan1->id)
            ->get()
            ->sortby('created_at');

        return view('dinas.lihatpengaduan1', compact('pengaduan1', 'creator', 'comment'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show1($id)
    {
        // $pengaduan1 = Pengaduan1::findOrFail($id);
        // return view('dinas.lihatpengaduan1', compact('pengaduan1'));

        $pengaduan1 = \App\Pengaduan1::where('id', '=', $id)->first();
        $creator = \App\User::where('id', '=', $pengaduan1->user_id)->first();
        $comment = \App\Comment::select("*")
            ->join('users', 'users.id', '=', 'comments.user_id')
            ->where('post_id', '=', $pengaduan1->id)
            ->get()
            ->sortby('created_at');

        return view('owner.comment2', compact('pengaduan1', 'creator', 'comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan1 = Pengaduan1::findOrFail($id);
        return view('dinas.ubahpengaduan1', compact('pengaduan1'));
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

        Pengaduan1::whereId($id)->update($form_data);

        return redirect('tabelpengaduan1')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan1 = Pengaduan1::findOrFail($id);
        $pengaduan1->delete();
        return redirect('tabelpengaduan1')->with('success', 'Data berhasil di hapus');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit1($id)
    {
        $pengaduan1 = Pengaduan1::findOrFail($id);
        return view('owner.verifikasi2', compact('pengaduan1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request, $id)
    {
        $request->validate([
            'status' => 'required'
        ]);

        $form_data = array(
            'status' => $request->status
        );

        Pengaduan1::whereId($id)->update($form_data);

        return redirect('pengaduan2')->with('success', 'Data berhasil di ubah');
    }
}
